
# Trial-Task (Laravel Back-End)

This is a simple Laravel-based back-end application designed to handle task management. It includes RESTful APIs for managing tasks and supports operations like fetching a list of tasks, creating, updating, and deleting tasks.

## Features

- RESTful API to manage tasks.
- Basic authentication using Laravel Passport.
- Task management with CRUD operations.
- Soft delete support for tasks.
- Status tracking for tasks (`completed`, `pending`).

## Requirements

- PHP 8.2 or higher
- Laravel 11.x
- Composer
- MySQL (or any supported database of your choice)

## Installation

Follow these steps to set up the Laravel back-end:

### 1. Clone the repository

```bash
git clone https://github.com/NadaBahaa/Trial-Task.git
cd trial-task
```

### 2. Install dependencies

Run the following command to install required dependencies using Composer:

```bash
composer install
```

### 3. Set up environment variables

Create a `.env` file by copying from `.env.example`:

```bash
cp .env.example .env
```

Update the database configuration in the `.env` file according to your setup. Example:

```dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=trial_task
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Generate application key

```bash
php artisan key:generate
```

### 5. Migrate the database

Run the database migrations to create necessary tables:

```bash
php artisan migrate
```

### 6. (Optional) Seed the database

You can seed the database with sample data using the following command:

```bash
php artisan db:seed
```

### 7. Serve the application

Start the Laravel development server:

```bash
php artisan serve
```

Your application should now be accessible at `http://127.0.0.1:8000`.

## API Endpoints

Here are the available API endpoints for the task management system:

### `GET /api/tasks`
- **Description**: Fetch all tasks.
- **Response**: Returns a JSON array of tasks with fields like `id`, `title`, `description`, `status`, `created_at`, `updated_at`.

### `GET /api/tasks/{id}`
- **Description**: Fetch a single task by ID.
- **Response**: Returns a JSON object with the task's details.

### `DELETE /api/tasks/{id}`
- **Description**: Delete a task by ID.
- **Response**: Returns a success message or error if the task is not found.

## Technologies Used

- **Laravel 11.x**: PHP framework for building the back-end API.
- **MySQL**: Database management system (can be changed according to requirements).
- **Eloquent ORM**: For database interaction.
- **Laravel Passport**: For authentication (if applicable).

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Author

- Your Name (GitHub: [@NadaBahaa](https://github.com/NadaBahaa))
