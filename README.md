Visitor's Management System
The Visitor's Management System is a simple web-based application that allows organizations to record, manage, and view visitor information. It uses HTML, CSS, JavaScript for the front end and PHP with MySQL for the back end.
📂 Project Structure
Avnl1.jpg - Sample image 1 avnl2.jpg - Sample image 2 create_table.sql - SQL script to create database table(s) details.php - Displays detailed information about a visitor index.html - Main form for entering visitor details save_visitor.php - Backend script to save visitor data to the database script.js - JavaScript for form functionality styles1.css - CSS styling for the UI view_all.php - View all visitor records 
⚙️ Prerequisites
• XAMPP / WAMP / MAMP installed (or any PHP + MySQL server environment) • PHP 7.4+ installed • MySQL running • A web browser (Chrome, Firefox, etc.)
🛠️ Setup Instructions
1. Download or Clone the Repository:    git clone https://github.com/Raghavendra1032/VISITOR-S-MANAGEMENT-SYSTEM.git  2. Move the Project to Server Directory:    - For XAMPP: htdocs/visitor-management    - For WAMP: www/visitor-management  3. Create the Database:    - Open phpMyAdmin (http://localhost/phpmyadmin)    - Create a database: visitor_db    - Import create_table.sql  4. Update Database Connection:    - In save_visitor.php and view_all.php, set:      $conn = new mysqli("localhost", "root", "", "visitor_db");  5. Run the Application:    - Start Apache & MySQL    - Visit: http://localhost/visitor-management/index.html
📌 Features
• Add visitor details through a web form • Store records in MySQL database • View all visitors • View detailed information about each visitor • Simple and user-friendly interface
💡 Author
Developed by Raghavendra1032 
