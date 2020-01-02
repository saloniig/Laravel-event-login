# Laravel-event-login

# About Laravel
Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

Simple, fast routing engine.
Powerful dependency injection container.
Multiple back-ends for session and cache storage.
Expressive, intuitive database ORM.
Database agnostic schema migrations.
Robust background job processing.
Real-time event broadcasting.
Laravel is accessible, powerful, and provides tools required for large, robust applications.

# Learning Laravel
Laravel has the most extensive and thorough documentation and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, Laracasts can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

# Getting started


# Installation
Please check the official laravel installation guide for server requirements before you start. Official Documentation

Clone the repository

`git clone https://github.com/saloniig/Laravel-event-login.git`

Switch to the repo folder

`cd Laravel-event-login`

Install all the dependencies using composer

`composer install`

Copy the example env file and make the required configuration changes in the .env file

`cp .env.example .env`

Generate a new application key

`php artisan key:generate`

Run the database migrations (Set the database connection in .env before migrating)

`php artisan migrate`

Run the storage link command
`php artisan storage:link`

Start the local development server

`php artisan serve`

You can now access the server at http://localhost:8000

# Folder
-  `app`  - Contains all the Eloquent models
-   `app/Http/Controllers/Api`  - Contains all the api controllers
-   `config`  - Contains all the application configuration files
-   `database/factories`  - Contains the model factory for all the models
-   `database/migrations`  - Contains all the database migrations
-   `database/seeds`  - Contains the database seeder
-   `routes`  - Contains all the api routes defined in api.php file
-   `tests`  - Contains all the application tests

## Environment variables

-   `.env`  - Environment variables can be set in this file

_**Note**_  : You can quickly set the database information and other variables in this file and have the application fully working.

# Testing API

Run the laravel development server

```
php artisan serve

```

The api can now be accessed at

```
http://localhost:8000/ap
```

# Admin

Admin panel can be accessed at 
```
 http://localhost:8000/login
```
It contains login for admin which can create user and assign roles and permission and can perform various functionalities like create ,acess login form ,mark attendance. Admin can also create new user and can assign the functionalities to the newly created user according to the need.

