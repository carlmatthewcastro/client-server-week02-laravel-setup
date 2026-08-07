# Client-Server Week 02 Laravel Setup

## 1. Project Title
**Laravel Student Profile Project (ITST 302)**

---

## 2. Introduction

Laravel is a modern PHP web framework designed to simplify the development of web applications by providing elegant syntax, expressive routing, and built-in tools for common tasks. It is widely used for building scalable, secure, and maintainable applications.

Client-server technologies are foundational to web development because they separate responsibilities between the server, which processes requests and manages data, and the client, which presents the user interface and interacts with the server. This separation enables better performance, maintainability, and scalability.

The purpose of this project is to install and configure a Laravel application, document the setup process, and demonstrate the structure of a Laravel project in a client-server environment.

---

## 3. Objectives

- Install and configure Laravel in a local development environment.
- Verify PHP, Composer, Laravel, Git, and MySQL compatibility.
- Understand key Laravel folder structures and project files.
- Create a working local application capable of running via `php artisan serve`.
- Document installation steps, encountered issues, and implemented solutions.

---

## 4. Development Environment

| Component | Version / Detail |
| :--- | :--- |
| **Operating System** | Microsoft Windows 11 Home Single Language (Build 26200) |
| **PHP** | 8.2.12 |
| **Laravel** | 12.65.0 |
| **Composer** | 2.10.2 |
| **Git** | 2.55.0.windows.3 |
| **MySQL / MariaDB** | 15.1 (Distrib 10.4.32-MariaDB) |
| **VS Code** | 1.132.0 |

---

## 5. Installation Steps

1. Open the project folder in Visual Studio Code.
2. Install PHP dependencies with Composer.
   - Command: `composer install`
3. Copy `.env.example` to `.env` and generate the application key.
   - Command: `copy .env.example .env` (Windows)
   - Command: `php artisan key:generate`
4. Configure database settings in `.env` for MySQL/MariaDB.
   - Example: `DB_CONNECTION=mysql`, `DB_HOST=127.0.0.1`, `DB_PORT=3306`, `DB_DATABASE=laravel`, `DB_USERNAME=root`, `DB_PASSWORD=`.
5. Run database migrations.
   - Command: `php artisan migrate`
6. Start the Laravel development server.
   - Command: `php artisan serve`
   
---

## 6. Project Structure

- `app/`: Contains application logic, including controllers, models, middleware, and service providers. This is where custom business code is implemented.
- `routes/`: Defines the routes for the application. `web.php` handles browser requests, while `api.php` handles API endpoints.
- `resources/`: Contains views, frontend assets, and raw source files. Blade templates live in `resources/views`, and CSS/JS assets are stored in `resources/css` and `resources/js`.
- `public/`: The web server’s document root. It exposes the `index.php` bootstrap file, asset files, and publicly accessible resources.
- `config/`: Contains configuration files for database, cache, mail, session, and other application settings.
- `database/`: Stores migration files, database seeders, and factory definitions used to generate test data.

---

## 7. Problems Encountered and Solutions

| Problem Encountered | Implemented Solution |
| :--- | :--- |
| Composer command was not recognized in some terminal sessions. | Added Composer to the system PATH and restarted the terminal so `composer install` could run correctly. |
| Incorrect PHP version / PATH configuration pointing to the wrong binary. | Verified the active PHP executable path and updated the system PATH to point explicitly to the target PHP 8.2.12 installation. |
| MySQL/MariaDB service startup failure during connection tests. | Restarted the XAMPP MySQL/MariaDB service and confirmed correct database ports and credentials in `.env`. |
| VS Code CLI (`code`) command missing from the system PATH. | Installed/enabled Visual Studio Code command-line shell integration to enable the `code` command from PowerShell. |

---

## 8. Verification Screenshots

* **Screenshot 1:** VS Code opening the Laravel project workspace (`Screenshots/vscode-Installed VSCode.png`).
* **Screenshot 2:** Successful Composer dependency installation output (`Screenshots/Installed Composer.png`).
* **Screenshot 3:** `.env` configuration and application key generation success message (`Screenshots/Installed Laravel.png`).
* **Screenshot 4:** Database migrations executing successfully via Artisan (`Screenshots/Installed MySQL.png`).
* **Screenshot 5:** Laravel development server running locally via `php artisan serve` (`Screenshots/Laravel Project.png`).

---

## 9. Reflection

During this Laravel setup activity, I learned how Laravel provides a structured development environment supporting both server-side processing and client-facing application flow. The framework simplifies common tasks such as dependency management, environment configuration, and database migrations. This structure is especially critical in client-server development because it clearly separates server logic from presentation concerns and helps maintain a secure, maintainable codebase.

The challenges encountered largely involved local development tooling configurations. Composer and PHP path settings required careful validation to ensure correct binary execution. Additionally, experiencing MySQL service startup issues highlighted the importance of ensuring dependent background services are active before Laravel attempts database communication. Discovering that the Visual Studio Code CLI required explicit PATH integration also reinforced the value of a properly configured developer workstation.

Laravel is invaluable in client-server architecture due to its opinionated conventions and built-in support for routing, authentication, database abstraction, and templating. These tools reduce repetitive boilerplate setup, allowing developers to focus on feature implementation rather than infrastructure wiring. Furthermore, Laravel’s migration and ORM systems keep the server's data model synchronized with application code, streamlining integration with modern web clients.

This knowledge strengthens my confidence in setting up full-stack PHP applications and managing relationships between clients, servers, and databases. Understanding Laravel’s folder structure and deployment requirements enables me to build clean, maintainable applications more efficiently while preparing me to troubleshoot environment discrepancies in team settings.

---

## 10. References

- Laravel Documentation. (2026). Retrieved from [https://laravel.com/docs](https://laravel.com/docs)
- PHP Documentation. (2026). Retrieved from [https://www.php.net/docs.php](https://www.php.net/docs.php)
- Composer Documentation. (2026). Retrieved from [https://getcomposer.org/doc/](https://getcomposer.org/doc/)
- Git Documentation. (2026). Retrieved from [https://git-scm.com/doc](https://git-scm.com/doc)
