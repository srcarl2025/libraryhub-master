<p align="center">
  <img src="https://cdn-icons-png.flaticon.com/512/2991/2991148.png" width="200" alt="LibraryHub Logo">
</p>

<p align="center">
  <a href="#"><img src="https://img.shields.io/badge/Build-Stable-brightgreen" alt="Build Status"></a>
  <a href="#"><img src="https://img.shields.io/badge/Version-1.0-blue" alt="Version"></a>
  <a href="#"><img src="https://img.shields.io/badge/License-Educational-lightgrey" alt="License"></a>
</p>

# 📚 LibraryHub

## 🧾 Description / Overview
**LibraryHub** is a **web-based Library Management System** designed to simplify book tracking, borrowing, and inventory control.  
It helps librarians and students manage library resources efficiently through a user-friendly dashboard.  
The system was developed using **HTML, CSS, JavaScript, PHP, and MySQL**, integrating both **admin and user functionalities** for smooth library operations.

---

## 🎯 Objectives
- To automate the manual process of borrowing and returning books.  
- To provide a centralized system for managing library records and users.  
- To implement CRUD (Create, Read, Update, Delete) functionalities for books and members.  
- To enhance the efficiency and transparency of library operations.  
- To apply web development skills using PHP and MySQL.

---

## ⚙️ Features / Functionality
- 🔐 **Login System** — Admin and User login with validation.  
- 📘 **Book Management** — Add, edit, delete, and view available books.  
- 👩‍🎓 **User Management** — Manage student accounts and borrowing history.  
- 📊 **Dashboard Overview** — Displays total books, borrowers, and active transactions.  
- 🔎 **Search and Filter** — Quickly find books or users by title, ID, or category.  
- 💾 **Database Integration** — Secure data handling with MySQL and PHP backend.  

---

## 🛠️ Installation Instructions
1. Install [XAMPP](https://www.apachefriends.org/index.html) on your computer.  
2. Copy the project folder named `libraryhub` into your **htdocs** directory.  
3. Open **phpMyAdmin** and create a new database named `libraryhub_db`.  
4. Import the included `.sql` file into your database.  
5. Open your browser and run:
6. Log in using the provided credentials to access the dashboard.

---

## 💻 Usage
1. **Admin:**  
- Log in and manage all books and users.  
- Monitor borrowing activities.  
- Update or delete existing records.  
2. **User:**  
- View available books.  
- Borrow and return books.  
- Check transaction history.

---

## 🖼️ Screenshots or Code Snippets
### 📸 Dashboard Example
![Dashboard Screenshot](assets/dashboard.png)

### 💻 Sample Code
```php
<?php
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 $bookTitle = $_POST['title'];
 $author = $_POST['author'];
 $category = $_POST['category'];

 $sql = "INSERT INTO books (title, author, category) VALUES ('$bookTitle', '$author', '$category')";
 mysqli_query($conn, $sql);
 echo "Book added successfully!";
}
?>

## 🤝 Contributing

Contributions and ideas to improve the system are welcome!  
If you’d like to help improve functionality or optimize performance, feel free to fork this repository and submit a pull request.

---

## 🔐 Security

If you discover a bug or security issue, please report it through the issues tab so it can be fixed in upcoming updates.

---

## 🪪 License

This project is open-source and available under the [MIT License](https://opensource.org/licenses/MIT).

   
