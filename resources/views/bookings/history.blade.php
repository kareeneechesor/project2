<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Massage</title>

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=PT+Serif:wght@400;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('forms/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('forms/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('forms/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('forms/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('forms/css/style.css') }}" rel="stylesheet">

    <style>
        /* Custom styles for the navigation menu */
        .navbar {
            background: url('{{ asset('path/to/your/image.jpg') }}') no-repeat center center; /* Update with the correct path */
            background-size: cover;
            padding: 15px 0;
        }

        .navbar-brand {
            font-size: 2rem;
            color: #DAA520; /* Gold color for the brand */
        }

        .nav-link {
            color: #fff; /* Change text color to white */
            margin: 0 15px;
            font-weight: 600;
        }

        .nav-link:hover {
            color: #DAA520; /* Gold color on hover */
        }

        .navbar-toggler {
            border: none; /* Remove default border */
        }

        .navbar-toggler-icon {
            background-color: #DAA520; /* Gold color for toggle button */
        }
    </style>
</head>
<body>

<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="/">The Massage</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">หน้าหลัก</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">ติดต่อเรา</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/service">บริการ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/show-promotions">โปรโมชั่น</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/package">แพคเกจ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/history">ประวัติการจอง</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Navbar End -->

<div class="container mt-4">
    <h2 class="text-center mb-4">ข้อมูลการจองคิว</h2>

    @if($bookings->isEmpty())
        <div class="alert alert-warning text-center">ไม่มีการจองใด ๆ</div>
    @else
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h5>ประวัติการจอง</h5>
            </div>
            <div class="card-body">
                @foreach($bookings as $booking)
                    <div class="border rounded p-3 mb-3">
                        <h5 class="text-primary">ข้อมูลการจอง</h5>
                        <p><strong>ชื่อ:</strong> {{ $booking->name }}</p>
                        <p><strong>เบอร์โทร:</strong> {{ $booking->phone }}</p>
                        <p><strong>วันที่:</strong> {{ \Carbon\Carbon::parse($booking->booking_date)->format('Y-m-d') }}</p>
                        <p><strong>เวลา:</strong> {{ $booking->booking_time }}</p>
                        <p><strong>รายละเอียดเพิ่มเติม:</strong> {{ $booking->details ?? '-' }}</p>
                        <p><strong>บริการ:</strong> {{ $booking->service }}</p>
                        <p><strong>ราคา:</strong> {{ $booking->price }}</p>
                        <p><strong>พนักงาน:</strong> {{ $booking->employee_name ?? 'ไม่ระบุ' }}</p>
                        <p><strong>สถานะ:</strong> {{ $booking->status }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
