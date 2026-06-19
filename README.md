# DE-FORT
> A Laravel-based website for DE-FORT, a company specializing in engineering and health-related solutions. 

---

## Table of Contents

- [Project Overview](#project-overview)
- [Getting Started](#getting-started)
  - [Dependencies](#dependencies)
  - [Environment](#environment)
  - [Database](#database)
  - [Assets](#assets)
    
- [Notes](#notes)

---

## Project Overview

This repository includes:

* Custom Eloquent models: `About`, `Adminauth`, `Category`, `Contact`, `Post`, `Projects`, `Services`, `Tag`, `User`
* Controllers, requests and middleware under `app/Http`
* Blade views and partials in `resources/views`
* CSS in `resources/css` (`index.css`, `contact.css`) and Vite asset management
* Database migrations, seeders, and factories for initial data in MYSQL
* Local development environment via [Herd](https://herdapp.io) and [XAMPP](https://www.apachefriends.org/index.html) 

## Getting Started

### Dependencies
```bash
composer install
npm install
```

### Environment
* Copy `.env.example` to `.env` and configure database credentials.
* Run:
  ```bash
  php artisan key:generate
  ```

### Database
```bash
php artisan migrate --seed
php artisan storage:link
```

### Assets
```bash
npm run dev    # development build
npm run build  # production build 
```

## Notes

* Sessions use the database driver; ensure `sessions` table exists (`php artisan session:table` then migrate).
* The map uses google maps api key, add `GOOGLE_MAPS_API` to `.env`
