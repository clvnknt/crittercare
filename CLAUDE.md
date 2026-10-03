# CLAUDE.md

CritterCare: a Laravel 10 thesis project (animal shelter management: adoption, missing pets, case reports, pet monitoring). Read `README.md` for scope and setup, and `healing.md` for known issues.

## Commands
```bash
composer install
cp .env.example .env && php artisan key:generate   # then set DB_DATABASE=crittercare_db, MAIL_MAILER=log
php artisan migrate:fresh --seed                     # reset DB with demo data (password for all seeded users: CCPass_2324)
rm -rf public/storage && php artisan storage:link    # public/storage is a committed placeholder dir; must be replaced by the symlink
php artisan serve                                    # http://127.0.0.1:8000
php artisan test                                     # only example tests exist
php artisan optimize:clear                           # after .env/config/route edits
```
Do NOT run `php artisan route:cache`. It fails because of a string-syntax route (healing.md B3).
No frontend build: views load Bootstrap 5 and jQuery from CDNs. `npm` is not needed and there is no `vite.config.js`.

## Architecture
- Everything is in `routes/web.php`, grouped by role prefix:
  - `/u` → middleware `auth,user`
  - `/a` → `auth,admin`
  - `/s` → `auth,super-admin`
  Route names follow `users.*`, `admins.*`, `super-admins.*`.
- Roles are two booleans on `users`: `isAdmin`, `isSuperAdmin`. A super admin has both set to 1. Check roles with the attributes (`$user->isAdmin`, `$user->isSuperAdmin`). Do not use the `User::isAdmin()` method; it is broken (B9).
- Role middleware is registered in `app/Http/Kernel.php` under `$routeMiddleware`, alongside the stock `$middlewareAliases`. Laravel 10 merges both arrays.
- After login, `LoginController::authenticated` redirects by role. Users can log in by email or username.
- Controllers are flat in `app/Http/Controllers`. The user side and the admin side each have their own controller per module (`MissingPetsController` vs `AdminMissingPetsController`). There are no service or repository layers, form requests, policies or API.
- Adoption flow: `AdoptionRequest` + `AdoptionStatus` (a separate 1:1 table holding the status) → admin approves → `Pet.up_for_adoption = 'Adopted'` and a `PetMonitoring` row is created (`AdminAdoptionRequestsController::approveAdoptionRequest`).
- Enum values are case-sensitive in code. Examples: `pets.up_for_adoption` is `Yes/No/Processing/Adopted`, and adoption status is lowercase `pending/approved/declined/cancelled`. Check the migration before writing new values.
- Uploads go to the `public` disk (`storage/app/public/media/...`) and render via `asset('storage/...')`.
- PDFs come from barryvdh/laravel-dompdf (`\PDF::loadView(...)`). Each module has a `generate-*-reports.blade.php` view.
- Layout: `resources/views/layouts/app.blade.php` picks navbar and sidebar by role. Pages `@extends('layouts.app')` and fill `@section('content')`.

## Conventions / gotchas
- `vendor/` and `node_modules/` are committed. Avoid noisy diffs there. Do not edit vendor code.
- `crittercare_db.sql` (an old phpMyAdmin dump) exists only in git history: `git show 6e9ef44:crittercare_db.sql`.
- Pet surrender and feedback are dead or abandoned features. Do not extend them unless asked.
- Original environment: XAMPP, PHP 8.2, MariaDB 10.4. Target PHP 8.1–8.3.
- Match the existing style: plain controllers with inline `$request->validate()`, and Eloquent directly in controllers.
