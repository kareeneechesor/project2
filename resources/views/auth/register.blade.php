<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
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
            width: 90%;
            max-width: 900px;
            background-color: white;
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
            text-align: center;
        }

        .left input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #cccccc;
            border-radius: 5px;
        }

        .left button {
            padding: 10px;
            background-color: #93640c;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .left button:hover {
            background-color: #725932;
        }

        .left a {
            color: #4f380c;
            text-decoration: none;
            margin-top: 10px;
            display: inline-block;
            text-align: center;
        }

        .right {
            flex: 1;
            background-color: #fbe0ae;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .right img {
            width: 80%;
            height: auto;
            border-radius: 0 8px 8px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="left">
            <h2>ลงทะเบียน</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <input type="text" name="first_name" placeholder="ชื่อ" required>
                <input type="text" name="last_name" placeholder="นามสกุล" required>
                <input type="email" name="email" placeholder="อีเมล" required>
                <input type="password" name="password" placeholder="รหัสผ่าน" required>
                <input type="password" name="password_confirmation" placeholder="ยืนยันรหัสผ่าน" required>
                <button type="submit">ลงทะเบียน</button>
            </form>
            <a href="{{ route('login') }}">มีบัญชีแล้ว? เข้าสู่ระบบ</a>
        </div>
        <div class="right">
            <img src="{{ asset('forms/img/p-1.jpg') }}" alt="Image Description"> 
        </div>
    </div>
</body>
</html>
