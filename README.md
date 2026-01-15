sus_proj – Laravel CRUD Project

This repository contains the source code for my Laravel project completed in my 3rd semester. It is a simple CRUD application (Create, Read, Update, Delete) built for learning Laravel fundamentals.

This project is mainly focused on basic database operations using Laravel routes, controllers, migrations, and Blade views. It is a student-level project and will be improved over time.

Tech Stack
Laravel (PHP) – Backend framework
Blade – Templating engine (views)
MySQL – Database (XAMPP recommended)
Composer – PHP dependency manager
Node.js / npm – Frontend tooling
Vite – Asset bundling (Laravel default)

Current Workflow
Create/update the CRUD module (example: Students).
Use Blade views for forms and UI pages.
Store data in MySQL using Laravel migrations and models.
Test the app locally using XAMPP or php artisan serve.
Commit changes and push to the main branch on GitHub.
Improve features and code structure gradually as I learn more.

Known Limitations
This project is not in its final form:

UI is basic and not fully polished.
No advanced authentication/authorization (unless added later).
Code structure can be improved and refactored more.
Validation, error handling, and UX can be improved.
Not optimized for production deployment.
In short: it works as a learning CRUD project, but it’s not a full production-level system.

Future Improvements
Planned improvements include:

Making the UI more clean and responsive.
Adding authentication (login/register) and role-based access.
Improving validation and error messages.
Adding search, pagination, and filtering for records.
Refactoring controllers and using best practices (Form Requests, Services, etc.).
Improving documentation and adding screenshots.

Running the Project Locally

Clone the repository:

git clone https://github.com/Sudipthapa9/sus_proj.git

Go into the project folder:

cd sus_proj

Install PHP dependencies:

composer install

Copy environment file:

cp .env.example .env

Generate app key:

php artisan key:generate

Create a MySQL database (example: sus_proj) and update DB settings in .env:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=sus_proj
DB_USERNAME=root
DB_PASSWORD=

Run migrations:

php artisan migrate

Run the project:

php artisan serve

Open in browser:

http://127.0.0.1:8000

If you are using XAMPP and placed the folder inside C:\xampp\htdocs\sus_proj, you can also use:

http://localhost/sus_proj/public

To check routes:

php artisan route:list

If you have feedback, suggestions, or opportunities, feel free to reach out:

Email: kazit8119@gmail.com
GitHub: @Sudipthapa9
