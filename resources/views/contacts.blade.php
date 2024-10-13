<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sparlex - Spa Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=PT+Serif:wght@400;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('forms/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{ asset('forms/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">
    <link href="{{ asset('forms/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('forms/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('forms/css/style.css')}}" rel="stylesheet">
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar start -->
    <div class="container-fluid bg-light">
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
                        <a href="/contacts" class="nav-item nav-link">ติดต่อเรา</a>
                        <a href="/service" class="nav-item nav-link">บริการ</a>
                        <a href="/show-promotions" class="nav-item nav-link">โปรโมชั่น</a>
                        <a href="/package" class="nav-link">แพคเกจ</a>
                        <a href="/history" class="nav-item nav-link">ประวัติการจอง</a> <!-- New menu item for Booking History -->
                    </div>
                    <div class="d-flex align-items-center flex-nowrap pt-xl-0 ms-auto">
                        <a href="/login" class="btn btn-light rounded-circle me-2" style="background-color: #CD853F; border-color: #e2b68a; width: 40px; height: 40px; display: flex; justify-content: center; align-items: center;">
                            <i class="fas fa-user" style="color: white;"></i> <!-- Login Icon -->
                        </a>
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
            </ol>
        </div>
    </div>
    <!-- Header End -->
<!-- Contact Start -->
<div class="container py-5">
    <div class="row">
        <div class="col-lg-6">
            <div class="contact-form rounded p-5">
                <form action="{{ route('contact.store') }}" method="POST"> <!-- Updated action to store contact -->
                    @csrf <!-- CSRF Token for protection -->
                    <h1 class="display-6 mb-4">กรอกข้อมูลการติดต่อ</h1>
                    <div class="row gx-4 gy-3">
                        <div class="col-xl-6">
                            <input type="text" class="form-control bg-white border-0 py-3 px-4" name="name" placeholder="ชื่อ-นามสกุล" required>
                        </div>
                        <div class="col-xl-6">
                            <input type="email" class="form-control bg-white border-0 py-3 px-4" name="email" placeholder="อีเมล" required>
                        </div>
                        <div class="col-12">
                            <textarea class="form-control bg-white border-0 py-3 px-4" name="message" rows="4" cols="10" placeholder="ข้อความ" required></textarea>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary btn-primary-outline-0 w-100 py-3 px-5" type="submit">บันทึกข้อมูล</button>
                        </div>
                    </div>
                </form> <!-- Make sure to close the form tag here -->
            </div>
            </div>

            <div class="col-lg-6">
                <div class="rounded">
                    <iframe class="rounded-top w-100" 
                    style="height: 450px; margin-bottom: -6px;" 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15814.944499850468!2d101.28778610337176!3d6.540975864854343!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31b4bdc1603e5c21%3A0x40100b25de28040!2zMTMzIOC4iOC4p-C4q-C4reC4p-C4tOC5jOC4seC4iuC5iOC4reC5gOC4suC4quC5gOC4peC5jCDguKvguKPguLTguJnguJXguK3guKPguLLguK3guLLguKXguKLguKkg4LiXIOC4peC4t-C4oeC4uOC5gOC4peC4qOC5hOC5hOC4geC5guC4nA!5e0!3m2!1sth!2sth!4v1693501234567!5m2!1sth!2sth" 
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <!-- Footer Start -->
    <div class="container-fluid footer py-5">
        <div class="container py-5">
            <div class="row g-5">  
            </div>
        </div>
    </div>
    <!-- Footer End -->
    
    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('forms/lib/wow/wow.min.js')}}"></script>
    <script src="{{ asset('forms/lib/easing/easing.min.js')}}"></script>
    <script src="{{ asset('forms/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{ asset('forms/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{ asset('forms/lib/lightbox/js/lightbox.min.js')}}"></script>
    <script src="{{ asset('forms/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('forms/js/main.js')}}"></script>
</body>

</html>
