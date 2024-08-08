# Proyek Laravel: TodoList

## Deskripsi

Proyek ini adalah aplikasi Laravel yang memungkinkan pengguna untuk mengelola To do List. API ini menggunakan Swagger untuk dokumentasi.

## Prerequisites

- PHP 8.0 atau lebih tinggi
- Composer
- PostgreSQL

## Setup Database

1. **Clone Repository**

   Pertama, clone repository proyek ke direktori lokal Anda:

   ```bash
   git clone https://github.com/AkhmadFarizi/TestToDoList.git
   cd TodoList

2. **Salin File .env.example**

    ```bash
    cp .env.example .env

3. **Konfigurasi Database**
    Buka file .env dan konfigurasi pengaturan database Anda untuk PostgreSQL. Contoh konfigurasi:

    ```bash
    DB_CONNECTION=pgsql
    DB_HOST=127.0.0.1
    DB_PORT=5432
    DB_DATABASE=nama_database
    DB_USERNAME=username
    DB_PASSWORD=password

4. **Generate Key Aplikasi dan setup database**

    ```bash
    php artisan key:generate

    jalankan migrasi

    php artisan migrate

    jalankan seeder untuk seeder Category

    php artisan db:seed

## Instalasi dan Setup

Install semua dependensi proyek menggunakan Composer:

     composer install

Jika Anda menggunakan Swagger untuk dokumentasi API, install paket l5-swagger:

    composer require darkaonline/l5-swagger

Publikasikan konfigurasi l5-swagger:

    php artisan vendor:publish --provider="L5Swagger\L5SwaggerServiceProvider"

Jalankan perintah berikut untuk meng-generate dokumentasi Swagger:

    php artisan l5-swagger:generate

Clear Cache

    php artisan cache:clear
    php artisan config:cache
    php artisan route:cache

    Jalankan server Laravel:
    php artisan serve

## Documentasi Api

    http://127.0.0.1:8000/api/documentation


## Tampilan Form

Berikut adalah tampilan form ToDo List:

![Tampilan Form ToDo List](https://github.com/AkhmadFarizi/TestToDoList/blob/master/FormTodoList.png)

## Tampilan Dokumentasi Api Swagger

Berikut adalah Dokumentasi Api Swagger ToDo List:
![Tampilan Api ToDo List](https://github.com/AkhmadFarizi/TestToDoList/blob/master/sw1.png)

Post Data Todo list
![Tampilan Api ToDo List](https://github.com/AkhmadFarizi/TestToDoList/blob/master/sw2.png)

Get ALL Data Todo list
![Tampilan Api ToDo List](https://github.com/AkhmadFarizi/TestToDoList/blob/master/sw3.png)

    Contoh

    {
    "id": 19,
    "name": "akhmad farizi",
    "username": "sasasasa",
    "email": "farizi2710@gmail.com",
    "created_at": "2024-08-08T12:44:50.000000Z",
    "updated_at": "2024-08-08T12:44:50.000000Z",
    "deleted_at": null,
    "tasks": [
      {
        "id": 12,
        "user_id": 19,
        "category_id": 1,
        "description": "ssssssssssss",
        "created_at": "2024-08-08T12:44:50.000000Z",
        "updated_at": "2024-08-08T12:44:50.000000Z",
        "deleted_at": null,
        "category": {
          "id": 1,
          "name": "Todo",
          "created_at": "2024-08-08T11:41:01.000000Z",
          "updated_at": "2024-08-08T11:41:01.000000Z",
          "deleted_at": null
        }
      }





        


