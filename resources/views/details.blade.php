<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>นวดจับเส้น</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
        }

        .container {
            max-width: 1000px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .image {
            width: 100%;
            max-height: 400px; /* กำหนดความสูงสูงสุด */
            object-fit: cover; /* ครอบคลุมพื้นที่โดยไม่บิดเบือนสัดส่วนของภาพ */
            border-radius: 10px; /* เพิ่มมุมโค้งให้กับรูปภาพ */
        }

        .content {
            padding: 20px;
            text-align: center;
        }

        .title {
            font-size: 32px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #333;
        }

        .duration {
            font-size: 18px;
            color: #666;
            margin-bottom: 20px;
        }

        .description {
            font-size: 16px;
            line-height: 1.5;
            margin-bottom: 30px;
            color: #333;
        }

        .buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .button {
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            color: #fff;
            font-size: 16px;
        }

        .button-primary {
            background-color: #f78c6c;
            border: none;
        }

        .button-secondary {
            background-color: #fff;
            border: 1px solid #333;
            color: #333;
        }
    </style>
</head>
<body>

<div class="container">
    <img src="forms/img/สปามือเท้า.jpg" alt="นวดจับเส้น" class="image">
    <div class="content">
        <div class="title">นวดจับเส้น</div>
        <div class="duration">60 / 90 / 120 นาที</div>
        <div class="description">
            นวดจับเส้น คือการนวดตามเส้นพลังงานตามจุดปวดของแต่ละบุคคล เพื่อบำบัดและบรรเทาอาการปวดเมื่อยข้อ ต่อและกล้ามเนื้อ พร้อมทั้งสร้างความยืดหยุ่นและช่วยรักษาปมกล้ามเนื้อในระยะยาว
        </div>
        <div class="buttons">
            <!-- ส่งข้อมูลบริการผ่าน URL -->
            <a href="/booking?service=นวดจับเส้น&duration=60%20/%2090%20/%20120%20นาที" class="button button-primary">จองบริการ</a>
        </div>
    </div>
</div>

</body>
</html>
