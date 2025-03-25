Hệ Thống Quản Lý Mỹ Phẩm - CT299
1. Giới thiệu
Đây là hệ thống web quản lý sản phẩm mỹ phẩm, được phát triển bằng PHP và MySQL. Giao diện người dùng sử dụng template Ogani, còn trang quản trị dựa trên SB Admin 2.

2. Công nghệ sử dụng
Backend: PHP

Frontend: HTML, CSS, JavaScript (Bootstrap, Ogani)

Database: MySQL

Quản trị: StartBootstrap SB Admin 2

Server Local: XAMPP

3. Yêu cầu hệ thống
Hệ điều hành: Windows, macOS hoặc Linux

Công cụ cần thiết:

Git để tải project từ GitHub

XAMPP để chạy Apache và MySQL

Trình duyệt web: Chrome, Firefox, Edge

4. Hướng dẫn cài đặt
4.1. Tải Project
Cách 1: Clone từ GitHub

sh
Copy
Edit
git clone https://github.com/PinkPony/CT299_Nhom2.git
Cách 2: Tải trực tiếp

Truy cập GitHub Repository

Nhấn Code → Download ZIP

Giải nén và di chuyển thư mục CT299_Nhom2 vào thư mục XAMPP:

makefile
Copy
Edit
C:\xampp\htdocs\CT299
4.2. Cấu hình MySQL
Mở XAMPP Control Panel, nhấn Start cho Apache và MySQL

Truy cập phpMyAdmin:

arduino
Copy
Edit
http://localhost/phpmyadmin/
Tạo database mới (VD: ct299_db)

Import file database.sql từ thư mục project

4.3. Cấu hình kết nối database
Mở file config.php và chỉnh sửa:

php
Copy
Edit
$servername = "localhost";
$username = "root";
$password = "";
$database = "ct299_db";
Lưu lại sau khi chỉnh sửa.

5. Chạy ứng dụng
Truy cập website:

arduino
Copy
Edit
http://localhost/CT299/
Truy cập trang quản trị:

bash
Copy
Edit
http://localhost/CT299/admin/
Tài khoản mặc định (nếu có sẵn trong database):

makefile
Copy
Edit
Username: admin
Password: admin123
6. Liên hệ
Mọi thắc mắc hoặc góp ý, vui lòng liên hệ qua GitHub Issues.
