<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>The Massage</title>
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
    <link href="{{ asset('forms/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('forms/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('forms/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('forms/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('forms/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

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
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->


 <!-- Carousel Start -->
 <div class="container-fluid carousel-header px-0">
    <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="forms/img/carousel-3.jpg" class="img-fluid" alt="Image">
                <div class="carousel-caption">
                    <div class="p-3" style="max-width: 900px;">
    
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="forms/img/carousel-2.jpg" class="img-fluid" alt="Image">
                <div class="carousel-caption">
                    <div class="p-3" style="max-width: 900px;">
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="forms/img/carousel-1.jpg" class="img-fluid" alt="Image">
                <div class="carousel-caption">
                    <div class="p-3" style="max-width: 900px;">
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->
<!-- employee -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spa Employees</title>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .employee-card {
            background-color: white;
            border-radius: 0.375rem;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
            text-align: center;
            margin-bottom: 2rem;
            transition: transform 0.3s;
        }
        .employee-card:hover {
            transform: translateY(-10px);
        }
        .employee-card img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-top-left-radius: 0.375rem;
            border-top-right-radius: 0.375rem;
        }
        .employee-card .card-body {
            padding: 1rem;
        }
    </style>
</head>

<div class="container mt-4">
    <div class="row">
        @foreach($employees as $employee)
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card promotion-card">
                    @if($employee->image)
                        <img src="{{ asset('storage/' . $employee->image) }}" 
                             class="card-img-top" alt="{{ $employee->name }}" 
                             style="height: 250px; object-fit: cover;"> 
                        <!-- ขนาดของรูปภาพถูกปรับให้ใหญ่ขึ้นเป็น 250px -->
                    @else
                        <img src="{{ asset('forms/img/default-placeholder.png') }}" 
                             class="card-img-top" alt="ไม่มีรูป" 
                             style="height: 250px; object-fit: cover;">
                    @endif
                    <div class="card-body text-center p-2"> <!-- ลด padding ให้การ์ดดูใกล้ขึ้น -->
                        <h5 class="card-title">{{ $employee->name }}</h5>
                        <p class="card-text">{{ $employee->position }}</p>
                        <p class="card-text">{{ $employee->phone }}</p>
                    </div>
                    <div class="card-footer mt-auto text-center p-2"> 
                        <!-- ลด padding ของ card-footer -->
                        <a href="/service" class="btn btn-pink btn-block">เลือกพนักงาน</a>
                        <!-- ปุ่มถูกจัดให้อยู่ตรงกลาง และใช้สีปุ่มตามที่กำหนด -->
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="unavailableModal" tabindex="-1" aria-labelledby="unavailableModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background-color: #484848; color: #fff;">
      <div class="modal-header">
        <h5 class="modal-title" id="unavailableModalLabel">พนักงานไม่ว่าง</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        พนักงานที่คุณเลือกไม่ว่างในเวลานี้ กรุณาเลือกพนักงานคนอื่น
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
      </div>
    </div>
  </div>
</div>

<!-- JavaScript -->
<script>
    function checkAvailability(employee) {
        // ตัวอย่าง: พนักงานคนที่ไม่ว่าง
        const unavailableEmployees = ['พนักงานคนที่2', 'พนักงานคนที่3'];

        // ใช้ฟังก์ชัน confirm เพื่อแจ้งเตือน
        if (unavailableEmployees.includes(employee)) {
            var confirmAction = confirm("พนักงานคนนี้ไม่ว่างในเวลานี้ คุณต้องการดำเนินการต่อหรือไม่?");
            if (confirmAction) {
                alert("คุณได้เลือกพนักงานที่ไม่ว่าง กรุณาติดต่อเพื่อยืนยันการจองอีกครั้ง.");
            } else {
                alert("คุณได้ยกเลิกการเลือก.");
            }
        } else {
            window.location.href = '/service'; // หากพนักงานว่าง นำผู้ใช้ไปยังหน้าอื่น
        }
    }
