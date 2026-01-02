# Blogs Application

A blogging platform built with Laravel 11 where users can create, read, and manage blog posts with comments, categories, and subscriptions.

---

## What's in This Project?

✅ User authentication (register, login, logout)  
✅ Create, edit, and delete blog posts  
✅ Organize posts with categories  
✅ Comment system on blog posts  
✅ Newsletter subscription  
✅ Contact form  
✅ Beautiful responsive design with Tailwind CSS  

---

## What You Need Before Starting

- **PHP 8.4 or higher**
- **Composer** (to install PHP packages)
- **Node.js & npm** (to install and build frontend)
- **Git** (to clone the project)

---

## How to Download and Run

### Step 1: Clone the Project
```bash
git clone https://github.com/engsahaly/laravel_course_level_1_project.git
cd blogs-app
```

### Step 2: Install PHP Packages
```bash
composer install
```

### Step 3: Install Frontend Packages
```bash
npm install
```

### Step 4: Setup Environment File
```bash
cp .env.example .env
php artisan key:generate
```

### Step 5: Create Database
```bash
touch database/database.sqlite
```

### Step 6: Setup Database
```bash
php artisan migrate --seed
```

This will create all tables and add sample data.

### Step 7: Build Frontend
```bash
npm run build
```

### Step 8: Start the Server
```bash
php artisan serve
```

The application is now running at **http://127.0.0.1:8000**

---

## How to Use

1. **Home Page** - View all blog posts and browse by category
2. **Register** - Create a new account
3. **Login** - Sign in with your account
4. **Create Post** - Click "My Blogs" to create a new blog post
5. **Read Posts** - Click on any post to read full content and comments
6. **Add Comments** - Comment on blog posts
7. **Subscribe** - Enter your email to subscribe to newsletter
8. **Contact** - Send messages through contact form

---

## Troubleshooting

**Error: "PHP extension not found"**  
Check that you have PHP 8.4 with these extensions: mbstring, xml, curl, zip, sqlite3

**Error: "Composer not found"**  
Install Composer from: https://getcomposer.org

**Error: "npm not found"**  
Install Node.js from: https://nodejs.org

**Server won't start**  
Try using a different port:
```bash
php artisan serve --port=8080
```

**Database error**  
Make sure the `database/database.sqlite` file exists:
```bash
touch database/database.sqlite
```

**Assets not loading (404 errors)**  
```bash
npm run build
php artisan serve
```

---

## Project Files Explained

```
├── app/
│   ├── Models/                   # Blog, User, Comment, Category models
│   ├── Http/Controllers/         # Request handlers
│   └── View/Components/          # Reusable view components
├── database/
│   ├── migrations/               # Database structure files
│   ├── seeders/                  # Sample data
│   └── database.sqlite           # Database file (created after setup)
├── resources/views/              # HTML templates (Blade)
├── routes/web.php                # URL routes
└── public/assets/                # Images, CSS, JavaScript
```

---

## Technology Stack

- **Laravel 11** - Web framework
- **PHP 8.4** - Server language
- **SQLite** - Database
- **Tailwind CSS** - Styling
- **Alpine.js** - Interactive features
- **Vite** - Build tool

---

## Author

**Mohammed Serry**  
Email: mohammedserry582@gmail.com
