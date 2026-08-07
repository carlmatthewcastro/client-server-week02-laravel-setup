# Laravel Student Profile Project (ITST 302)

## 1. Project Title
**Client-Server Week 02 Laravel Setup**

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

## Development Environment

- Operating System: Microsoft Windows 11 Home Single Language 10.0.26200 Build 26200
- PHP Version: 8.2.12
- Laravel Version: 12.65.0
- Composer Version: 2.10.2
- Git Version: 2.55.0.windows.3
- MySQL Version: 15.1 Distrib 10.4.32-MariaDB
- VS Code Version: 1.132.0
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

## Installation Steps

1. Open the project folder in Visual Studio Code.
   - Screenshot: `screenshots/vscode-open-project.png`
2. Install PHP dependencies with Composer.
   - Command: `composer install`
   - Screenshot: `screenshots/composer-install.png`
3. Copy `.env.example` to `.env` and generate the application key.
   - Command: `copy .env.example .env` (Windows)
   - Command: `php artisan key:generate`
   - Screenshot: `screenshots/env-key-generate.png`
4. Configure database settings in `.env` for MySQL/MariaDB.
   - Example: `DB_CONNECTION=mysql`, `DB_HOST=127.0.0.1`, `DB_PORT=3306`, `DB_DATABASE=laravel`, `DB_USERNAME=root`, `DB_PASSWORD=`.
   - Screenshot: `screenshots/env-database-settings.png`
5. Run database migrations.
   - Command: `php artisan migrate`
   - Screenshot: `screenshots/artisan-migrate.png`
6. Start the Laravel development server.
   - Command: `php artisan serve`
   - Screenshot: `screenshots/artisan-serve.png`

> Note: Replace the screenshot placeholders above with actual images captured during setup.

## 6. Project Structure

- `app/`: Contains application logic, including controllers, models, middleware, and service providers. This is where custom business code is implemented.
- `routes/`: Defines the routes for the application. `web.php` handles browser requests, while `api.php` handles API endpoints.
- `resources/`: Contains views, frontend assets, and raw source files. Blade templates live in `resources/views`, and CSS/JS assets are stored in `resources/css` and `resources/js`.
- `public/`: The web server’s document root. It exposes the `index.php` bootstrap file, asset files, and publicly accessible resources.
- `config/`: Contains configuration files for database, cache, mail, session, and other application settings.
- `database/`: Stores migration files, database seeders, and factory definitions used to generate test data.

## 7. Problems Encountered

- Composer command was not recognized in some terminal sessions.
- PHP PATH configuration caused the wrong PHP installation or PHP binary to be used.
- MySQL/MariaDB service did not start immediately when the database connection was tested.
- Visual Studio Code command-line utility was not on the system PATH.

## 8. Solutions

- Added Composer to the system PATH and restarted the terminal so `composer install` could run correctly.
- Verified the active PHP executable path and updated the PATH to point to the intended PHP 8.2.12 installation.
- Restarted the XAMPP MySQL/MariaDB service and confirmed the database port and credentials in `.env`.
- Installed or enabled the VS Code command-line shell integration so the `code` command works from PowerShell.

---

## 9. Verification Screenshots

- Screenshot 1: VS Code opening the Laravel project.
- Screenshot 2: Composer dependency installation.
- Screenshot 3: `.env` configuration and application key generation.
- Screenshot 4: Running database migrations successfully.
- Screenshot 5: Laravel development server started with `php artisan serve`.

---

## 10. Reflection

During this Laravel setup activity, I learned how Laravel provides a structured development environment that supports both server-side processing and client-facing application flow. The framework simplifies common tasks such as dependency management, environment configuration, and database migrations. This structure is especially important in client-server development because it clearly separates server logic from presentation concerns and helps maintain a secure, maintainable codebase.

The challenges that I encountered included configuration issues with the local development tools. Composer and PHP path settings required careful validation to ensure the correct binaries were used. I also experienced MySQL service startup issues, which highlighted how dependency services must be running before Laravel can connect. In addition, I discovered that the Visual Studio Code CLI may not always be available by default, so enabling the `code` command on the PATH was necessary for a smooth workflow.

Laravel is important in client-server development because it offers opinionated conventions and built-in support for routing, authentication, database access, and templating. These tools reduce the amount of repetitive setup required and let developers focus on implementing features instead of wiring infrastructure. Laravel’s migration and ORM systems are particularly useful for client-server projects because they allow the server’s data model to stay synchronized with code and make it easier to support modern web clients.

This knowledge will help me in future software development projects by giving me confidence in setting up full-stack PHP applications and managing the relationships between the client, the server, and the database. Understanding Laravel’s folder structure and deployment requirements means I can build clean, maintainable applications more quickly. It also prepares me to troubleshoot environment issues, which is a valuable skill when working in team settings where different developers may have different local setups.

---

## 11. References

