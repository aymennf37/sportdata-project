# SET - Sports Data Management System

## 📘 Project Overview
SET is a professional, production-level Sports Data Management System designed to streamline sports events and simplify management. It features a dual-interface system for **Administrators** (management & control) and **Analysts** (visualization & reporting), built with a secure PHP backend and a modern, responsive frontend.

---

## 🚀 Installation Guide

1.  **Prerequisites**:
    - PHP 7.4 or higher
    - MySQL Database
    - Web Server (Apache/Nginx/XAMPP)

2.  **Setup**:
    - **Database**: Import the `database.sql` file into your MySQL database (Create a DB named `sportdata`).
    - **Config**: Update `config/Database.php` with your database credentials (host, username, password).
    - **Deployment**: Place the `sportdata` folder in your web server's root directory (e.g., `htdocs`).

3.  **Default Credentials**:
    - **Admin**: `admin@set.com` / `admin123` (You must insert this manually into DB with password hash or use registration if implemented).
    - **Analyst**: `analyst@set.com` / `analyst123`.

---

## 🏗️ Technical Architecture

The project follows a **MVC (Model-View-Controller)** architectural pattern for separation of concerns and maintainability.

-   **Models** (`/models`): Handle data logic and database interactions (PDO).
    -   `User`, `Player`, `Team`, `Match`, `Performance`.
-   **Views** (`/views`): Present the user interface.
    -   Separated into `admin`, `analyst`, and `public` layouts.
-   **Controllers** (`/controllers`): Handle user input and application logic.
    -   `AuthController`, `AdminController`, `AnalystController`.
-   **Middleware** (`/middleware`): Enforces security policies (e.g., `AuthMiddleware` for role checks).

---

## 🔐 Security Features

1.  **Authentication**: Secure login system with sessions.
2.  **Authorization**: Role-based access control (RBAC) ensures Admins and Analysts can only access their respective areas.
3.  **Data Protection**:
    -   **Password Hashing**: Uses `password_hash()` (Bcrypt) for storing passwords.
    -   **SQL Injection Prevention**: All database queries use **Prepared Statements** with PDO.
    -   **XSS Protection**: Input sanitization using `htmlspecialchars`.

---

## 📊 Database Schema (ER Description)

-   **Users**: Stores authentication data and roles.
-   **Teams**: Core entity for grouping players.
-   **Players**: Stores athlete details, linked to Teams. Includes QR Code logic.
-   **Matches**: Records games between two Teams.
-   **Performances**: Junction table linking Players to Matches with stats (goals, assists, rating).
-   **ActivityLogs**: Audit trail for Admin actions.

---

## 📱 Features

-   **Dashboard**: Real-time statistics and overview.
-   **QR Codes**: Unique codes for players (simulated).
-   **Data Visualization**: Interactive charts using **Chart.js**.
-   **Responsive Design**: Mobile-friendly UI with Navy (#1f2f46) and Red (#e41e26) theme.

---

## 🎓 Academic Defense Notes
This system demonstrates mastery of:
-   Full-stack PHP development.
-   Secure coding practices.
-   Database design and normalization.
-   Modern UI/UX principles.
