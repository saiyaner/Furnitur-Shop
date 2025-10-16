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

**Furnitur Shop** is an online furniture store built using the **Laravel framework**.  
This project was created to make it easier for users to browse, order, and manage furniture products online.

### ✨ Features
- 🏠 Homepage with product showcase  
- 🔍 Product search and filter  
- 🛒 Shopping cart system  
- 💳 Checkout and order management  
- 👤 User authentication (Laravel Breeze)  
- 🧾 Admin dashboard for managing products and users  

---

## ⚙️ Tech Stack
- **Framework:** Laravel 11  
- **Frontend:** Blade, TailwindCSS  
- **Auth System:** Laravel Breeze  
- **Database:** MySQL  
- **Version Control:** Git & GitHub  

---

## 🚀 Installation

```bash
git clone https://github.com/saiyaner/Furnitur-Shop.git
cd Furnitur-Shop
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
npm install && npm run dev
php artisan serve
