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
        .promotion-section {
            text-align: center;
            padding: 50px 0;
        }
        .promotion-title {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .promotion-subtitle {
            font-size: 1.2rem;
            color: #555;
            margin-bottom: 50px;
        }
        .promotion-card {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
            border-radius: 10px;
            overflow: hidden;
            height: 100%;
        }
        .promotion-card:hover {
            transform: translateY(-5px);
        }
        .promotion-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px 10px 0 0;
        }
        .promotion-btn {
            background-color: #f08080;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 20px;
            font-size: 1rem;
            margin-top: 10px;
            display: inline-block;
            text-decoration: none;
        }
        .promotion-btn:hover {
            background-color: #e68a8a;
        }
        /* Add padding to top of content to avoid overlap with fixed navbar */
        body {
            padding-top: 70px;
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
                        <a href="/" class="nav-item nav-link active">หน้าหลัก</a>
                        <a href="#" class="nav-item nav-link">ติดต่อเรา</a>
                        <a href="/service" class="nav-item nav-link">บริการ</a>
                        <a href="/show-promotions" class="nav-item nav-link">โปรโมชั่น</a>
                        <a href="/package" class="nav-link ">แพคเกจ</a>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">สมัครสมาชิก</a>
                    </div>
                    <div class="d-flex align-items-center flex-nowrap pt-xl-0">
                        <a href="/booking" class="btn btn-primary rounded-pill py-3 px-4 ms-4" style="background-color: #CD853F; border-color: #e2b68a;">จอง</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb py-5">
        <div class="container text-center py-5">
            <h3 class="text-white display-3 mb-4">Our Services</h3>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-white">Service Page</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Promotions Section Start -->
    <style>
    .promotion-card {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s;
        border-radius: 10px;
        overflow: hidden;
        height: 100%;
    }

    .card-body {
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        height: 100%;
    }

    .btn-primary {
        background-color: #ff69b4;
        border: none;
        padding: 10px;
        text-align: center;
        border-radius: 20px;
        font-size: 1rem;
        margin-top: auto;
    }
</style>

<div class="container promotion-section">
    <h1 class="promotion-title">โปรโมชั่น</h1>
    <p class="promotion-subtitle">
        ดูโปรโมชั่นและดีลพิเศษจาก The Massage ได้ก่อนใคร ผ่อนคลายไปกับบริการนวดสปา
    </p>

    @if($promotions->isEmpty())
        <p>ไม่มีโปรโมชั่นในขณะนี้</p>
    @else
        <div class="container mt-4">
            <div class="row">
                @foreach ($promotions as $promotion)
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card promotion-card">
                            @if($promotion->image)
                                <img src="{{ Storage::url($promotion->image) }}" class="promotion-image" alt="{{ $promotion->name }}">
                            @else
                                <img src="/path/to/default-image.jpg" class="promotion-image" alt="No image available">
                            @endif
                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $promotion->name }}</h5>
                                <p class="card-text">{{ $promotion->details }}</p>
                                <p class="card-text" style="display: inline-block;">วันที่เริ่ม: {{ $promotion->start_date }}</p>
                                <p class="card-text" style="display: inline-block; margin-left: 10px;">วันที่สิ้นสุด: {{ $promotion->end_date }}</p>

                                @if(now()->lessThanOrEqualTo($promotion->expiry_date))
                                    <!-- หากยังไม่หมดเขต แสดงปุ่มจอง -->
                                    <a href="/bookingp?image={{ Storage::url($promotion->image) }}&title={{ $promotion->name }}" 
                                        class="btn btn-primary" 
                                        style="display: block; width: 100%; margin-top: 20px; padding: 10px;">เลือก</a>
                                @else
                                    <!-- หากหมดเขตแล้ว แสดงปุ่มที่ปิดการใช้งาน (disabled) และแสดงป๊อปอัพ -->
                                    <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#expiredModal">โปรโมชั่นหมดเวลาแล้ว</button>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
</div>

<!-- Modal Popup -->
<div class="modal fade" id="expiredModal" tabindex="-1" aria-labelledby="expiredModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="expiredModalLabel">แจ้งเตือน</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                โปรโมชั่นนี้หมดเวลาแล้ว ไม่สามารถจองได้
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
