# breddit
A better Reddit

1. Install global Laravel package: `composer global require "laravel/installer=~1.1"`

2. Create new Laravel project: `laravel new breddit`

3. Navigate into project directory: `cd breddit`

4. Initialize git repository: `git init` and create first commit: `git commit -am  "Initial commit"`

5. Install dependencies: `composer update` and `npm install`

6. Create environment file: `cp .env.example .env`

7. Generate unique application key: `php artisan key:generate`

8. Set local development database to use SQLite by adding `DB_CONNECTION='sqlite'` to `.env`

9. (Git)Ignore local development database by adding `database/database.sqlite` to `.gitignore`

10. Create local database with `touch database/database.sqlite`

11. Run default authentication migrations: `php artisan migrate`

12. Run development server: `php artisan serve`