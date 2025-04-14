## YumYum App Documentation
Yumyum adalah aplikasi rekomendasi makanan cerdas yang menggunakan teknologi machine learning untuk memahami preferensi pengguna dan memberikan saran makanan yang personal, relevan, dan menggugah selera.

## Deployment
Untuk menjalankan aplikasi YumYum dibutuhkan:
- PHP 8.2+
- Composer
- MySQL
- CCMR Dataset (recipe.csv -> https://drive.google.com/file/d/1W8qR2EnzopsjsbiYt5UT8K6PV-wAdEAn/view?usp=drive_link)

## Steps
1. Clone repository YumYum-App/web
2. Copy file .env.example lalu rename ke .env
3. Edit bagian:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=yumyum
DB_USERNAME=root
DB_PASSWORD=

Perhatikan nama database, pastikan database telah dibuat sebelumnya.

3. Jalankan perintah 'composer install', lalu 'php artisan key:generate'
4. Untuk memulai setup database jalankan perintah 'php artisan migrate:fresh'
5. Untuk mengimport database jalankan perintah 'php artisan import:csv (Path recipe.csv)'
6. Jalankan 'php artisan serve' untuk menjalankan development server
7. Secara default web akan berjalan pada 127.0.0.1:8000
8. Untuk menjalankan sistem rekomendasi, lakukan setup aplikasi flask pada repository https://github.com/yumyum-app/MealRec
