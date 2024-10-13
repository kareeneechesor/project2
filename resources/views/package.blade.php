<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Massage </title>

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=PT+Serif:wght@400;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('forms/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('forms/css/style.css') }}" rel="stylesheet">

    <style>
        body {
            padding-top: 80px;
        }
        .navbar {
            background-color: #ffffff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .navbar-brand h1 {
            font-size: 2rem;
            color: #CD853F;
            margin: 0;
            font-weight: 700;
        }
        .navbar-nav .nav-link {
            font-size: 1rem;
            color: #555555;
            padding: 10px 15px;
        }
        .navbar-nav .nav-link:hover, .navbar-nav .nav-link.active {
            color: #CD853F;
        }
        .btn-primary {
            background-color: #CD853F;
            border-color: #CD853F;
        }
        .btn-primary:hover {
            background-color: #b56c38;
        }
        .services-img img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 8px;
        }
        .services-item {
            background-color: #f8f9fa;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            transition: all 0.3s ease;
        }
        .services-item:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

<div class="container-fluid bg-light fixed-top">
    <div class="container px-0">
        <nav class="navbar navbar-expand-xl">
            <a href="index.html" class="navbar-brand">
                <h1 class="display-4">The Massage</h1>
            </a>
            <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a href="/" class="nav-item nav-link active">หน้าหลัก</a>
                    <a href="/form" class="nav-item nav-link">ติดต่อเรา</a>
                    <a href="/service" class="nav-item nav-link">บริการ</a>
                    <a href="/show-promotions" class="nav-item nav-link">โปรโมชั่น</a>
                    <a href="/package" class="nav-item nav-link">แพคเกจ</a>
                    <a href="contact.html" class="nav-item nav-link">สมัครสมาชิก</a>
                </div>
                <a href="/booking" class="btn btn-primary rounded-pill py-3 px-4 ms-4">จอง</a>
            </div>
        </nav>
    </div>
</div>

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

<div class="container-fluid services py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 800px;">
            <p class="fs-4 text-uppercase text-center text-primary">บริการของเรา</p>
            <div class="subheading-container">
                <a href="/service" class="subheading active">บริการ</a>
                <a href="/package" class="subheading">แพ็คเกจ</a>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="services-item bg-light border-4 border-end border-primary rounded p-4">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <div class="services-content text-end">
                                <h3>แพคเกจผ่อนคลาย</h3>
                                <p style="font-size: 15px;">499บ. ใช้ได้ 3 ครั้ง</p>
                                <p style="font-size: 12px;">แวะมาผ่อนคลายฉ่ำๆ รับตรุษจีนกันได้นะคะ</p>
                                <a href="/bookingpac?package=แพคเกจผ่อนคลาย&price=499&sessions=3&image=/forms/img/p2.jpg" class="btn btn-primary rounded-pill py-2 px-4">เลือกบริการ</a>                            </div>
                        </div>
                        <div class="col-4">
                            <div class="services-img d-flex align-items-center justify-content-center rounded">
                                <img src="forms/img/p2.jpg" class="img-fluid rounded" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="services-item bg-light border-4 border-start border-primary rounded p-4">
                    <div class="row align-items-center">
                        <div class="col-4">
                            <div class="services-img d-flex align-items-center justify-content-center rounded">
                                <img src="forms/img/p1.jpg" class="img-fluid rounded" alt="">
                            </div>
                        </div>
                        <div class="col-8">
                            <h5>แพคเกจผิวดี</h5>
                            <p style="font-size: 15px;">799บ. ใช้ได้ 4 ครั้ง</p>
                            <p style="font-size: 10px;">ได้ทั้งผิวหน้า ทั้งผิวกาย</p>
                            <a href="/bookingpac?package=แพคเกจผิวดี&price=799&image=/forms/img/p1.jpg" class="btn btn-primary rounded-pill py-2 px-4">เลือกบริการ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-12">
    <div class="services-btn text-center">
        <a href="/" class="btn btn-primary btn-primary-outline-0 rounded-pill py-3 px-5">กลับสู่หน้าหลัก</a>
    </div>
</div>

<a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
