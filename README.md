# Laravel Repository Pattern – Simple Example

This project demonstrates how to apply the **Repository Pattern** in Laravel
to separate **Business Logic** from **Data Access**, following clean and scalable
software architecture principles.

---

## 🎯 Task Overview

Instead of calling `Post::all()` directly inside the controller, we:

- Created a `PostRepositoryInterface` to define data access contracts
- Implemented it using `EloquentPostRepository`
- Added a `PostService` layer for business logic
- Used **Pagination** for better performance
- Returned data using **API Resources**
- Seeded the database with fake data for testing

---

## 🏗 Architecture Flow

Request
→ Controller
→ Service
→ Repository (Interface)
→ Eloquent Repository
→ Database


---

## 📂 Key Components

- **Repository**
  - `PostRepositoryInterface`
  - `EloquentPostRepository`

- **Service Layer**
  - `PostService` (handles business rules)

- **API**
  - `PostController`
  - `/api/posts` endpoint

- **API Resource**
  - `PostResource` (controls response shape)

- **Database**
  - `PostFactory`
  - `PostSeeder`

---

## 🚀 How to Run

```bash
php artisan migrate
php artisan db:seed
php artisan serve
