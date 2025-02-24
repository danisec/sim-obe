# Sitem Informasi Management Outcome-based Education (SIMOBE)

## Table of Contents

-   [Features](#features)
-   [Requirements](#requirements)
-   [Installation](#installation)
-   [Usage](#usage)
-   [Project Structure](#project-structure)
-   [Contributing](#contributing)

## Features

-   **Dashboard**
-   **CPL-CPMK-SCPMK**
-   **Mapping CPL**
-   **Hasil Pembelajaran**

## Requirements

-   PHP 8.1 or higher
-   Composer
-   Node.js and NPM
-   MySQL
-   Apache or Nginx

## Installation

1. Clone the repository:

    ```bash
    git clone https://github.com/danisec/sim-obe.git
    ```

2. Install dependencies:

    ```bash
    composer install

    npm install && npm run build
    ```

3. Create a new database and configure the `.env` file:

    ```bash
    cp .env.example .env

    php artisan key:generate
    ```

4. Set Up Database:

-   Create a database for the application.
-   Update the `.env` file with the database credentials.

    ```bash
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=sim_obe
    DB_USERNAME=dbusername
    DB_PASSWORD=dbpassword
    ```

5. Run the database migrations:

    ```bash
    php artisan migrate --seed
    ```

    or import manual file sql in folder database:

    ```bash
    database/sql/sim_obe.sql
    ```

6. Serve the application:

    ```bash
    php artisan serve
    ```

## Usage

-   Access the application in your browser at `http://localhost:8000`.
-   Login with the default credentials:
    -   Superadmin:
        -   Username: `admin`
        -   Password: `admin12345`

## Project Structure

-   **app/Http/Controllers**: Contains the controllers for handling HTTP requests.
-   **app/Models**: Holds the Eloquent models.
-   **database/migrations**: Database migrations to set up the tables.
-   **resources/views**: Blade templates for the frontend.
-   **routes/web.php**: Defines web routes for the application.

## Contributing

Contributions are welcome! Please fork the repository and submit a pull request with your changes. Ensure that your code follows the project’s coding standards.
