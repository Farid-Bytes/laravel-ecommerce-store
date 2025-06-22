# Laravel E-Commerce Store 🛒

A full-featured e-commerce web application built with the **Laravel framework**, designed to manage categories, brands, units, products, carts, and orders. Includes both an admin dashboard for inventory control and a user-facing interface for shopping and checkout.

## 🚀 Features

- Admin login system
- CRUD operations for:
  - Categories
  - Brands
  - Units
  - Products
- Dynamic product display and detail view
- Add to cart, remove items, and view cart
- Proceed to checkout and order placement
- Clean and responsive Blade-based UI
- Structured routing and controller logic

## 🛠️ Technologies Used

- PHP (Laravel Framework)
- MySQL Database
- Blade Templating Engine
- JavaScript, jQuery
- Bootstrap & Sass
- Git & GitHub

## 📂 Project Structure

- `routes/web.php` – All application routes
- `resources/views/` – Blade templates for admin and user views
- `app/Http/Controllers/` – Controllers for business logic
- `public/` – Assets like CSS, JS, and images

## 🧑‍💻 Getting Started

1. Clone the repository  

   git clone https://github.com/Farid-Bytes/laravel-ecommerce-store.git

2. Navigate into the project folder

cd laravel-ecommerce-store

3. Install dependencies

composer install

4. Create your .env file

cp .env.example .env
php artisan key:generate

5. Configure your .env file with database credentials

6. Run migrations (if needed)
php artisan migrate 

7. Start the development server
php artisan serve

🤝 Contributing
Pull requests are welcome! Feel free to fork this repo, improve it, and submit a PR.