</script>

<style>
    .modal-content {
        background-color: #000;
        color: #fff;
    }

    .btn-close-white {
        filter: invert(1); /* ปรับปุ่มปิดให้เป็นสีขาว */
    }
</style>

    <style>
        .employee-card {
            border: 1px solid #ccc;
            border-radius: 8px;
            overflow: hidden;
            transition: all 0.3s ease;
            background-color: #ffffff;
        }
    
        .employee-card:hover {
            background-color: #f8f9fa;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    
        .employee-card img {
            max-height: 200px;
            object-fit: cover;
            border-bottom: 1px solid #ccc;
        }
    
        .employee-card h5,
        .employee-card p {
            margin: 0;
            color: #333;
        }
    
        .btn-pink {
            background-color: #ff69b4;
            border-color: #ff69b4;
            color: white;
            width: 100%;
        }
    
        .btn-pink:hover {
            background-color: #e05599;
            border-color: #e05599;
        }
    
        .card-body {
            padding: 20px;
        }
    </style>
    
    
 <!-- Services Start -->
 <div class="container-fluid services py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 800px;">
            <p class="fs-4 text-uppercase text-center text-primary">บริการของเรา</p>
            <h1 class="display-3">บริการสปาและความงาม</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="services-item bg-light border-4 border-end border-primary rounded p-4">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <div class="services-content text-end">
                                <h3>สปาพาราฟินเท้า</h3>
                            <p style="font-size: 15px;">250. 1ชม.</p>
                            <p style="font-size: 12px;">ช่วยเท้านุ่ม ลดเท้าแห้งกร้าน ผ่อนคลาย</p>
                            <a href="#" class="btn btn-primary rounded-pill py-2 px-4">เลือกบริการ</a>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="services-img d-flex align-items-center justify-content-center rounded">
                                <img src="forms/img/สปาพาราฟินเท้า.jpg" class="img-fluid rounded" alt="">
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
                                <img src="forms/img/สปามือเท้า.jpg" class="img-fluid rounded" alt="">
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="col-8">
                                <h5>สปามือเท้า คอมโบเซต</h5>
                                <p style="font-size: 15px;">250. 1ชม.</p>
                                <p style="font-size: 10px;">แช่เท้าด้วยเกลือเกล็ดหิมาลัยสีชมพู+ขัดเท้าด้วยสครับและขัดเท้าด้วยตะไบ แปรงขนนุ่ม+ตัดหนัง ตัดเล็บ +นวดบำรุงด้วยครีมบำรุงมือเท้า</p>
                                <a href="#" class="btn btn-primary rounded-pill py-2 px-4">เลือกบริการ</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="services-item bg-light border-4 border-end border-primary rounded p-4">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <div class="services-content text-end">
                                <h5>การบำบัดผิวหน้า</h5>
                            <p style="font-size: 15px;">250. 1ชม.</p>
                            <p style="font-size: 10px;">ช่วยฟื้นฟูผิวให้กลับมาสุขภาพดี พร้อมรับกับการบำรุงในขั้นตอนต่อไป หัตถการนี้ให้สัมผัสที่เย็นสบาย ผ่อนคลายผิว ช่วยกระชับรูขุมขน พร้อมเผยผิวสวย กระจ่างใส</p>
                            <a href="#" class="btn btn-primary rounded-pill py-2 px-4">เลือกบริการ</a>
                        </div>
                        </div>
                        <div class="col-4">
                            <div class="services-img d-flex align-items-center justify-content-center rounded">
                                <img src="forms/img/services-4.jpg" class="img-fluid rounded" alt="">
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
                                <img src="forms/img/ระเบิดขี้ไคล.jpg" class="img-fluid rounded" alt="">
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="services-content text-start">
                                <h3>ขัดผิวระเบิดขี้ไคล</h3>
                            <p style="font-size: 15px;">450. 1ชม.</p>
                            <p style="font-size: 10px;">ช่วยให้ผิวดูดซับมอยส์เจอร์ไรเซอร์ได้ดีขึ้น เป็นการเปิดผิวและช่วยให้รูขุมขนสะอาด มอยเจอร์ไรเซอร์ที่ทาหลังจากนั้นจะซึมซาบเข้าสู่ผิวได้อย่างทั่วถึงยิ่งขึ้น</p>
                            <a href="/booking" class="btn btn-primary rounded-pill py-2 px-4">เลือกบริการ</a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="services-item bg-light border-4 border-end border-primary rounded p-4">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <div class="services-content text-end">
                                <h3>Body Massage</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                                <a href="#" class="btn btn-primary btn-primary-outline-0 rounded-pill py-2 px-4">Make Order</a>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="services-img d-flex align-items-center justify-content-center rounded">
                                <img src="forms/img/services-5.jpg" class="img-fluid rounded" alt="">
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
                                <img src="forms/img/services-6.jpg" class="img-fluid rounded" alt="">
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="services-content text-start">
                                <h3>Aroma Therapy</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                                <a href="#" class="btn btn-primary btn-primary-outline-0 rounded-pill py-2 px-4">Make Order</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="services-item bg-light border-4 border-end border-primary rounded p-4">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <div class="services-content text-end">
                                <h3>Mineral Baths</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                                <a href="#" class="btn btn-primary btn-primary-outline-0 rounded-pill py-2 px-4">Make Order</a>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="services-img d-flex align-items-center justify-content-center rounded">
                                <img src="forms/img/services-3.jpg" class="img-fluid rounded" alt="">
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
                                <img src="forms/img/services-1.jpg" class="img-fluid rounded" alt="">
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="services-content text-start">
                                <h3>Stone Therapy</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                                <a href="#" class="btn btn-primary btn-primary-outline-0 rounded-pill py-2 px-4">Make Order</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="services-btn text-center">
                    <a href="#" class="btn btn-primary btn-primary-outline-0 rounded-pill py-3 px-5">กลับสู่หน้าหลัก</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services End -->

 <!-- Gallery Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="mx-auto text-center mb-5" style="max-width: 800px;">
            <p class="fs-4 text-uppercase text-primary">แกลอรี่</p>
            <h1 class="display-3">ภาพถ่ายจากสปาของเรา</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item">
                    <a href="forms/img/gallery-1.jpg" data-lightbox="spa-gallery" data-title="Spa Image 1">
                        <img src="forms/img/gallery-1.jpg" class="img-fluid rounded" alt="Spa Image 1">
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item">
                    <a href="forms/img/gallery-2.jpg" data-lightbox="spa-gallery" data-title="Spa Image 2">
                        <img src="forms/img/gallery-2.jpg" class="img-fluid rounded" alt="Spa Image 2">
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item">
                    <a href="forms/img/gallery-3.jpg" data-lightbox="spa-gallery" data-title="Spa Image 3">
                        <img src="forms/img/gallery-3.jpg" class="img-fluid rounded" alt="Spa Image 3">
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item">
                    <a href="forms/img/gallery-4.jpg" data-lightbox="spa-gallery" data-title="Spa Image 4">
                        <img src="forms/img/gallery-4.jpg" class="img-fluid rounded" alt="Spa Image 4">
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item">
                    <a href="forms/img/gallery-5.jpg" data-lightbox="spa-gallery" data-title="Spa Image 5">
                        <img src="forms/img/gallery-5.jpg" class="img-fluid rounded" alt="Spa Image 5">
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item">
                    <a href="forms/img/gallery-6.jpg" data-lightbox="spa-gallery" data-title="Spa Image 6">
                        <img src="forms/img/gallery-6.jpg" class="img-fluid rounded" alt="Spa Image 6">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Gallery End -->


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