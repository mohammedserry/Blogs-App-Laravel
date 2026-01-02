# Blogs App

A modern, feature-rich blogging platform built with Laravel and React/Inertia.js.

---

## 📋 Project Information

- **Author:** Mohammed Serry
- **Email:** mohammedserry582@gmail.com
- **Framework:** Laravel 11
- **Frontend:** React with Inertia.js
- **Database:** SQLite (easily switchable to MySQL)
- **Node Version:** 24.12.0
- **PHP Version:** 8.4

---

## ✨ Features

- User authentication (login, registration, password reset)
- Blog post management (create, read, update, delete)
- Blog categories and organization
- Comments on blog posts
- Newsletter subscription
- Contact form functionality
- Responsive design with Tailwind CSS
- Database seeding for demo data

---

## 🚀 Quick Start

### Prerequisites

Ensure you have the following installed:
- PHP 8.4 or higher
- Composer
- Node.js (v24.12.0 or higher)
- npm or yarn

### Installation Steps

1. **Clone the repository**
   ```bash
   git clone https://github.com/engsahaly/laravel_course_level_1_project.git
   cd blogs-app
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Node.js dependencies**
   ```bash
   npm install
   ```

4. **Configure environment variables**
   ```bash
   cp .env.example .env
   ```
   
   For SQLite (default):
   ```
   DB_CONNECTION=sqlite
   DB_DATABASE=/path/to/database/database.sqlite
   ```
   
   Or for MySQL:
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=blogs_app
   DB_USERNAME=root
   DB_PASSWORD=
   ```

5. **Generate application key**
   ```bash
   php artisan key:generate
   ```

6. **Create SQLite database file** (if using SQLite)
   ```bash
   touch database/database.sqlite
   ```

7. **Run database migrations and seeders**
   ```bash
   php artisan migrate --seed
   ```

8. **Build frontend assets**
   ```bash
   npm run build
   ```

9. **Start the development server**
   ```bash
   php artisan serve
   ```

   The application will be available at `http://127.0.0.1:8000`

---

## 📦 Development Commands

| Command | Description |
|---------|-------------|
| `php artisan serve` | Start the Laravel development server |
| `npm run dev` | Start Vite development server with hot reload |
| `npm run build` | Build frontend assets for production |
| `php artisan migrate` | Run database migrations |
| `php artisan db:seed` | Seed the database with sample data |
| `php artisan tinker` | Interactive Laravel shell |
| `composer test` | Run PHP unit tests |

---

## 📁 Project Structure

```
├── app/                    # Application code
│   ├── Http/              # Controllers, requests, middleware
│   ├── Models/            # Eloquent models
│   └── Providers/         # Service providers
├── database/              # Migrations and seeders
├── resources/             # Views and frontend assets
│   ├── js/               # JavaScript/React components
│   ├── css/              # Stylesheets
│   └── views/            # Blade templates
├── routes/               # Application routes
├── public/               # Publicly accessible files
└── tests/                # Test files
```

---

## 🔧 Configuration

### Database

The project uses SQLite by default for ease of local development. To use MySQL:

1. Update `.env` with MySQL credentials
2. Install the PHP MySQL extension: `sudo apt-get install php-mysql`
3. Run migrations: `php artisan migrate --seed`

### Email

Modify the `MAIL_MAILER` setting in `.env` to configure email:
- `log` - Log emails to storage (default for development)
- `smtp` - Send real emails via SMTP
- `mailgun`, `postmark`, `ses` - Third-party email services

---

## 🧪 Testing

Run the test suite:
```bash
composer test
```

---

## 📝 License

This project is open source and available under the MIT License.

---

## 🤝 Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

---

## 📞 Support

For issues and questions, please contact:
- **Email:** mohammedserry582@gmail.com