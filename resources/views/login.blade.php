<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เข้าสู่ระบบ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f6f5f3; /* Light background color */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Full viewport height */
            margin: 0;
        }
        .login-container {
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px; /* Set max width for the form */
        }
        .login-btn {
            background-color: #4A90E2; /* Button color */
            border: none;
            color: white;
            width: 100%;
        }
        .login-btn:hover {
            background-color: #357ABD; /* Darker shade for hover effect */
        }
        .form-label {
            font-weight: bold; /* Make labels bold */
        }
        .register-link {
            text-align: center;
            margin-top: 20px;
        }
        .register-link a {
            color: #4A90E2; /* Link color */
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h2 class="text-center mb-4">เข้าสู่ระบบ</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">อีเมล</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">รหัสผ่าน</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                <label class="form-check-label" for="remember">จดจำฉัน</label>
            </div>
            <button type="submit" class="btn login-btn">เข้าสู่ระบบ</button>
        </form>
        <div class="register-link">
            <p>ยังไม่มีบัญชีใช่ไหม? <a href="{{ route('register') }}">สร้างบัญชีผู้ใช้</a></p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