- Laravel Documentation. (2026). Retrieved from [https://laravel.com/docs](https://laravel.com/docs)
- PHP Documentation. (2026). Retrieved from [https://www.php.net/docs.php](https://www.php.net/docs.php)
- Composer Documentation. (2026). Retrieved from [https://getcomposer.org/doc/](https://getcomposer.org/doc/)
- Git Documentation. (2026). Retrieved from [https://git-scm.com/doc](https://git-scm.com/doc)
| **Incorrect PHP version / PATH configuration** pointing to the wrong binary. | Verified the active PHP executable path and updated the system PATH to point explicitly to the target PHP 8.2.12 installation. |
| **MySQL/MariaDB service startup failure** during connection tests. | Restarted the XAMPP MySQL/MariaDB service and confirmed correct database ports and credentials in `.env`. |
| **VS Code CLI (`code`) command missing** from the system PATH. | Installed/enabled Visual Studio Code command-line shell integration to enable the `code` command from PowerShell. |

---

## 8. Verification Screenshots
## Verification Screenshots

- Screenshot 1: VS Code opening the Laravel project.
- Screenshot 2: Composer dependency installation.
- Screenshot 3: `.env` configuration and application key generation.
- Screenshot 4: Running database migrations successfully.
- Screenshot 5: Laravel development server started with `php artisan serve`.
* **Screenshot 1:** VS Code opening the Laravel project workspace.
* **Screenshot 2:** Successful Composer dependency installation output.
* **Screenshot 3:** `.env` configuration and application key generation success message.
* **Screenshot 4:** Database migrations executing successfully via Artisan.
* **Screenshot 5:** Laravel development server running locally via `php artisan serve`.

---

## 9. Reflection
## Reflection

During this Laravel setup activity, I learned how Laravel provides a structured development environment that supports both server-side processing and client-facing application flow. The framework simplifies common tasks such as dependency management, environment configuration, and database migrations. That structure is especially important in client-server development because it clearly separates server logic from presentation concerns and helps maintain a secure, maintainable codebase.

The challenges that I encountered included configuration issues with the local development tools. Composer and PHP path settings required careful validation to ensure the correct binaries were used. I also experienced MySQL service startup issues, which highlighted how dependency services must be running before Laravel can connect. In addition, I discovered that the Visual Studio Code CLI may not always be available by default, so enabling the `code` command on the PATH was necessary for a smooth workflow.
During this Laravel setup activity, I learned how Laravel provides a structured development environment supporting both server-side processing and client-facing application flow. The framework simplifies common tasks such as dependency management, environment configuration, and database migrations. This structure is especially critical in client-server development because it clearly separates server logic from presentation concerns and helps maintain a secure, maintainable codebase.

The challenges encountered largely involved local development tooling configurations. Composer and PHP path settings required careful validation to ensure correct binary execution. Additionally, experiencing MySQL service startup issues highlighted the importance of ensuring dependent background services are active before Laravel attempts database communication. Discovering that the Visual Studio Code CLI required explicit PATH integration also reinforced the value of a properly configured developer workstation.

Laravel is important in client-server development because it offers opinionated conventions and built-in support for routing, authentication, database access, and templating. These tools reduce the amount of repetitive setup required and let developers focus on implementing features instead of wiring infrastructure. Laravel’s migration and ORM systems are particularly useful for client-server projects because they allow the server’s data model to stay synchronized with code and make it easier to support modern web clients.

This knowledge will help me in future software development projects by giving me confidence in setting up full-stack PHP applications and managing the relationships between the client, the server, and the database. Understanding Laravel’s folder structure and deployment requirements means I can build clean, maintainable applications more quickly. It also prepares me to troubleshoot environment issues, which is a valuable skill when working in team settings where different developers may have different local setups.

## 11. References

- Laravel Documentation. (2026). Retrieved from https://laravel.com/docs
- PHP Documentation. (2026). Retrieved from https://www.php.net/docs.php
- Composer Documentation. (2026). Retrieved from https://getcomposer.org/doc/
- Git Documentation. (2026). Retrieved from https://git-scm.com/doc

Laravel is invaluable in client-server architecture due to its opinionated conventions and built-in support for routing, authentication, database abstraction, and templating. These tools reduce repetitive boilerplate setup, allowing developers to focus on feature implementation rather than infrastructure wiring. Furthermore, Laravel’s migration and ORM systems keep the server's data model synchronized with application code, streamlining integration with modern web clients.

This knowledge strengthens my confidence in setting up full-stack PHP applications and managing relationships between clients, servers, and databases. Understanding Laravel’s folder structure and deployment requirements enables me to build clean, maintainable applications more efficiently while preparing me to troubleshoot environment discrepancies in team settings.

---

## References

* Laravel Documentation. (2026). Retrieved from [https://laravel.com/docs](https://laravel.com/docs)
* PHP Documentation. (2026). Retrieved from [https://www.php.net/docs.php](https://www.php.net/docs.php)
* Composer Documentation. (2026). Retrieved from [https://getcomposer.org/doc/](https://getcomposer.org/doc/)
* Git Documentation. (2026). Retrieved from [https://git-scm.com/doc](https://git-scm.com/doc)
