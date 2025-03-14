<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
</head>

<body>
    <h2>Đặt lại mật khẩu</h2>
    <form action="{{ url('/api/reset-password') }}" method="POST">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">

        <label>Email:</label>
        <input type="email" name="email" required>

        <label>Mật khẩu mới:</label>
        <input type="password" name="password" required>

        <label>Nhập lại mật khẩu:</label>
        <input type="password" name="password_confirmation" required>

        <button type="submit">Đặt lại mật khẩu</button>
    </form>
</body>

</html>
