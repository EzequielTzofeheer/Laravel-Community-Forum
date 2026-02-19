# Laravel Communyti Forum

![Laravel](https://img.shields.io/badge/Laravel-12.x-red)
![PHP](https://img.shields.io/badge/PHP-8.3%2B-blue)
![Docker](https://img.shields.io/badge/Docker-Ready-blue)
![License](https://img.shields.io/badge/License-MIT-green)
![Status](https://img.shields.io/badge/Status-Stable-success)

A **modern forum platform built with Laravel 12 + Jetstream + Livewire**, focused on clean architecture, real-time interactions and scalable community discussions.

---

## 📌 What is this?

**Laravel Communyti Forum**, is a modern discussion platform where users can:

- Create questions (posts)
- Like posts and comments
- Reply to questions
- Interact in real time
- Manage profiles with Jetstream

The application is built using **Laravel 12, Livewire 3**, and **Tailwind CSS**, running inside a fully containerized Docker environment.

---

## 🎯 What is it for?

This project is intended to:

- Demonstrate how to build a real-world forum application
- Practice modern Laravel architecture
- Implement real-time UI interactions with Livewire
- Apply scalable relational database patterns
- Serve as a foundation for Q&A or community-based platforms

It is ideal for developers who want to learn or build:

- Community platforms
- Discussion forums
- StackOverflow-like systems
- Social interaction features in Laravel

---

## 🧠 How does it work?

Users can:

- Register and authenticate using Laravel Jetstream
- Create questions
- Reply to questions
- Like/unlike posts and comments
- View dynamic counters (likes, replies, views)
- Experience infinite scroll for comments

The system uses:

- Eloquent relationships
- Livewire for dynamic UI updates
- Optimized queries with eager loading
- UUID primary keys
- Soft deletes for safe data management

All services run inside Docker containers orchestrated with Docker Compose.

---


### 🐳 Docker services overview

- **App**: PHP container running Laravel + Jetstream + Livewire
- **Queue**: Dedicated worker container for background jobs
- **Nginx**: Web server handling HTTP requests
- **MySQL**: Relational database for application data
- **Redis**: Queue and cache backend
- **PHPMyAdmin**: Database management interface

All services communicate through a dedicated Docker bridge network.

---

## 🚀 Quick Installation

### 1️⃣ Clone the repository

```bash
git clone git clone https://github.com/EzequielTzofeheer/Laravel-Community-Forum

```

2️⃣ Access the project directory

```bash
cd Laravel-Community-Forum
```

3️⃣ Create the environment file

```bash
cp .env.example .env
```

4️⃣ Build and start the containers

```bash
sudo docker compose up -d
```

5️⃣ Access the Docker container

```bash
sudo docker compose exec app bash
```

6️⃣ Install Laravel dependencies

```bash
composer install
```

7️⃣ Generate the application key

```bash
php artisan key:generate
```

8️⃣ Run the database migrations

```bash
php artisan migrate
```

9️⃣ Install the Node.js dependencies using NPM

```bash
npm install
```

9️⃣ Compile and optimize frontend assets for development or production:

```bash
npm run build
```

---

## 🌐 Access

- Application: http://localhost:8096
- PhpMyAdmin: http://localhost:8556

---

## 🧱 Core Features

- User authentication (Jetstream)
- Question creation with categories
- Likes system (many-to-many pivot table)
- Comment system (one-to-many relationship)
- Infinite scroll for replies
- Dynamic like counters (Livewire)
- Profile photo upload
- UUID-based primary keys
- Soft delete support

---

## 🧩 Tech Stack

- PHP 8.3+
  - Laravel 12.x
  - Jetstream
  - Livewire 3
- UI / Frontend
  - Tailwind CSS
  - Flowbite
- Docker
  - Docker Compose
- Nginx
- MySQL 8
- Redis

---

## 🏗️ Architecture Concepts Applied

- Eloquent Relationships
  - One-to-Many (Questions → Replies)
  - Many-to-Many (Likes)
- Eager Loading to prevent N+1 queries
- Livewire state management
- Component-based UI
- Clean separation between Models, Livewire Components and Views
- Dockerized development environment

---

🧩 Compatibility

- PHP: 8.3+
- Laravel: 12.x
- Docker: 24+
- Docker Compose: 2.x+
- Supported OS:
  - Linux
  - macOS
  - Windows (WSL2 recommended)

---

## 🤝 Contributing

Contributions are welcome.

You can contribute by:

- Opening Issues
- Submitting Pull Requests
- Suggesting improvements to the setup or documentation
- Reporting bugs or performance issues

Please keep changes clean, generic and production-oriented.

---

## 🙌 Credits

- Laravel Framework
- Livewire
- Docker
- Tailwind CSS
- Open Source Community

---

## ⭐ Support

If this repository was useful to you, consider leaving a ⭐ on GitHub.

It helps support the project and encourages continuous improvement.

---

## 👤 Author

Developed and maintained by **Ezequiel Tzofeheer**

**Full Stack Developer** with a strong focus on building clean, scalable and secure applications.

**Core areas of interest:**

- Clean Architecture
- Secure Development
- High Productivity Systems
- Performance Optimization
- Developer Experience
- Modern Laravel Ecosystem

---

📄 License

This project is licensed under the MIT License.

See the LICENSE file for more details.
