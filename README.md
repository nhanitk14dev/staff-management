<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.


## About Staff Management
### Requirement
- Laravel 10.0
- PHP >= 8.1
- Mysql >= 5.7
- DB: staff_management_laravel
- Bootstrap 4.6
- Node >= 14
## Getting Started Step by Step
1. Clone source from my repository https://github.com/nhanitk14dev/staff-management
2. Open terminal (bash/cmd). Then go to project folder using command

```sh
cd staff-management
```

3. User [Composer](https://getcomposer.org/download/) to install the required files and packages.

```sh
composer install
```

4. Copy a .env file from example and generate key 

```sh
cp .env.example .env

php artisan key:generate
```

5. Then compile all CSS & JS files together using this command

```sh
npm install && npm run dev
```

or

```sh
yarn install && yarn dev
```
6. Create a database in MYSQL and update in .env file.

```
  DB_DATABASE=staff_management_laravel
```

7. After connecting the db with project, then run command 

```sh
php artisan migrate:fresh --seed
```

Then, System will run table migration and insert fake data by seeder.

StaffSeeder will ask you how many fake data of staff will be created, default is 50 records.

```
How many "staff" seeds would you like to create? [50]:

```

Next, you will have data for admin to login system and fake records of staff.

```
    UserName -> Admin 
    Email -> admin@gmail.com 
    Password -> admin@2023
```

Finally, we just run our project using this command 

```sh
php artisan serve 
```