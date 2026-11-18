# Mini Tech Store

University group project: an e-commerce website built with **PHP, MySQL, HTML, CSS, and JavaScript**.

## Features
- Browsing products and viewing product details
- Administrative product management
- Database-backed creation and deletion of product records
- Site layout and navigation

## My contribution
Worked on the administrative interface and PHP/MySQL operations for managing store records, and participated in group testing and debugging.

## Project structure
- `index.php` — storefront
- `Admin.php` — administration page
- `add.php`, `delete.php` — database-related actions
- `mini_store_db.sql` — sample schema/data used in the course project
- `css/`, `js/`, `images/` — front-end assets

## Run locally
1. Install a local PHP and MySQL environment (such as XAMPP).
2. Import `mini_store_db.sql` into a locally running MySQL server.
3. Copy `db.example.php` to `db.php` and adjust your **local** database host, port, username and password. Never commit credentials.
4. Place the project in your PHP server's document root and access `index.php` locally.

> Academic group project. Shared only with permission from the team. Do not use this educational project as a production store.
