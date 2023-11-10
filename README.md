# Laravel AdminLTE

Ini template AdminLTE siap pakai buat Laravel 5.8

## Apa Isinya?

1. AdminLTE v3.0.0-beta

    Hanya folder /dist yang dimasukkin. Kamu bisa nemuin template-nya di view/layouts dan view/auth..

2. Laravel 5.8

    Bawaan dari Laravel, dengan perubahan:

    - Rute ```/starter```-> buat liat gimana dashboard-nya kelihatan (matiin kalo udah produksi)
    - Matiin rute ```Auth``` ```/verify``` & ```/reset``` dan gak ada template blade buat itu

## Setup

### 1. Clone Project

#### Menggunakan Git

Kamu bisa clone repository ini & ganti nama sesuai projek kamu

````
git clone https://github.com/rpahlevy/laravel-adminlte3 your-project-name
````

#### Tanpa Git

Klik tombol ijo di pojok kanan atas (Clone or download) -> **Download ZIP**.
Ekstrak dan ganti nama jadi nama proyek lo

### 2. Install Dependencies

Ubah composer.json sesuai keinginan lo dulu (detail proyek lo). Pastikan lo udah install composer, terus cd ke folder proyek dan lakuin hal berikut

````
composer install
````

### 3. Setup .env

Clone ``.env.example`` atau cukup ganti nama jadi .env terus isi detailnya & jangan lupa setup DB lo.

Terus generate app key dengan jalanin:

````
php artisan key:generate
````

### 4. Migrate DB

Kalau web lo butuh Auth (siapa sih yang nggak?) migrate DB default dari Laravel. Masih di proyek, jalanin:

````
php artisan migrate
````

### 5. Serve Web Kamu

Serve secara lokal pake php built in dan kunjungi localhost:8000/starter

````
php artisan serve
````
Untuk masuk ke dashboard, ke /register dulu.
