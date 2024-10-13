<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ประวัติการจอง</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        .header {
            background-color: #6f42c1;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 5px 5px 0 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>ประวัติการจอง</h2>
        </div>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @foreach ($bookings as $booking)
        <div class="card mt-3">
            <div class="card-body">
                <h5>ชื่อ: {{ $booking->name }}</h5>
                <p>เบอร์โทร: {{ $booking->phone }}</p>
                <p>วันที่: {{ \Carbon\Carbon::parse($booking->booking_date)->format('l, d F Y') }}</p>
                <p>เวลา: {{ $booking->booking_time }}</p>
                <p>บริการ: {{ $booking->service }}</p>
                <p>ราคา: {{ number_format($booking->price, 2) }} บาท</p>
                <p>รายละเอียด: {{ $booking->details }}</p>
                <a href="#" class="btn btn-danger">ยกเลิกคิว</a>
            </div>
        </div>
        @endforeach
    </div>
</body>
</html>
