# Blogs Application

> A modern, scalable, and feature-rich blogging platform built with Laravel 11 and React/Inertia.js framework.

[![Laravel](https://img.shields.io/badge/Laravel-11.x-FF2D20?style=flat-square&logo=laravel)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.4-777BB4?style=flat-square&logo=php)](https://www.php.net)
[![React](https://img.shields.io/badge/React-Latest-61DAFB?style=flat-square&logo=react)](https://react.dev)
[![License](https://img.shields.io/badge/License-MIT-green?style=flat-square)](LICENSE)

---

## 📖 Table of Contents

- [Overview](#overview)
- [Technical Stack](#technical-stack)
- [System Requirements](#system-requirements)
- [Installation](#installation)
- [Configuration](#configuration)
- [Database](#database)
- [Development](#development)
- [Project Architecture](#project-architecture)
- [API Documentation](#api-documentation)
- [Troubleshooting](#troubleshooting)
- [Contributing](#contributing)
- [License](#license)
- [Contact](#contact)

---

## Overview

This is a comprehensive blogging application designed to demonstrate modern web development practices using Laravel framework combined with React for dynamic frontend experiences. The application includes complete CRUD operations for blog posts, category management, user authentication, and visitor engagement through comments and newsletters.

**Key Highlights:**
- Full-stack MVC architecture with component-based frontend
- Role-based access control and user management
- RESTful API endpoints for scalability
- Database seeding for quick prototyping
- Production-ready asset compilation
- Responsive and accessible UI design

---

## Technical Stack

### Backend
| Technology | Version | Purpose |
|-----------|---------|---------|
| Laravel | 11.x | Web framework & backend API |
| PHP | 8.4+ | Server-side language |
| Composer | 2.9.3+ | PHP dependency manager |
| SQLite/MySQL | Latest | Database system |

### Frontend
| Technology | Version | Purpose |
|-----------|---------|---------|
| React | Latest | UI library |
| Inertia.js | Latest | Server-side rendering |
| Tailwind CSS | Latest | Utility-first CSS framework |
| Vite | 7.x | Build tool & dev server |

### Development Tools
| Tool | Purpose |
|------|---------|
| NPM | Node package management |
| Pest | Testing framework |
| PHPStan | Static analysis |
| VS Code | Recommended IDE |

---

## System Requirements

### Minimum Requirements
- **PHP:** 8.4 or higher
- **Composer:** 2.0 or higher
- **Node.js:** 20.x or higher
- **npm:** 10.x or higher
- **Database:** SQLite 3.x or MySQL 8.0+

### Recommended Setup
- **PHP:** 8.4 with extensions: mbstring, xml, curl, zip, sqlite3/pdo_mysql
- **Database:** MySQL 8.0+ for production environments
- **Memory:** 2GB minimum for development
- **Disk Space:** 2GB free space for dependencies

### Supported Operating Systems
- macOS 12+
- Linux (Ubuntu 20.04+, Debian 11+)
- Windows 10/11 with WSL2
- Docker containers

---

## Installation

### Step 1: Clone Repository

```bash
git clone https://github.com/engsahaly/laravel_course_level_1_project.git
cd blogs-app
```

### Step 2: Install PHP Dependencies

```bash
composer install
```

> **Note:** Ensure Composer is installed globally on your system.

### Step 3: Install Node Dependencies

```bash
npm install
```

### Step 4: Environment Setup

```bash
cp .env.example .env
```

Then generate the application key:

```bash
php artisan key:generate
```

### Step 5: Database Setup

See [Database Configuration](#database) section below.

### Step 6: Build Frontend Assets

```bash
npm run build
```

For development with hot reload:

```bash
npm run dev
```

### Step 7: Verify Installation

Run all migrations and seeders:

```bash
php artisan migrate --seed
```

Start the development server:

```bash
php artisan serve
```

The application should be accessible at: **http://127.0.0.1:8000**

---

## Configuration

### Environment Variables

Edit the `.env` file to configure your application:

```env
APP_NAME=Blogs
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost:8000

# Authentication
APP_LOCALE=en
APP_FALLBACK_LOCALE=en

# Logging
LOG_CHANNEL=stack
LOG_LEVEL=debug

# Session Management
SESSION_DRIVER=database
SESSION_LIFETIME=120

# Cache Configuration
CACHE_STORE=database

# Queue System
QUEUE_CONNECTION=database
```

### Application Settings

Key configuration files are located in the `config/` directory:
- `config/app.php` - Application core settings
- `config/auth.php` - Authentication configuration
- `config/mail.php` - Email service configuration
- `config/database.php` - Database connection settings

---

## Database

### SQLite (Default - Development)

SQLite is configured by default for local development. No additional setup is required:

```env
DB_CONNECTION=sqlite
DB_DATABASE=/path/to/database/database.sqlite
```

**Advantages:**
- Zero configuration
- File-based storage
- Perfect for development & testing
- No server required

**Limitations:**
- Not suitable for production
- Limited concurrent access
- Single-user environment

### MySQL (Production Recommended)

For production environments, configure MySQL:

1. **Update `.env`:**
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=blogs_app
DB_USERNAME=root
DB_PASSWORD=your_password
```

2. **Install PHP MySQL Extension:**
```bash
sudo apt-get install php-mysql
# or for macOS
brew install php@8.4 --with-mysql
```

3. **Create Database:**
```sql
CREATE DATABASE blogs_app CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

4. **Run Migrations:**
```bash
php artisan migrate --seed
```

### Migration Management

View migration status:
```bash
php artisan migrate:status
```

Rollback last migration:
```bash
php artisan migrate:rollback
```

Refresh database (caution - removes all data):
```bash
php artisan migrate:refresh --seed
```

---

## Development

### Available Commands

#### Server Management
```bash
php artisan serve                 # Start development server (port 8000)
php artisan serve --port=8080     # Start on custom port
```

#### Frontend Build
```bash
npm run dev                        # Development with hot reload
npm run build                      # Production build
npm run preview                    # Preview production build
```

#### Database Operations
```bash
php artisan migrate               # Run pending migrations
php artisan migrate --seed        # Run migrations with seeders
php artisan db:seed              # Run seeders only
php artisan tinker               # Interactive PHP shell
```

#### Testing
```bash
composer test                     # Run all tests
composer test tests/Feature       # Run feature tests only
php artisan test                  # Alternative test command
```

#### Code Quality
```bash
composer require --dev phpstan    # Install PHP static analyzer
./vendor/bin/phpstan analyse      # Run static analysis
```

#### Cache Management
```bash
php artisan cache:clear          # Clear application cache
php artisan config:cache         # Cache configuration files
php artisan route:cache          # Cache routes for performance
```

---

## Project Architecture

### Directory Structure

```
blogs-app/
├── app/
│   ├── Http/
│   │   ├── Controllers/          # Request handlers
│   │   ├── Middleware/           # Request/response middleware
│   │   └── Requests/             # Form request validation
│   ├── Models/                   # Eloquent models
│   │   ├── User.php
│   │   ├── Blog.php
│   │   ├── Category.php
│   │   ├── Comment.php
│   │   ├── Subscriber.php
│   │   └── Contact.php
│   └── Providers/                # Service providers
│
├── database/
│   ├── migrations/               # Database schema
│   ├── seeders/                  # Database seeding
│   └── factories/                # Model factories for testing
│
├── resources/
│   ├── js/                       # React components & JavaScript
│   ├── css/                      # Application styles
│   └── views/                    # Blade templates
│
├── routes/
│   ├── web.php                   # Web routes
│   ├── auth.php                  # Authentication routes
│   └── console.php               # Console commands
│
├── public/
│   ├── build/                    # Compiled assets
│   ├── storage/                  # Uploaded files
│   └── index.php                 # Entry point
│
├── tests/
│   ├── Feature/                  # Feature tests
│   └── Unit/                     # Unit tests
│
├── storage/
│   ├── app/                      # Application files
│   ├── framework/                # Framework files
│   └── logs/                     # Application logs
│
└── vendor/                       # Composer dependencies
```

### Data Models

**User Model**
- Authentication & authorization
- Blog post ownership
- Comment management

**Blog Model**
- Content storage
- Category relationships
- Comment association
- Metadata (created_at, updated_at)

**Category Model**
- Blog categorization
- Organizational structure
- Blog post relationships

**Comment Model**
- User feedback on posts
- Nested comment support
- Timestamps for moderation

**Subscriber & Contact Models**
- Newsletter management
- Contact form submissions

---

## API Documentation

### Authentication Endpoints
```
POST   /login                    # User login
POST   /register                 # User registration
POST   /logout                   # User logout
POST   /forgot-password          # Password reset request
POST   /reset-password           # Password reset
```

### Blog Endpoints
```
GET    /blogs                    # List all blogs
GET    /blogs/{id}              # View single blog
POST   /blogs                    # Create blog (authenticated)
PUT    /blogs/{id}              # Update blog (owner only)
DELETE /blogs/{id}              # Delete blog (owner only)
```

### Category Endpoints
```
GET    /categories              # List all categories
GET    /categories/{id}         # View category with blogs
```

### Comment Endpoints
```
GET    /blogs/{id}/comments     # Get blog comments
POST   /blogs/{id}/comments     # Add comment
DELETE /comments/{id}           # Delete comment (owner only)
```

### Public Endpoints
```
POST   /subscribe               # Newsletter subscription
POST   /contact                 # Contact form submission
```

---

## Troubleshooting

### Common Issues & Solutions

#### "PHP extension not found"
```bash
# Check installed extensions
php -m

# Install missing extension (example: sqlite3)
sudo apt-get install php-sqlite3
```

#### "Composer dependency errors"
```bash
# Clear Composer cache
composer clear-cache

# Regenerate autoloader
composer dump-autoload

# Fresh install
rm -rf vendor composer.lock
composer install
```

#### "npm package issues"
```bash
# Clear npm cache
npm cache clean --force

# Remove node_modules
rm -rf node_modules package-lock.json

# Fresh install
npm install
```

#### "Database connection failed"
```bash
# Verify database configuration
cat .env | grep DB_

# Test database connection
php artisan tinker
# Then in tinker: DB::connection()->getPdo();
```

#### "Assets not loading (404 errors)"
```bash
# Rebuild assets
npm run build

# Clear config cache
php artisan config:cache

# Restart development server
php artisan serve
```

### Logging & Debugging

Enable debug mode in `.env`:
```env
APP_DEBUG=true
```

View recent logs:
```bash
tail -f storage/logs/laravel.log
```

---

## Contributing

We welcome contributions from the community. Please follow these guidelines:

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

**Code Standards:**
- Follow PSR-12 PHP coding standards
- Write meaningful commit messages
- Include tests for new features
- Update documentation as needed

---

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

---

## Contact & Support

**Project Author:** Mohammed Serry

**Email:** mohammedserry582@gmail.com

**GitHub:** [@engsahaly](https://github.com/engsahaly)

For bug reports, feature requests, or questions, please open an issue on the GitHub repository.

---

## Acknowledgments

- Laravel community for exceptional documentation
- React and Inertia.js teams for powerful tools
- All contributors and testers who helped improve this project