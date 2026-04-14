# Simple Contact Management System

## Project Overview
This is a simple web-based Contact Management System built using PHP and MySQL.

It allows users to send messages through a contact form, and an admin can manage those messages from a dashboard.

## Features

### Public Side
- Contact Form
- Submit Name, Email, Phone, and Message
### Admin Dashboard
- View all messages
- Edit messages
- Delete messages (with confirmation)
## Technologies Used
- PHP (Core PHP)
- MySQL (Database)
- HTML & CSS
- XAMPP (Local Server)
## Project Structure
contact_system/
│
├── config/
│ └── db.php
│
├── includes/
│ ├── header.php
│ └── footer.php
│
├── assets/
│ └── css/
│ └── style.css
│
├── admin/
│ ├── dashboard.php
│ ├── edit.php
│ └── delete.php
│
├── index.php
├── submit.php