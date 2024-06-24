Nguyễn Anh Tới

PHP

1. Giới thiệu
   - PHP (Hypertext Preprocessor) là một ngôn ngữ lập trình phía server, chủ yếu được sử dụng để phát triển các ứng dụng web động.

2. Môi trường phát triển
   - Cài đặt XAMPP: XAMPP là một phần mềm tích hợp bao gồm Apache, MySQL, PHP và Perl.
   - Thiết lập Visual Studio Code hoặc một IDE khác như PHPStorm để viết mã PHP.

3. Lập trình hướng đối tượng (OOP) trong PHP
   - Khái niệm về lớp và đối tượng
     ```php
     class User {
         public $name;
         public function __construct($name) {
             $this->name = $name;
         }
         public function getName() {
             return $this->name;
         }
     }
     $user = new User("John Doe");
     echo $user->getName();
     ```
   - Tính kế thừa, đóng gói và đa hình

4. Xây dựng ứng dụng web hoàn chỉnh
   - Xây dựng trang đăng ký và đăng nhập
   - Sử dụng phiên làm việc (session) và cookie để quản lý người dùng
   - Tích hợp giao diện người dùng với HTML và CSS
   - Sử dụng JavaScript và AJAX để tăng tính tương tác

5. Bảo mật trong PHP
   - Ngăn chặn SQL Injection
   - Bảo mật form và dữ liệu người dùng
   - Xử lý và bảo vệ thông tin nhạy cảm

6. Triển khai ứng dụng PHP
    - Cấu hình và triển khai trên máy chủ web (Apache, Nginx)
    - Quản lý phiên bản mã nguồn với Git và GitHub
    - Triển khai ứng dụng lên các dịch vụ hosting hoặc cloud (AWS, Heroku)
  
Composer là một Dependency Management trong PHP, công cụ quản lý các thư viện mà project Php của bạn sử dụng. Một cách chính xác hơn Composer quản lý sự phụ thuộc các tài nguyên trong dự án. Nó cho phép khai báo các thư viện mà dự án của bạn sử dụng, composer sẽ tự động tải code của các thư viện. Nó tạo ra các file cần thiết vào project của bạn, và cập nhật các thư viện khi có phiên bản mới.

- Cài đặt composer https://getcomposer.org/Composer-Setup.exe
- Dùng câu lệnh composer require vlucas/phpdotenv để tải phpdotenv

