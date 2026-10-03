# healing.md — CritterCare troubleshooting & known issues

Two parts: **setup errors** (symptom, cause, fix) and **known code bugs**.
The bugs were found by auditing the repo and running a smoke test on 2026-10-03
(Ubuntu 24.04 / WSL2, PHP 8.3.6, MariaDB 10.11). Bugs marked **(verified)**
were reproduced in that test. None of them has been fixed yet.

---

## 1. Setup errors

### `php: command not found` / `composer: command not found`
PHP and Composer are not installed or not on PATH. Follow the prerequisites in `README.md`.
On Windows with XAMPP, add `C:\xampp\php` to PATH.

### `Composer detected issues in your platform: Your Composer dependencies require a PHP version ">= 8.1.0"`
Your PHP is too old. Install PHP 8.2.

### Lots of deprecation warnings or errors after `composer install` on PHP 8.4+
Laravel 10 targets PHP 8.1–8.3. Use PHP 8.2.

### `could not find driver` (`SQLSTATE[HY000]`)
The `pdo_mysql` extension is missing.
- Ubuntu: `sudo apt install php8.2-mysql`
- XAMPP: uncomment `extension=pdo_mysql` in `php.ini`

### `SQLSTATE[HY000] [2002] Connection refused`
MySQL / MariaDB is not running, or `DB_HOST` / `DB_PORT` are wrong.
- XAMPP: start MySQL in the control panel.
- WSL: `sudo service mariadb start`

### `SQLSTATE[HY000] [1045] Access denied for user 'root'@'localhost'`
On Ubuntu, MariaDB `root` uses socket auth and cannot log in by password from PHP.
Create a dedicated user (see README, Option B) and set it in `.env`.

### `SQLSTATE[HY000] [1049] Unknown database 'laravel'`
`.env` still has the default `DB_DATABASE=laravel`. Set `DB_DATABASE=crittercare_db` and create that database.

### `No application encryption key has been specified.`
Run `php artisan key:generate`.

### `Base table or view already exists` during `migrate`
The database already has tables (for example from the old SQL dump). Run `php artisan migrate:fresh --seed`.
This drops all tables.

### `Class "Faker\Factory" not found` during `db:seed`
Dev dependencies were skipped (`composer install --no-dev`). Run plain `composer install`.

### `The [public/storage] link already exists.` from `storage:link`
`public/storage/` is a real folder committed to git (it only holds a `.gitignore`).
Delete it, then link:
```bash
rm -rf public/storage && php artisan storage:link
```
Do not commit the deletion unless you also stop tracking that folder.

### Uploaded images show as broken
- The `public/storage` symlink is missing. See the previous entry.
- Seeded records have `photo = null`, so they show a placeholder or a broken image. This is expected.
- On Windows, `storage:link` needs an admin terminal or Developer Mode enabled.

### `file_put_contents(.../storage/framework/...): Failed to open stream: Permission denied`
```bash
chmod -R ug+rw storage bootstrap/cache
```

### Forgot-password does nothing or throws a mail error
`.env.example` points mail at `mailpit:1025`, which does not exist locally.
Set `MAIL_MAILER=log`. The reset email, including its link, is then written to `storage/logs/laravel.log`.

### Stale config, routes or views after editing `.env`
```bash
php artisan optimize:clear
```

### `git status` shows `vendor/composer/installed.php` and `vendor/composer/LICENSE` modified after `composer install`
This is harmless. `vendor/` is committed, so Composer regenerates these files locally.
Discard the changes with `git checkout -- vendor/composer`, or leave them uncommitted.

### `php artisan route:cache` fails
This is expected. See bug B3 below. Do not cache routes until that bug is fixed.

---

## 2. Known code bugs (not fixed)

