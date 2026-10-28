Installation

Clone the GitHub repository.

Open the project folder.

Run composer install.

Copy .env.example to .env.

Run php artisan key:generate.

Create a MySQL database named laravel_pos.

Configure the database connection in .env.

Run php artisan migrate --seed.

Start the application using php artisan serve.
