# CritterCare

CritterCare is a web-based animal shelter / pound management system built as a
thesis project (Angeles University Foundation, 2023–2024). It lets the public
adopt pets, report missing pets and report animal cases, and gives shelter staff
tools to manage pets, review adoption requests, monitor adopted pets and export
PDF reports.

- **Stack:** Laravel 10 (PHP 8.1+), MySQL / MariaDB, Blade templates, Bootstrap 5 + jQuery (loaded from CDNs), DomPDF for reports.
- **Original dev environment:** XAMPP on Windows (PHP 8.2.4, MariaDB 10.4.28).

---

## Scope

Three roles, stored as two boolean columns on `users`:

| Role        | `isAdmin` | `isSuperAdmin` | URL prefix | Lands on after login |
|-------------|-----------|----------------|------------|----------------------|
| User        | 0         | 0              | `/u`       | `/u/dashboard`       |
| Admin       | 1         | 0              | `/a`       | `/a/dashboard`       |
| Super Admin | 1         | 1              | `/s`       | `/s/dashboard`       |

### User (`/u/...`)
- Register / log in (email **or** username) / forgot-password via email link.
- Account settings: personal details, password, additional details (address, occupation, household, valid ID upload).
- **Adoption:** browse available pets, submit an adoption request with a reason, track or cancel requests, see adopted pets.
- **Missing pets:** post a missing-pet report with photo, browse others' reports, update the status of your own.
- **Reports:** file an animal case report (case type, description, photo/video).

### Admin (`/a/...`)
- **Manage pets:** CRUD pets with photos, mark them up for adoption, export PDF.
- **Adoption requests:** view, approve or decline, add or edit notes, export PDF. Approving a request sets the pet to `Adopted` and creates a pet-monitoring record.
- **Pet monitoring:** track adopted pets' condition (Good/Fair/Poor), add notes, stop or re-enable monitoring, export PDF.
- **Missing pet reports:** review and change status (pending/open/solved/cancelled), export PDF.
- **Case types:** CRUD the categories used by user reports.
- **User reports:** review and update status (pending/acknowledged/solved/cancelled), export PDF.

### Super Admin (`/s/...`)
- Dashboard with user/admin counts.
- Manage users, manage admins, promote users to admin, demote admins. Promotions and demotions are logged.

### Out of scope / abandoned
- **Pet surrendering** (`/u/pet-surrender*`, `/a/pet-surrenders*`) is marked "DON'T USE" in `routes/web.php`. The code and table are still there.
- **Feedback** has a controller and table but no routes, model or view.

See [`healing.md`](healing.md) for known broken bits.

---

## Project structure

```
app/
  Http/Controllers/
    Auth/                      Login, Register, ForgotPassword
    User*, Adoption*, MissingPets*, Reports*, PetSurrender*, AdditionalUserDetails*   user side
    Admin*                     admin side (one controller per module)
    SuperAdmin*                super-admin side
    PDFController              pets PDF export
  Http/Middleware/
    UserMiddleware             'user'        – bounces super admins to /s
    AdminMiddleware            'admin'       – requires isAdmin
    SuperAdminMiddleware       'super-admin' – requires isSuperAdmin
  Models/                      User, Pet, AdoptionRequest, AdoptionStatus, MissingPet,
                               Report, CaseType, PetMonitoring, PetSurrender,
                               Promotion, Demotion, AdditionalUserDetails, ...
database/
  migrations/                  full schema (source of truth)
  seeders/                     demo data: 1 super admin, 10 admins, 100 users, 200 pets, ...
resources/views/
  layouts/                     app.blade.php picks navbar/sidebar by role
  users/  admins/  super-admins/  auth/  email/
  index.blade.php              public landing page
routes/web.php                 every route; grouped by /u, /a, /s
public/
  css/ js/                     custom styles and sidebar scripts
  site-icons/ site-logos/ site-media/   static images
storage/app/public/            uploaded files (pet photos, valid IDs, report media)
```

### Data model (main tables)

```
users ─┬─ additional_user_details (1:1)
       ├─ adoption_requests ── adoption_status (1:1, pending/approved/declined/cancelled)
       │        └─ pets
       ├─ missing_pets
       ├─ reports ── case_types
       ├─ promotions / demotions
       └─ pet_surrenders (unused)
pets ── pet_monitoring (created when an adoption is approved)
```

