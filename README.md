# Perpustkaan
# 📚 Aplikasi Perpustakaan Laravel

Aplikasi Perpustakaan adalah proyek sederhana berbasis Laravel yang memungkinkan pengguna untuk melakukan operasi **CRUD (Create, Read, Update, Delete)** terhadap data buku. Cocok sebagai proyek latihan atau dasar pengembangan sistem perpustakaan yang lebih kompleks.

---

## ✨ Fitur Utama

- 📖 Menampilkan daftar buku
- ➕ Menambahkan buku baru
- 📝 Mengedit data buku
- 🗑️ Menghapus buku dari sistem

---

## 🛠️ Teknologi yang Digunakan

- Laravel 10+
- Blade Templating Engine
- Bootstrap (untuk styling, opsional)
- MySQL / MariaDB
- Laravel Breeze (jika autentikasi diperlukan, opsional)

---

## 🚀 Cara Menjalankan Proyek

### 1. Clone Repository

```bash
git clone https://github.com/username/perpus-laravel.git
cd perpus-laravel
2. Install Dependency
bash
Copy
Edit
composer install
3. Copy & Konfigurasi File .env
bash
Copy
Edit
cp .env.example .env
Edit file .env dan sesuaikan pengaturan database:

makefile
Copy
Edit
DB_DATABASE=perpus_db
DB_USERNAME=root
DB_PASSWORD=
4. Generate Key & Migrate Database
bash
Copy
Edit
php artisan key:generate
php artisan migrate
5. Jalankan Server Lokal
bash
Copy
Edit
php artisan serve
