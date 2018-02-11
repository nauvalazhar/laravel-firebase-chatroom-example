# Laravel 5 &amp; Firebase Chatroom Example

### What is this?
This is a project experiment to create a chatroom app with Laravel 5.6 and Firebase Realtime Database. This project uses a '[laravel-firebase-sync](https://github.com/mpociot/laravel-firebase-sync)' package to synchronize models with data on firebase.

### Requirements
- Laravel 5.6
- Laravel Firebase Sync by [@mpociot](https://github.com/mpociot)

### Installation
- Clone this repository
- Run these commands
```bash
composer install
php artisan key:generate

# Set your database connection in .env file
php artisan migrates
```
- Open the `config/services.php` file and see the [instructions here](https://github.com/mpociot/laravel-firebase-sync#configuration)
- Done

### License
MIT License