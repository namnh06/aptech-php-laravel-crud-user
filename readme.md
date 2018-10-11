# APTECH PHP LARAVEL CRUD
1. Truy cập vào C:/xampp/htdocs, bật git bash và clone repository bằng câu lệnh : `git clone https://github.com/namnh06/aptech-php-laravel-crud.git`
2. Khởi động XAMPP.
3. Truy cập vào repository aptech-php-laravel-crud và sử dụng câu lệnh : `composer install` để cài đặt.
4. Tạo file .env và copy dữ liệu file .env.example sang, chỉnh sửa kết nối đến database.
5. Tạo key cho ứng dụng bằng câu lệnh : `php artisan key:generate`.
6. Chạy `php artisan migrate` để tự động tạo bảng users trong database đã thiết lập.
7. Chạy `php artisan db:seed --class=UsersTableSeeder` để seed dữ liệu vào bảng users.
8. Truy cập vào đường dẫn localhost/aptech-php-laravel-crud để tận hưởng thành quả :).
