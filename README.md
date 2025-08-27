# HRHorizon

HRHorizon is a Human Resources management system built with **Laravel**, **TailwindCSS**, and **Vite**.  
This project was created for my developer portfolio, showcasing best practices in **Laravel Blade Components**, **authentication flows**, and **modern frontend tooling**.

## ✨ Features

- Guest layout (Landing page with marketing sections)
- Authentication (Login, Register)
- Authenticated layout (Dashboard with user management)
- Modular Blade components for Header, Footer, Hero, Features, CTA, etc.
- TailwindCSS for responsive and modern UI
- Laravel Vite integration for asset bundling

## 📸 Screenshots

> _  

Example:

![Landing Page](docs/screenshots/landing.png)
![Dashboard](docs/screenshots/dashboard.png)

## 🚀 Tech Stack

- [Laravel 12](https://laravel.com/) – Backend framework
- [Blade Components](https://laravel.com/docs/blade) – Templating system
- [TailwindCSS](https://tailwindcss.com/) – Styling
- [Vite](https://vitejs.dev/) – Asset bundler
- [MySQL](https://www.mysql.com/) – Database

## 🔧 Installation

Clone the repository:

```bash
git clone https://github.com/airesviotto/hrhorizon.git
cd hrhorizon
Install dependencies:

Copiar código
composer install
npm install
Set up environment:

Copiar código
cp .env.example .env
php artisan key:generate
Run migrations:

Copiar código
php artisan migrate
Run the project:

Copiar código
npm run dev
php artisan serve
Open in your browser:

Copiar código
http://localhost:8000
