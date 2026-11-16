# Tasks for Today Management System in Laravel

This project completes IT0049 Technical Summative Assessment 3: Tasks for Today Management System in Laravel.

## Pages

- `/` - Welcome page showing only tasks scheduled for today
- `/tasks` - complete task list ordered by task date
- `/profile` - the single seeded developer user record
- `/about` - static project information

## Requirements implemented

- `tasks` migration with `title`, `status` defaulting to `pending`, `task_date`, and timestamps
- `users` migration with unique `username`, `full_name`, `email`, and timestamps
- Seeder with eight tasks across four dates, including today's date
- Seeder with exactly one user record
- `Task` and `User` Eloquent models
- Date-filtered Eloquent query on the Welcome page
- Complete ordered Eloquent query on the Task List page

## Setup in VS Code on Windows

Open the extracted project folder in VS Code and run:

```powershell
composer install
copy .env.example .env
php artisan key:generate
New-Item database\database.sqlite -ItemType File
php artisan migrate --seed
php artisan serve
```

If `database\database.sqlite` already exists, skip that command. Open `http://127.0.0.1:8000` in your browser.

For a clean reseed during testing, use:

```powershell
php artisan migrate:fresh --seed
```

The project uses Laravel 12 and is compatible with PHP 8.2.
