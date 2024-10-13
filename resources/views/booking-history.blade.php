<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ประวัติการจอง</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=PT+Serif:wght@400;700&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: #f7f8fa;
            font-family: 'Open Sans', sans-serif;
        }

        .booking-table {
            margin-top: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
    </style>
</head>
<body>

    <!-- Navbar Start -->
    <div class="container-fluid bg-light fixed-top">
        <div class="container px-0">
            <nav class="navbar navbar-light navbar-expand-xl">
                <a href="/" class="navbar-brand">
                    <h1 class="display-4" style="color: #DAA520;">The Massage</h1>
                </a>
                <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars text-primary"></span>
                </button>
                <div class="collapse navbar-collapse bg-light py-3" id="navbarCollapse">
                    <div class="navbar-nav mx-auto border-top">
                        <a href="/" class="nav-item nav-link">หน้าหลัก</a>
                        <a href="/form" class="nav-item nav-link">ติดต่อเรา</a>
                        <a href="/service" class="nav-item nav-link">บริการ</a>
                        <a href="/show-promotions" class="nav-item nav-link">โปรโมชั่น</a>
                        <a href="/package" class="nav-item nav-link">แพคเกจ</a>
                        <a href="/booking" class="nav-item nav-link active">ประวัติการจอง</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <div class="container" style="padding-top: 100px;">
        <h2 class="text-center">ประวัติการจองของคุณ</h2>

        <div class="booking-table">
            @if($bookings->isEmpty())
                <p class="text-center">ไม่มีประวัติการจอง</p>
            @else
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>ชื่อ</th>
                            <th>เบอร์โทร</th>
                            <th>วันที่จอง</th>
                            <th>เวลา</th>
                            <th>บริการ</th>
                            <th>ราคา</th>
                            <th>พนักงาน</th>
                            <th>สถานะ</th>
                            <th>รายละเอียด</th>
                            <th>ดำเนินการ</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($bookings as $index => $booking)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $booking->name }}</td>
                                <td>{{ $booking->phone }}</td>
                                <td>{{ \Carbon\Carbon::parse($booking->booking_date)->format('d/m/Y') }}</td>
                                <td>{{ $booking->booking_time }}</td>
                                <td>{{ $booking->service }}</td>
                                <td>{{ number_format($booking->price, 2) }} บาท</td>
                                <td>{{ $booking->employee }}</td>
                                <td>
                                    <span class="badge {{ $booking->status === 'confirmed' ? 'bg-success' : ($booking->status === 'canceled' ? 'bg-danger' : 'bg-warning') }}">
                                        {{ ucfirst($booking->status) }}
                                    </span>
                                </td>
                                <td>
                                    <a href="{{ route('bookings.edit', $booking->id) }}" class="btn btn-primary btn-sm">แก้ไข</a>
                                    <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">ลบ</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
