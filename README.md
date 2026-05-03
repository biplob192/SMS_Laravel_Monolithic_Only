# School Management System – Multi‑Tenant SaaS

A modern, subscription‑based School Management System built with Laravel, featuring multi‑tenancy, role‑based access control, and a modular architecture. Designed for educational institutions to manage students, teachers, parents, accountants, and administrators in a secure, isolated tenant environment.

![Laravel](https://img.shields.io/badge/Laravel-13.x-FF2D20?logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.3-777BB4?logo=php&logoColor=white)
![Tailwind CSS](https://img.shields.io/badge/Tailwind-4.x-06B6D4?logo=tailwindcss&logoColor=white)
![License](https://img.shields.io/badge/license-MIT-green)

## ✨ Features

- **Multi‑Tenancy** – Isolated data per school/organization using `stancl/tenancy`
- **Role‑Based Access Control** – Seven distinct roles (Super Admin, Admin, School Admin, Teacher, Accountant, Student, Parent) powered by `spatie/laravel‑permission`
- **Modular Architecture** – Organized by business domains (e.g., `User`, `School`, `Attendance`, `Fee`, `Exam`) without external module packages
- **Subscription Billing** – Ready‑to‑integrate subscription plans and payment gateways
- **Modern UI** – Responsive, accessible interface built with Tailwind CSS v4
- **RESTful APIs** – Fully documented API endpoints for mobile/third‑party integration
- **Real‑time Notifications** – In‑app and email alerts for important events
- **Comprehensive Reporting** – Dashboards, analytics, and exportable reports
- **Automated Testing** – PHPUnit feature and unit tests with database factories

## 🛠 Technology Stack

| Layer             | Technology                                                             |
| ----------------- | ---------------------------------------------------------------------- |
| **Backend**       | Laravel 13.x, PHP 8.3                                                  |
| **Database**      | MySQL / PostgreSQL / SQLite (with central + tenant databases)          |
| **Multi‑Tenancy** | [stancl/tenancy](https://tenancyforlaravel.com)                        |
| **Auth & RBAC**   | [spatie/laravel‑permission](https://spatie.be/docs/laravel-permission) |
| **Frontend**      | Blade templates, Tailwind CSS v4, Vite                                 |
| **Testing**       | PHPUnit 12.x, Laravel Factories, Faker                                 |
| **Dev Tools**     | Laravel Boost, Laravel Pint, Laravel Pail                              |

## 🚀 Installation & Local Setup

### Prerequisites

- PHP 8.3 or higher
- Composer 2.6+
- Node.js 18+ & npm 10+
- MySQL/PostgreSQL or SQLite
- Git

### 1. Clone the Repository

```bash
git clone https://github.com/your-org/school-management-system.git
cd school-management-system
```

### 2. Install PHP Dependencies

```bash
composer install
```

### 3. Install JavaScript Dependencies

```bash
npm install
```

### 4. Environment Configuration

Copy the example environment file and adjust the values:

```bash
cp .env.example .env
```

Edit `.env` with your local database credentials and app settings:

```env
APP_NAME="School Management System"
APP_URL=http://localhost:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_school_management
DB_USERNAME=root
DB_PASSWORD=

# Tenancy configuration
TENANCY_CENTRAL_DB_CONNECTION=mysql
TENANCY_TENANT_DB_CONNECTION=mysql
```

### 5. Generate Application Key

```bash
php artisan key:generate
```

### 6. Run Migrations & Seeders

First, migrate the central database (for tenant management):

```bash
php artisan migrate
```

Then, seed the central database with default roles, permissions, and a super‑admin:

```bash
php artisan db:seed
```

### 7. Build Frontend Assets

```bash
npm run build
```

Or, for development with hot‑reload:

```bash
npm run dev
```

### 8. Start the Development Server

```bash
php artisan serve
```

Visit **http://localhost:8000** in your browser.

## 🏗️ Multi‑Tenancy Setup

This project uses **database‑per‑tenant** isolation. The central database stores tenant metadata (tenants, domains, subscriptions), while each tenant has its own database.

### Creating a Tenant

For development, you can seed dummy tenants using:

```bash
php artisan db:seed --class=DummyTenantAndUsers
```

This will create two example tenants (`foo.localhost` and `bar.localhost`) with sample users.

Alternatively, you can create tenants programmatically via the central dashboard (after logging in as a super‑admin) or by writing a custom Artisan command.

### Tenant Database Auto‑Provisioning

When a new tenant is created, the system automatically:

1. Creates a new database (or schema) for the tenant
2. Runs tenant‑specific migrations
3. Seeds default data (roles, permissions, admin user) for that tenant

### Accessing Tenant Sites

Tenants are identified by subdomains (e.g., `example‑school.localhost:8000`). Ensure your local development environment supports wildcard subdomains (e.g., using `laravel.test` with Valet or editing `/etc/hosts`).

## 👥 Roles & Permissions

The system defines seven core roles:

| Role             | Description                                                                 |
| ---------------- | --------------------------------------------------------------------------- |
| **Super Admin**  | Full system access across all tenants; manages subscriptions, billing, etc. |
| **Admin**        | Central‑level admin (can manage multiple schools)                           |
| **School Admin** | School‑specific administrator (manages teachers, students, parents)         |
| **Teacher**      | Can view/update class schedules, attendance, grades, and student reports    |
| **Accountant**   | Manages fee collection, invoices, financial reports                         |
| **Student**      | Views own timetable, grades, fee status, and assignments                    |
| **Parent**       | Monitors child’s attendance, grades, and fee payments                       |

Permissions are assigned per role using `spatie/laravel‑permission`. You can modify permissions via the `DatabaseSeeder` or the admin UI.

## 📁 Modular Architecture

Instead of using `nwidart/laravel‑modules`, we organize the codebase by **business domains** within the `app/` directory:

```
app/
├── Modules/
│   ├── User/
│   │   ├── Controllers/
│   │   ├── Models/
│   │   ├── Policies/
│   │   ├── Requests/
│   │   └── Resources/
│   ├── School/
│   ├── Attendance/
│   ├── Fee/
│   ├── Exam/
│   └── ...
├── Core/
│   ├── Tenancy/
│   ├── Auth/
│   └── Traits/
└── ...
```

Each module is self‑contained with its own models, controllers, requests, policies, and resources. Routes are registered in `routes/tenant.php` (tenant‑specific) or `routes/web.php` (central).

## 🧪 Testing

Run the test suite with:

```bash
php artisan test
```

For a specific test file:

```bash
php artisan test --filter=UserModuleTest
```

The project includes:

- **Feature tests** for critical user journeys (registration, login, tenant creation)
- **Unit tests** for models, services, and helpers
- **Database factories** for generating test data

## 📦 Deployment

### Production Considerations

1. **Environment Variables** – Set `APP_ENV=production`, `APP_DEBUG=false`, and configure secure database credentials.
2. **Asset Compilation** – Run `npm run build` before deploying.
3. **Cache Configuration** – Execute `php artisan config:cache`, `php artisan route:cache`, and `php artisan view:cache`.
4. **Queue Workers** – Use Supervisor or Laravel Horizon to process jobs and notifications.
5. **Tenant Database Provisioning** – Ensure your production database user has permissions to create databases/schemas, or switch to a manual provisioning workflow.

### Recommended Hosting

- [Laravel Cloud](https://cloud.laravel.com) – Optimized for Laravel applications
- **VPS** (DigitalOcean, Linode) with Laravel Forge
- **PaaS** (Railway, Render) with managed databases

## 🤝 Contributing

Contributions are welcome! Please follow these steps:

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/amazing‑feature`)
3. Commit your changes (`git commit -m 'Add some amazing feature'`)
4. Push to the branch (`git push origin feature/amazing‑feature`)
5. Open a Pull Request

Ensure your code passes the existing test suite and adheres to the project’s coding standards (enforced by Laravel Pint).

## 📄 License

This project is open‑source software licensed under the [MIT License](LICENSE).

## 🙏 Acknowledgements

- [Laravel](https://laravel.com) – The fantastic PHP framework
- [Stancl/Tenancy](https://tenancyforlaravel.com) – Elegant multi‑tenancy package
- [Spatie Laravel Permission](https://spatie.be/docs/laravel-permission) – Robust RBAC implementation
- [Tailwind CSS](https://tailwindcss.com) – Utility‑first CSS framework

---

**Need Help?** Open an issue on GitHub or reach out to the maintainers.
