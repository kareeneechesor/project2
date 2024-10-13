<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f6f5f3;
        }

        .container {
            display: flex;
            width: 60%;
            max-width: 900px;
            background-color: #FDF5E6;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        .left {
            flex: 1;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .left h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .left input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ffe6c7;
            border-radius: 5px;
        }

        .left button {
            padding: 10px;
            background-color: #804f16;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .left button:hover {
            background-color: #ca9d69;
        }

        .left a {
            color: #966627;
            text-decoration: none;
            margin-top: 10px;
            display: inline-block;
        }

        .right {
            flex: 1;
            background-color: #FFEBCD;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .right img {
            width: 100%;
            height: 100%; /* ปรับให้สูงเต็มพื้นที่ของ div */
            object-fit: cover; /* ครอบตัดรูปภาพให้พอดีกับ div */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="left">
            <h2>ลงชื่อเข้าใช้งาน</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <input type="text" name="email" placeholder="User Name" required autofocus>
                <input type="password" name="password" placeholder="User Password" required>
                <button type="submit"></button>
            </form>
            <a href="{{ route('register') }}">ยังไม่ได้เป็นสมาชิก? ลงทะเบียน</a>
        </div>
        <div class="right">
            <img src="{{ asset('forms/img/aa.jpg') }}" alt="Login Image"> <!-- เปลี่ยนเส้นทางให้ตรงกับไฟล์รูปภาพที่คุณมี -->
        </div>
    </div>
</body>
</html>
