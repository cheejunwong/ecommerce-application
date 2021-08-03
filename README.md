<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
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

## Description

This is a ecommerce application which using Laravel framework. This project has a `docker-compose.yml` file which the application can be run using Docker.

## How to run this project

To run this project you need to have either [Laragon](https://laragon.org/), [Docker](https://www.docker.com/) or [Laravel Valet](https://laravel.com/docs/8.x/valet) installed in your machine.

### Take the following steps (Mac with Docker):

- Clone this repository
```bash
git clone https://github.com/cheejunwong/ecommerce-application.git
```
- Change directory
```bash
cd ecommerce-application
```
- Create a `.env` file from `.env.example` file
```bash
cp .env.example .env
```
- Run command the following commands:
```bash
docker-compose up -d
```
```bash
docker exec -it app bash
```
```bash
composer install
```
```bash
npm install
```
```bash
php artisan key:generate
```
```bash
php artisan migrate:fresh --seed
```
```bash
npm run watch
```
- Access the application using `http://localhost:8100/`
- Access the admin section using `http://localhost:8100/admin` with email: `admin@admin.com` and password: `password`
> There's no product in the database, you have to add a product to continue

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
