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
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
            border-radius: 10px;
            overflow: hidden;
            height: 100%;
            margin-bottom: 20px;
        }
        .promotion-card:hover {
            transform: translateY(-5px);
        }
        .promotion-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
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
        .promotion-content {
            padding: 20px;
        }
        /* Ensure the body has padding to avoid overlap with the fixed navbar */
        body {
            padding-top: 70px; /* Adjust based on the navbar height */
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
                        <a href="#" class="nav-item nav-link">เกี่ยวกับ</a>
                        <a href="/service" class="nav-item nav-link">บริการ</a>
                        <a href="/promotion" class="nav-item nav-link">โปรโมชั่น</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">แพคเกจ</a>
                            <div class="dropdown-menu m-0 bg-secondary rounded-0">
                                <a href="team.html" class="dropdown-item">Team</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                <a href="gallery.html" class="dropdown-item">Gallery</a>
                                <a href="appointment.html" class="dropdown-item">Appointment</a>
                                <a href="404.html" class="dropdown-item">404 page</a>
                            </div>
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

  <!-- Image Below Navbar -->
<div class="container-fluid promotion-section">
    <!-- Add the uploaded image here -->
    <img src="forms/img/pg7.jpg" alt="Promotion Banner" style="width: 40%; height: auto; object-fit: cover; margin-bottom: 20px;">
</div>



    <!-- Promotions Section Start -->
    <div class="container promotion-section">
        <h3 class="promotion-title">โปรโมชั่นสุดคุ้มรีบๆมาใช้กันเยอะๆ</h3>
        
    
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card promotion-card">
                    <img src="forms/img/pg7.jpg" alt="Promo 1" class="promotion-image">
                    <div class="card-body promotion-content">
                        <h5 class="card-title">โปร1 (2 ชม.)</h5>
                        <p class="card-text">นวดตัว ลดเหลือเพียง <strike>500</strike> 449 บ.</p>
                        <a href="/pro" class="promotion-btn mt-auto">จองเลย</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card promotion-card">
                    <img src="forms/img/pg6.jpg" alt="Promo 2" class="promotion-image">
                    <div class="card-body promotion-content">
                        <h5 class="card-title">โปร2 สุดคุ้ม </h5>
                        <p class="card-text">สปาหน้า 40 นาที + สปาเท้าแตก 60 นาที ลดเหลือเพียง <strike>590</strike> 490 บ.</p>
                        <a href="/pro" class="promotion-btn mt-auto">จองเลย</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card promotion-card">
                    <img src="forms/img/pg3.jpg" alt="Promo 3" class="promotion-image">
                    <div class="card-body promotion-content">
                        <h5 class="card-title">โปร3 สุดคุ้ม </h5>
                        <p class="card-text">สปาขัดผิว 60 นาที + สปาหน้า 40 นาที  ลดเหลือเพียง <strike>790</strike> 690 บ.</p>
                        <a href="/pro" class="promotion-btn mt-auto">จองเลย</a>
                    </div>
                </div>
            </div>
    <!-- Promotions Section End -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
