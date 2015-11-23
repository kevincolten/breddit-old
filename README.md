# breddit
A better Reddit

`composer global require "laravel/installer=~1.1"`

`laravel new breddit`

`cd breddit`

`git init`

`cp .env.example .env`

`npm install`

`composer self-update`

`composer update`

`php artisan key:generate`

Add `DB_CONNECTION='sqlite'` to `.env`

Add database/database.sqlite` to `.gitignore`

`touch database/database.sqlite`

`php artisan migrate`

`php artisan serve`