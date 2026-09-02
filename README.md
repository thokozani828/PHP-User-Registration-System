# 🔐 PHP User Registration System

A simple **PHP and MySQL user registration system** that demonstrates how to collect user information from an HTML form and securely store it in a database.

This project was created to practice **server-side PHP programming, database connectivity, form handling, password hashing, and prepared SQL statements**.

## 📌 Project Overview

The application provides a registration form where users can enter:

* 👤 Name
* 📧 Email address
* 🔑 Password

When the form is submitted, PHP processes the information and stores the user's details in a MySQL database.

The password is securely hashed using PHP's `password_hash()` function before being stored.

## 🛠️ Technologies Used

* **PHP** – Server-side programming
* **MySQL** – Database management
* **HTML5** – Registration form
* **XAMPP** – Local development environment
* **Prepared Statements** – Secure database queries
* **PHP Password Hashing** – Password protection

## 🔄 How It Works

```text
User enters registration details
            ↓
       HTML Form
            ↓
        PHP Script
            ↓
     Validate Request
            ↓
     Hash the Password
            ↓
     Prepared SQL Statement
            ↓
        MySQL Database
            ↓
   Registration Successful
```

## 🔐 Security Features

The project demonstrates some important security practices:

### Password Hashing

Passwords are not stored directly in the database.

PHP's:

```php
password_hash($password, PASSWORD_DEFAULT)
```

is used to create a secure password hash.

### Prepared Statements

The database query uses a prepared statement:

```php
$stmt = $conn->prepare(
    "INSERT INTO new_users2 (username, email, password) VALUES (?, ?, ?)"
);
```

This helps protect the application against **SQL injection**.

## 📂 Project Structure

```text
PHP-User-Registration/
│
├── connection1.php
├── task1.php
└── README.md
```

### `connection1.php`

Contains the database connection configuration.

### `task1.php`

Contains the registration form and PHP code responsible for processing and storing the submitted user information.

## 🗄️ Database

The project uses a MySQL table called:

```text
new_users2
```

The table contains the following fields:

| Field      | Description            |
| ---------- | ---------------------- |
| `username` | Registered user's name |
| `email`    | User's email address   |
| `password` | Hashed user password   |

## 🚀 How to Run the Project

### 1. Install XAMPP

Install XAMPP and start:

* **Apache**
* **MySQL**

### 2. Create the Database

Open **phpMyAdmin** and create your database.

Then create the `new_users2` table with fields for:

```text
username
email
password
```

### 3. Add the Project

Place the project inside the XAMPP `htdocs` directory:

```text
C:\xampp\htdocs\PHP-User-Registration
```

### 4. Configure the Database

Update `connection1.php` with your local MySQL database credentials.

### 5. Open the Application

In your browser, visit:

```text
http://localhost/PHP-User-Registration/task1.php
```

### 6. Test Registration

Enter a name, email, and password and submit the form.

The application should display:

```text
New record created successfully
```

and the user's information should appear in the database.

## 🧪 Testing

The following scenarios can be tested:

* Submit a valid name, email, and password
* Submit the form with an empty field
* Verify that the password is stored as a hash
* Verify that the user is inserted into MySQL
* Test different email addresses
* Test duplicate email addresses if the database has a unique constraint

## 🎯 Learning Outcomes

This project helped develop practical knowledge of:

* PHP form processing
* HTTP POST requests
* MySQL database connections
* SQL `INSERT` statements
* Prepared statements
* Password hashing
* HTML forms
* Server-side programming
* Basic web application security

## 👨‍💻 Author

**Thokozani Ngwabe**

GitHub: **@thokozani828**

---

⭐ This project is part of my software development learning journey, demonstrating my progression in PHP, databases, and secure web development.
