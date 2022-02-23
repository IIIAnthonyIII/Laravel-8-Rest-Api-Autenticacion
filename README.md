<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Rest API con autenticación - Laravel 8

La API que vamos a crear nos permitirá la creación, consulta, actualización y borrado de Usuarios y Artículos, y que estas acciones solo sean realizadas a través de llamadas autenticadas (de usuarios inicialmente registrados en el sistema):

## Database
- **Articles: `[ tittle, body, timestamps ]`**
- **User: `[ name, email, password ]`**

## Release
- **Login User: `[POST] http://localhost:8000/api/login`**
- **Create Article: `[POST] http://localhost:8000/api/articles/`**
- **Retrieve all Articles: `[GET] http://localhost:8000/api/articles/`**
- **Retrieve single Article: `[GET] http://localhost:8000/api/articles/{id}`**
- **Update an Article: `[PUT] http://localhost:8000/api/articles/{id}`**
- **Delete an Article: `[DELETE] http://localhost:8000/api/articles/{id}`**

## Instalación
1. Clonar repositorio
2. Abir la consola con cmd
3. Dirigirse a la ruta de la clonación del repositorio con el comando `cd G:\Ruta del repositorio\Laravel-8-Rest-Api-Autenticacion`
4. Instalar las dependencias con el comando `npm install` o `composer install`

## Base de datos
- Tener instalado XAMPP 
- Correr los módulos Apache y MySQL
- Dar click en `admin` de MySQL o dirigirse a `http://localhost/phpmyadmin/index.php`
- Crear la base de datos `laravel_8_rest_api_autenticacion`
- Abrir cmd, dirigirse a la ruta del proyecto y ejecutar `php artisan migrate`
- Ejecutar `php artisan db:seed --class=ArticlesSeeder`
- Ejecutar `php artisan db:seed --class=UsersSeeder`

## Correr API
- En cmd ejecutar `php artisan serve --host=localhost --port=8000`

Este proyecto se probó en `Postman` revisar carpeta `1.Help`
