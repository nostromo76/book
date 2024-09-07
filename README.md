<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>
# Laravel Blog Project

This is a simple Laravel blog project to demonstrate basic CRUD operations with a database using Laravel.

## Installation via Herd

[Herd](https://github.com/Philo01/herd) is a command line tool that makes it easy to scaffold a Laravel project. Follow the steps below to install this project using Herd:

1. Install Herd globally on your machine by running the following command:
   ```
   composer global require philo/herd
   ```

2. Run the following command to scaffold the Laravel project:
   ```
   herd new blog-project
   ```

3. cd into the project directory:
   ```
   cd blog-project
   ```

4. Start the Laravel development server:
   ```
   php artisan serve
   ```

5. You can now access the project in your browser at `http://127.0.0.1:8000`

## Installation via Console

Alternatively, you can install the project using the Laravel installer and Composer:

1. Clone the project repository:
   ```
   git clone <repository_url>
   ```

2. cd into the project directory:
   ```
   cd <project_folder>
   ```

3. Install project dependencies using Composer:
   ```
   composer install
   ```

4. Generate a new application key:
   ```
   php artisan key:generate
   ```

5. Start the Laravel development server:
   ```
   php artisan serve
   ```

6. You can now access the project in your browser at `http://127.0.0.1:8000`

That's it! You have successfully installed the Laravel Blog project.