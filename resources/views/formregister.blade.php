<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Styles -->
    <style>
        body {
            background-color: #f7f8fa;
            font-family: 'Open Sans', sans-serif;
        }
        .register-container {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        .social-login {
            margin-bottom: 20px;
        }
        .social-login button {
            width: 100%;
            margin-bottom: 10px;
        }
        .form-label {
            font-weight: 600;
        }
        .form-control {
            margin-bottom: 15px;
        }
        .btn-register {
            background-color: #ff7f47;
            border-color: #ff7f47;
            color: white;
            width: 100%;
            padding: 10px;
            font-size: 1rem;
        }
        .btn-register:hover {
            background-color: #e76e3a;
            border-color: #e76e3a;
        }
        .form-text {
            font-size: 0.85rem;
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="register-container">
        <h2 class="text-center">สร้างบัญชีใหม่</h2>
        <p class="text-center">มีบัญชีอยู่แล้ว? <a href="#">เข้าสู่ระบบ</a></p>
        
        <!-- Social login buttons -->
        <div class="social-login">
            <button class="btn btn-outline-primary">
                <i class="fab fa-facebook"></i> ลงทะเบียนด้วย Facebook
            </button>
            <button class="btn btn-outline-danger">
                <i class="fab fa-google"></i> ลงทะเบียนด้วย Google
            </button>
        </div>

        <div class="text-center">หรือ ลงทะเบียนด้วยอีเมล</div>

        <!-- Registration form -->
        <form>
            <!-- Name and Surname -->
            <div class="row">
                <div class="col-md-6">
                    <label for="firstName" class="form-label">ชื่อ</label>
                    <input type="text" class="form-control" id="firstName" placeholder="ชื่อ">
                </div>
                <div class="col-md-6">
                    <label for="lastName" class="form-label">นามสกุล</label>
                    <input type="text" class="form-control" id="lastName" placeholder="นามสกุล">
                </div>
            </div>

            <!-- Country code and Phone number -->
            <div class="row">
                <div class="col-md-4">
                    <label for="countryCode" class="form-label">รหัสประเทศ</label>
                    <select class="form-select" id="countryCode">
                        <option value="TH">TH (+66)</option>
                        <!-- Add more country codes as needed -->
                    </select>
                </div>
                <div class="col-md-8">
                    <label for="phoneNumber" class="form-label">หมายเลขโทรศัพท์</label>
                    <input type="text" class="form-control" id="phoneNumber" placeholder="000 000 0000">
                </div>
            </div>

            <!-- Gender -->
            <label class="form-label">เพศ</label>
            <div class="mb-3">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="genderFemale" value="female">
                    <label class="form-check-label" for="genderFemale">หญิง</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="genderMale" value="male">
                    <label class="form-check-label" for="genderMale">ชาย</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="genderOther" value="other">
                    <label class="form-check-label" for="genderOther">อื่นๆ</label>
                </div>
            </div>

            <!-- Email -->
            <label for="email" class="form-label">อีเมล</label>
            <input type="email" class="form-control" id="email" placeholder="อีเมล">

            <!-- Password -->
            <label for="password" class="form-label">รหัสผ่าน</label>
            <input type="password" class="form-control" id="password" placeholder="กรุณาใส่รหัสผ่าน">

            <!-- Submit button -->
            <button type="submit" class="btn btn-register">ลงทะเบียน</button>

            <!-- Disclaimer text -->
            <p class="form-text">เมื่อคลิก "ลงทะเบียน" แสดงว่าคุณยืนยันตาม <a href="#">ข้อกำหนดในการใช้งาน</a> และ <a href="#">นโยบายความเป็นส่วนตัว</a></p>
        </form>
    </div>
</div>

<!-- FontAwesome Icons -->
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
