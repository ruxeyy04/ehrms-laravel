# EHRMS - Enterprise Human Resources Management System

EHRMS is an ongoing project aimed at managing the employees of the Department of Education (DepEd) in Ozamiz, Philippines. This system is under development and aims to streamline HR processes and employee management.

## Laravel Version
- 11.2.0
## Table of Contents

- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [Credentials](#credentials)
- [Contributing](#contributing)
- [License](#license)

## Features

- Manage employee profiles and details.
- Track employee attendance and leave.
- Handle payroll and benefits.
- Generate reports and analytics.
- Admin panel for managing system configurations and user roles.

## Installation

Follow these steps to set up the project locally.

### Prerequisites

Make sure you have the following installed on your machine:

- PHP >= 8.2
- Composer
- Node.js & npm
- MySQL

### Steps

1. **Clone the repository:**

    ```bash
    git clone https://github.com/ruxeyy04/ehrms-laravel.git
    cd ehrms-laravel
    ```

2. **Install PHP dependencies:**

    ```bash
    composer install
    ```

3. **Install JavaScript dependencies:**

    ```bash
    npm install
    ```

4. **Set up the environment file:**

    Copy the `.env.example` file to `.env` and update the necessary environment variables.

    ```bash
    cp .env.example .env
    ```

    Update the `.env` file with your database credentials and other configurations.

5. **Generate application key:**

    ```bash
    php artisan key:generate
    ```

6. **Run migrations:**

    ```bash
    php artisan migrate
    ```

7. **Create a symbolic link for storage:**

    ```bash
    php artisan storage:link
    ```

8. **Seed the database:**

    ```bash
    php artisan db:seed
    ```

9. **Some Practical Commands (optional):**

    Clean up your project

    ```bash
    php artisan cache:clear
    php artisan view:clear
    php artisan config:clear
    ```

10. **Serve the application:**

    ```bash
    php artisan serve
    ```

    The application will be available at `http://localhost:8000`.

11. **Serve the application with a modified port and host (optional):**

    To serve the application on a different port or host, use the following command:

    ```bash
    php artisan serve --host=your_host --port=your_port
    ```

    For example, to serve the application at `http://127.0.0.1:8080`, you would run:

    ```bash
    php artisan serve --host=127.0.0.1 --port=8080
    ```

## Usage

After setting up the project, you can register new users, manage employee records, and generate reports. Administrators can log in to the admin panel to configure the system and manage user roles.

## Credentials

Use the following credentials to log in as an admin or other roles:

### System Admin User
- **Email:** systemadmin@gmail.com
- **Password:** 1234


## Contributing

We welcome contributions to enhance EHRMS. Please fork the repository and submit pull requests.

1. Fork the repository.
2. Create a new branch: `git checkout -b feature/your-feature-name`.
3. Make your changes and commit them: `git commit -m 'Add some feature'`.
4. Push to the branch: `git push origin feature/your-feature-name`.
5. Open a pull request.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