### Upload locations (disk `public`, served through `public/storage` symlink)

| What               | Path under `storage/app/public/` |
|--------------------|----------------------------------|
| Pet photos         | `media/adoption/`                |
| Valid IDs          | `media/valid-ids/` (also `valid-ids/` from account settings) |
| Report / missing-pet images | `media/report/images/`  |
| Report videos      | `media/report/videos/`           |

---

## Local setup

`vendor/` and `node_modules/` are committed, but reinstall them anyway so they
match your PHP version. No frontend build step is needed: the views load
Bootstrap and jQuery from CDNs and never call `@vite`.

### Prerequisites

- PHP **8.1–8.3** (8.2 recommended) with extensions: `pdo_mysql`, `mbstring`, `xml`, `curl`, `zip`, `gd`, `bcmath`, `fileinfo`
- Composer 2
- MySQL 8 or MariaDB 10.4+

#### Option A – Windows with XAMPP (original setup)
1. Install XAMPP with PHP 8.2. Start **Apache** and **MySQL** from the control panel.
2. Install Composer for Windows and point it at `C:\xampp\php\php.exe`.
3. Open phpMyAdmin (`http://localhost/phpmyadmin`) and create database `crittercare_db` (collation `utf8mb4_unicode_ci`).

#### Option B – WSL / Ubuntu 24.04 (tested 2026-10-03: PHP 8.3.6, MariaDB 10.11)
Ubuntu 24.04 ships PHP 8.3 and Composer, so no PPA is needed:
```bash
sudo apt update
sudo apt install -y php8.3-cli php8.3-mysql php8.3-mbstring php8.3-xml \
  php8.3-curl php8.3-zip php8.3-gd php8.3-bcmath unzip mariadb-server composer

sudo service mariadb start
sudo mysql -e "CREATE DATABASE crittercare_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
  CREATE USER 'crittercare'@'localhost' IDENTIFIED BY 'secret';
  GRANT ALL ON crittercare_db.* TO 'crittercare'@'localhost'; FLUSH PRIVILEGES;"
```

> On Ubuntu 22.04 or older, add `ppa:ondrej/php` first and use the `php8.2-*` packages.

### Steps (both options)

Run these in order from the project root:

```bash
# 1. PHP dependencies
composer install

# 2. Environment file
cp .env.example .env          # Windows: copy .env.example .env
php artisan key:generate
```

3. Edit `.env`:
   ```dotenv
   APP_NAME=CritterCare
   APP_URL=http://127.0.0.1:8000

   DB_DATABASE=crittercare_db
   DB_USERNAME=root            # or crittercare (Option B)
   DB_PASSWORD=                # or secret (Option B)

   MAIL_MAILER=log             # forgot-password emails go to storage/logs/laravel.log
   ```

```bash
# 4. Schema + demo data
php artisan migrate --seed

# 5. Make uploads reachable (creates the public/storage symlink, which git ignores)
php artisan storage:link

# 6. Run
php artisan serve
```

Open http://127.0.0.1:8000.

### Demo accounts (created by the seeder, local only)

All seeded accounts use password **`CCPass_2324`**. You can log in with username or email.

| Role        | Username     | Email                               |
|-------------|--------------|-------------------------------------|
| Super Admin | `superadmin` | pamandanan.calvinkent@auf.edu.ph    |
| Admin       | `admin`      | bangsil.ronrusselle@auf.edu.ph      |
| Admin       | `admin2`…`admin10` | `admin2@auf.edu.ph`…          |
| User        | `user1`…`user100`  | `user2@auf.edu.ph`… (`user1` = dejesus.jeselaurvic@auf.edu.ph) |

Seeded pets, missing pets and reports have no photos.

### Alternative: import the old SQL dump

A phpMyAdmin dump from 2024-01-26 lives in git history (deleted from the tree in `fb15bd2`).
It contains the same schema and seed-style data as `migrate --seed`:

```bash
git show 6e9ef44:crittercare_db.sql > crittercare_db.sql
mysql -u root crittercare_db < crittercare_db.sql
```

Prefer `migrate --seed`. Use the dump only if migrations fail.

### Reset everything

```bash
php artisan migrate:fresh --seed
php artisan optimize:clear
```

### Tests

```bash
php artisan test
```

Only Laravel's two example tests exist.

---

## Troubleshooting

See [`healing.md`](healing.md).
