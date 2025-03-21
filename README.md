# Laravel User Management System

## Giới thiệu
Dự án này là một hệ thống quản lý người dùng được xây dựng bằng Laravel. Hệ thống cho phép người dùng đăng ký, đăng nhập và quản lý thông tin cá nhân.

---

## Yêu cầu hệ thống
- **PHP** >= 8.2
- **Composer** >= 2.8
- **MySQL** 
- **Node.js** >= 20.17.0 (nếu có frontend dùng React/Vue)
- **Laravel** >= 9.52.20


---

## Cài đặt dự án
### 1. Clone repository
```bash
git clone https://github.com/txtit/BE

```

### 2. Cài đặt Laravel
```bash
composer install
```

### 3. Tạo file môi trường
```bash
cp .env.example .env
```
Cấu hình `.env` theo thông tin database của bạn:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=management_user
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Tạo key ứng dụng
```bash
php artisan key:generate
```

### 5. Chạy migrations và seed database (tùy chọn)
```bash
php artisan migrate --seed
```

### 6. Chạy server Laravel
```bash
php artisan serve
```
Ứng dụng sẽ chạy tại `http://127.0.0.1:8000`

---

## Tài khoản test
- **Admin**
  - Email: `admin@example.com`
  - Password: `admin123`
- **User**
  - Email: `thao16068@gmail.com`
  - Password: `123456`

---

## Triển khai (Deployment)
1. Tạo build production
```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
```
2. Chạy lệnh queue worker (nếu có)
```bash
php artisan queue:work
```

---

## API Endpoints
| Method | Endpoint           | Mô tả                 |
|--------|-------------------|-----------------------|
| POST   | /api/login        | Đăng nhập             |
| POST   | /api/register     | Đăng ký               |
| GET    | /api/user         | Lấy thông tin người dùng |
| PUT    | /api/user/update  | Cập nhật thông tin    |

---

## Ghi chú
- Để bảo mật, đừng quên cập nhật `.env` khi deploy.
- Luôn kiểm tra log bằng `storage/logs/laravel.log` nếu gặp lỗi.

---

## Liên hệ
📧 Email: thao16068@gmail.com

