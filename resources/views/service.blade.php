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

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('forms/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('forms/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('forms/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('forms/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('forms/css/style.css') }}" rel="stylesheet">
    <style>
        /* Adjust padding to ensure content isn't hidden under the navbar */
        body {
            padding-top: 80px; /* Adjust based on the height of your navbar */
        }

        .navbar {
            background-color: #ffffff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            transition: background-color 0.3s ease;
        }

        .navbar-brand h1 {
            font-size: 2rem;
            color: #CD853F; /* Your preferred color */
            margin: 0;
            font-weight: 700;
        }

        .navbar-toggler {
            border-color: #CD853F;
        }

        .navbar-toggler .fa-bars {
            color: #CD853F;
        }

        .navbar-nav .nav-link {
            font-size: 1rem;
            color: #555555;
            padding: 10px 15px;
            transition: color 0.3s ease;
        }

        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link.active {
            color: #CD853F; /* Your preferred color */
        }

        .navbar-nav .dropdown-menu {
            background-color: #f8f9fa;
            border-radius: 0;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .btn-primary {
            background-color: #CD853F;
            border-color: #CD853F;
        }

        .btn-primary:hover {
            background-color: #b56c38;
            border-color: #b56c38;
        }
    </style>
</head>

<body>

  <!-- Navbar start -->
<div class="container-fluid bg-light fixed-top">
    <div class="container px-0">
        <nav class="navbar navbar-expand-xl">
            <a href="/" class="navbar-brand">
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
                    <a href="#" class="nav-item nav-link">ประวัติการจอง</a> <!-- New Booking History Menu -->
                </div>
                <a href="/booking" class="btn btn-primary rounded-pill py-3 px-4 ms-4">จอง</a>
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

<!-- Services Start -->
<div class="container-fluid services py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 800px;">
            <p class="fs-4 text-uppercase text-center text-primary">บริการของเรา</p>

            <!-- Subheading for service categories -->
            <div class="subheading-container">
                <a href="/service" class="subheading active">บริการ</a>
                <a href="/package" class="subheading">แพ็คเกจ</a>
            </div>
        </div>
        <div class="container-fluid py-4">
            <div class="row justify-content-center g-4">
                @foreach($services as $service)
                <div class="col-lg-6 col-md-8 mb-4">
                    <div class="card h-100" style="border: 2px solid #FFDEAD; border-radius: 15px;"> <!-- ใช้สีขอบชมพู -->
                        <div class="row no-gutters align-items-center"> <!-- ปรับให้จัดแนวตรงกลาง -->
                            <div class="col-md-6"> <!-- ปรับขนาดรูปให้เป็น 50% ของการ์ด -->
                                @if($service->image)
                                    <img src="{{ asset('storage/' . $service->image) }}" class="card-img" alt="{{ $service->name }}" style="height: 100%; object-fit: cover;">
                                @else
                                    <img src="{{ asset('forms/img/default-placeholder.png') }}" class="card-img" alt="ไม่มีรูป" style="height: 100%; object-fit: cover;">
                                @endif
                            </div>
                            <div class="col-md-6"> <!-- ปรับเนื้อหาให้มีขนาด 50% -->
                                <div class="card-body text-center"> <!-- จัดให้อยู่ตรงกลาง -->
                                    <h5 class="card-title">{{ $service->name }}</h5>
                                    <p class="card-text">{{ $service->details }}</p>
                                    <p class="card-text"><strong>{{ $service->price }} บาท</strong></p>
                                    <p class="card-text"><small class="text-muted">{{ $service->duration }} ชั่วโมง</small></p>
                                    <a href="/booking?service={{ $service->name }}&price={{ $service->price }}&image={{ asset('storage/' . $service->image) }}" class="btn btn-primary rounded-pill">เลือกบริการ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        
        
            <div class="col-12">
                <div class="services-btn text-center">
                    <a href="/" class="btn btn-primary btn-primary-outline-0 rounded-pill py-3 px-5">กลับสู่หน้าหลัก</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('forms/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('forms/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('forms/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('forms/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('forms/lib/lightbox/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('forms/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('forms/js/main.js') }}"></script>
</body>

</html>