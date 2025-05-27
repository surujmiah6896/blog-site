# Laravel Blog & Task Management API

A simple Laravel API project for managing blog posts and tasks.

## 🚀 Features

- Blog Post CRUD
- User Registration
- Task Management (Create, Update, View Pending)
- JSON-based API responses
- Error handling and validation

---

## ⚙️ Setup Instructions

### 1. Clone the Repository

```bash
git clone https://github.com/surujmiah6896/blog-site.git
cd blog-site
```


## Install Dependencies

```bash
composer install
```
## Set Up Environment
- Copy the example environment file and set your database credentials:

```bash
cp .env.example .env
php artisan key:generate
```
- Edit .env to match your database:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=blog_site_web_app_db
DB_USERNAME=root
DB_PASSWORD=

## Run Migrations
```bash
php artisan migrate
```

## User Registration
- POST /api/register
- Body:
{
  "name": "Jane Doe",
  "email": "jane@example.com",
  "password": "password123"
}

# Blog Post
- POST /api/posts – Create a post
- GET /api/posts – List all posts
- GET /api/posts/{id} – View a single post

# Tasks
- POST /api/tasks – Add a new task
- PATCH /api/tasks/{id} – Mark task as completed
- GET /api/tasks/pending – Get all pending tasks

# Testing the API
- Postman
- cURL

# Development Notes
- Laravel version: 12.x
- PHP >= 8.1
- MySQL


