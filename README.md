# Sitem Informasi Management Outcome-based Education (SIMOBE)

## 📌 Table of Contents

-   [Features](#features)
-   [Requirements](#requirements)
-   [Installation](#installation)
-   [Usage](#usage)
-   [Project Structure](#project-structure)
-   [Contributing](#contributing)

## 🚀 Features

-   **Dashboard**
-   **CPL-CPMK-SCPMK**
-   **Mapping CPL**
-   **Hasil Pembelajaran**

## 📋 Requirements

-   PHP 8.1 or higher
-   Composer
-   Node.js and NPM
-   MySQL
-   Apache or Nginx

## 🛠 Installation

Follow these steps to set up the project:

1. Clone the repository:

    ```bash
    git clone https://github.com/danisec/sim-obe.git

    cd sim-obe
    ```

2. Install dependencies:

    ```bash
    composer install

    npm install && npm run build
    ```

3. Configure Environment Variables:

    Copy the .env.example file and update it:

    ```bash
    cp .env.example .env
    ```

    Generate application key and storage link:

    ```bash
    php artisan key:generate

    php artisan storage:link
    ```

4. Set Up Database:

-   Create a new MySQL database.
-   Update .env with your database credentials:

    ```bash
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=sim_obe
    DB_USERNAME=dbusername
    DB_PASSWORD=dbpassword
    ```

5. Run Database Migrations

    ```bash
    php artisan migrate --seed

    php artisan migrate --path="database/migrations/*"
    ```

    Or, manually import the SQL file:

    ```bash
    mysql -u your_username -p your_password sim_obe < database/sql/sim_obe.sql
    ```

6. Serve the application:

    ```bash
    php artisan serve
    ```

## 🎯 Usage

-   Access the application in your browser at `http://localhost:8000`.
-   Login with the default credentials:
    -   Superadmin:
        -   Username: `admin`
        -   Password: `admin12345`

## 📂 Project Structure

-   **app/Http/Controllers**: Contains the controllers for handling HTTP requests.
-   **app/Models**: Holds the Eloquent models.
-   **database/migrations**: Database migrations to set up the tables.
-   **resources/views**: Blade templates for the frontend.
-   **routes/web.php**: Defines web routes for the application.

## 🤝 Contributing

Contributions are welcome! To contribute:

1. Fork the repository.
2. Create a feature branch: git checkout -b feature-name
3. Commit changes: git commit -m "feat: add new feature"
4. Push to branch: git push origin feature-name
5. Submit a pull request.

Ensure your code follows the project’s coding standards before submission.
