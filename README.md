
Project Information

Project: Tasks for Today Management System

Course: IT0049 - Web System Technologies

Assessment: Technical Summative Assessment 3

Student Name: Rafael Miguel N. Joaquin

Section: TX32

Professor: Von Erick Magbitang






Installation and Setup

Clone the repository:

git clone YOUR_GITHUB_REPOSITORY_LINK

Navigate to the project folder:

cd TSA3

Install the dependencies:

composer install

Create a .env file by copying .env.example.

Configure your database settings in .env:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=tsa3
DB_USERNAME=root
DB_PASSWORD=

Generate the application key:

php artisan key:generate

Create a MySQL database named tsa3 using phpMyAdmin.

Run the migrations:

php artisan migrate

Populate the database:

php artisan db:seed

Start the Laravel development server:

php artisan serve

Open the application in your browser:

http://127.0.0.1:8000
