<p align="center">
  <a href="https://github.com/saiyaner/Furnitur-Shop" target="_blank">
    <img src="https://cdn-icons-png.flaticon.com/512/679/679922.png" width="120" alt="Furnitur Shop Logo">
  </a>
</p>

<h2 align="center">🪑 Furnitur Shop</h2>

<p align="center">
  <b>A modern furniture e-commerce platform built with Laravel.</b><br>
  Simple • Elegant • Powerful
</p>

---

## 🛍️ About Project

**Furnitur Shop** adalah platform e-commerce modern untuk penjualan furnitur berbasis **Laravel**.  
Proyek ini dibuat untuk memudahkan pengguna dalam menelusuri, memesan, dan mengelola produk furnitur secara online.

### ✨ Fitur Utama
- 🏠 Halaman utama dengan tampilan produk  
- 🔍 Pencarian dan filter produk  
- 🛒 Sistem keranjang belanja  
- 💳 Checkout & manajemen pesanan  
- 👤 Autentikasi pengguna (Laravel Breeze)  
- 🧾 Dashboard admin untuk mengelola produk dan pengguna  

---

## ⚙️ Tech Stack
- **Framework:** Laravel 12  
- **Frontend:** Blade, TailwindCSS  
- **Auth System:** Laravel Breeze  
- **Database:** MySQL  
- **Version Control:** Git & GitHub  

---

## 🚀 Installation

Langkah-langkah untuk menjalankan proyek di lokal:

```bash
# Clone repository
git clone https://github.com/saiyaner/Furnitur-Shop.git

# Masuk ke folder project
cd Furnitur-Shop

# Install dependencies
composer install

# Copy environment
cp .env.example .env

# Generate app key
php artisan key:generate

# Migrasi & seeding database
php artisan migrate --seed

# Install frontend dependencies
npm install && npm run dev

# Jalankan server lokal
php artisan serve