| #  | Where | Problem | Effect |
|----|-------|---------|--------|
| B1 (verified) | `SuperAdminController::userDistributionChart` (`/s/user-distribution-chart`) | Uses `ConsoleTVs\Charts\Facades\Charts::create(...)`, a v5 API. The installed `consoletvs/charts` v6 has no such facade. | 500 error on that route. The main `/s/dashboard` is fine. |
| B2 (verified) | `Controller::aboutUs` / `contactUs` | Views `about_us` and `contact_us` do not exist. | 500 on `/about-us` and `/contact-us`. |
| B3 | `routes/web.php` — `/u/getCaseTypes/{type}` | Old string syntax `'ReportsController@getCaseTypes'`, but Laravel 10 has no controller namespace prefix. | 500 on that route. Breaks `route:cache`. |
| B16 (verified) | `AdminPetController::view` (`/a/pets/{pet}`) | Reads `$pet->adoptionRequest->status`, but `Pet` only defines `adoptionRequests()` (plural). Status also lives in `adoption_status`, not on the request. | 500 on the admin view page of **every** pet. |
| B17 (verified) | `super-admins/manage-users/index.blade.php:85` | Calls `route('getCaseTypes')`. No route has that name (see B3). | 500 on `/s/manage/users`. |
| B18 (verified) | `generate-adoption-requests-reports.blade.php` | Uses undefined `$totalMissingPets` (copy-pasted from the missing-pets report). | 500 on `/a/admin/adoption-requests/export-pdf`. |
| B4 (verified) | `SuperAdminMiddleware` | Redirects non-super-admins to route `user.dashboard`, which does not exist (the real name is `users.user-dashboard`). | Users or admins who hit `/s/*` get a 500 instead of a redirect. |
| B5 | `RedirectIfAuthenticated` / `LoginController::$redirectTo` | Falls back to `route('home')` / `/home`. Neither exists. | Latent. Only `/login` and `/register` use `guest` today, and they are special-cased. Any new guest-only route would error. |
| B6 (verified) | `routes/web.php` — `/pets/export-pdf` | Defined outside any auth group. | Anyone can download the pets PDF without logging in. |
| B7 | `routes/web.php` — `missing=pets/own-reports` | Typo: `=` instead of `-`. | The URL is `/u/missing=pets/own-reports`. It works, but looks wrong. |
| B8 | Views `users/available-pets/view.blade.php:82`, `users/adoptions/approved-adoptions/show-approved.blade.php:22` | Load pet photos from `storage/images/`, but pets are saved to `storage/media/adoption/`. | Broken images in "recommended pets" and on the approved-adoption page. |
| B9 | `User::isAdmin()` | Method checks `$this->role === 'isAdmin'`, but there is no `role` column. Everything else reads the `isAdmin` attribute directly. | Calling `$user->isAdmin()` (with parentheses) always returns `false`. |
| B10 | `UserMiddleware` | Only blocks super admins. Plain admins can open `/u/*` pages. | Admins can use the user side. |
| B11 | `FeedbackController` | No routes, no `Feedback` model, no `feedback.create` view. | Dead code. |
| B12 | Pet surrender module | Marked "DON'T USE" in routes. Not in thesis scope. | Dead feature. Leave it alone or remove it. |
| B13 | Duplicate route name `users.change-valid-id` | Defined twice (`/u/users/change-valid-id` and `/u/account-settings/change-valid-id`). | The second definition wins. Harmless, but confusing. |
| B14 | `.gitignore` | Ignores only `.env`. `vendor/` and `node_modules/` (~9.5k files) are committed. | Huge diffs whenever dependencies change. Consider ignoring both and running `composer install`. |
| B15 | `users.gender` enum is lowercase (`male`/`female`/`other`); registration validates `Male`/`Female`/`Other` | MySQL enum matching ignores case, so this works. Strict DBs or other drivers may reject it. | Low risk. |

### Smoke test results (2026-10-03)
These work: logins for all three roles, landing/login/register/forgot pages, every `/u` page tested, adoption request → admin approve → `pet_monitoring` row created, the PDF exports for pets/missing pets/reports/monitoring, and the forgot-password email written to the log.
These fail: B1, B2, B4, B16, B17, B18.

### Quick health check after setup
1. `/` loads the landing page.
2. Log in as `superadmin` / `CCPass_2324`. You should land on `/s/dashboard`.
3. Log in as `admin` and go to `/a/pets`. Add a pet with a photo. The photo should display; if not, check `storage:link`.
4. Log in as `user1`, go to `/u/adopt/available-pets`, and submit a request.
5. As `admin`, approve the request. Check that it appears in `/a/pet-monitoring`.
