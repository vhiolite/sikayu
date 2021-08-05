# SI KAYU
Adalah sebuah Web App yang digunakan untuk pengelolaan data kayu untuk mempermudah melakukan pendataan kayu.

    git clone https://github.com/vhiolite/sikayu.git

Selanjutnya copy file .env.example rename menjadi .env lalu buat database dan sesuaikan pada bagian

    DB_DATABASE=nama-database

install composer dengan perintah

    composer install

install npm dan run    

    npm install && npm run dev

jalankah perintah migrasi dengan perintah berikut

    php artisan migrate

lalu jalankan perintah seed data

    php artisan db:seed

**Selesai**