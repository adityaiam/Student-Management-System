# School Management System (SMS)

This is a web-based School Management System developed using PHP, SQL, HTML, and CSS.

## Features

- User registration and login
- Admin dashboard
- Course management
- Student management
- Contact form

## Project Structure
SMS/
├── admin/
│ ├── addcourse.php
│ ├── contact.php
│ ├── courses.php
│ ├── dashboard.php
│ ├── login.html
│ ├── student.php
│ ├── updatecourse.php
│ ├── include/
│ │ └── nav.php
│ ├── php/
│ │ ├── addcourse.php
│ │ ├── approve.php
│ │ ├── db.php
│ │ ├── deletecourse.php
│ │ ├── donecontact.php
│ │ ├── login.php
│ │ ├── logout.php
│ │ ├── updatecourse.php
├── css/
│ └── style.css
├── db/
│ └── sms.sql
├── images/
│ └── college.jpg
├── include/
│ └── nav.php
├── php/
│ ├── contact.php
│ ├── db.php
│ ├── login.php
│ ├── register.php
├── index.php
├── login.php
└── register.php



## Installation

1. Clone the repository:
    ```sh
    git clone https://github.com/adityaiam/Student-Management-System.git
    ```
2. Navigate to the project directory:
    ```sh
    cd Student-Management-System
    ```
3. Set up your web server (e.g., XAMPP) and place the project files in the web server directory (e.g., `htdocs` for XAMPP).

4. Import the database:
    - Open phpMyAdmin and create a new database named `sms`.
    - Import the `sms.sql` file located in the `db` directory into the `sms` database.

5. Update the database configuration:
    - Edit the `db.php` file located in the `php` and `admin/php` directories with your database credentials.

## Usage

- Open your web browser and navigate to `http://localhost/SMS` to access the application.
- Register as a new user or login if you already have an account.
- Admin can login at `http://localhost/SMS/admin/login.html` to manage courses and students.

## Contributing

Feel free to fork this repository and submit pull requests. For major changes, please open an issue first to discuss what you would like to change.

## License

This project is open-source and available under the [MIT License](LICENSE).






