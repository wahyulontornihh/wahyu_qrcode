QR Code Generator
Tentang Proyek
QR Code Generator adalah aplikasi web yang dirancang untuk mempermudah pengguna dalam membuat dan mengelola kode QR. Proyek ini dikembangkan menggunakan Laravel, framework PHP yang fleksibel dan kuat.

Fitur Utama
✅ Membuat QR Code dari teks atau URL secara instan.
✅ Menyimpan dan mengelola QR Code dalam sistem.
✅ Mendukung berbagai jenis input seperti teks, email, URL, nomor telepon, dan lainnya.

Panduan Instalasi
Ikuti langkah-langkah di bawah ini untuk menginstal dan menjalankan proyek di lingkungan lokal:

1. Clone Repositori
Jalankan perintah berikut untuk menduplikasi proyek:

bash
Copy
Edit
git clone https://github.com/username/repository.git
cd repository
2. Instalasi Dependensi
Pastikan Composer sudah terpasang, lalu jalankan perintah:

bash
Copy
Edit
composer install
3. Konfigurasi File Environment
Salin file .env.example menjadi .env, kemudian sesuaikan pengaturan database:

bash
Copy
Edit
cp .env.example .env
Edit bagian berikut di file .env:

env
Copy
Edit
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database
DB_USERNAME=root
DB_PASSWORD=password
4. Generate Key & Migrasi Database
Jalankan perintah berikut untuk membuat key aplikasi dan memigrasikan database:

bash
Copy
Edit
php artisan key:generate
php artisan migrate
5. Menjalankan Server
Gunakan perintah ini untuk menjalankan server lokal:

bash
Copy
Edit
php artisan serve
Aplikasi akan aktif di: http://127.0.0.1:8000

Cara Penggunaan
1️⃣ Buka aplikasi melalui browser.
2️⃣ Masukkan teks atau URL yang ingin dikonversi ke QR Code.
3️⃣ Tekan tombol Generate QR Code.
4️⃣ Unduh QR Code yang telah dibuat dalam format yang tersedia.

Selamat mencoba! 🚀

