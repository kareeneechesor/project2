<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

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

    <!-- Flatpickr CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    
    <!-- Flatpickr Thai Locale -->
    <script src="https://npmcdn.com/flatpickr/dist/l10n/th.js"></script>

    <style>
        .available-time {
            color: green;
        }
        .unavailable-time {
            color: red;
        }
        .unavailable-time[disabled] {
            cursor: not-allowed;
        }

        .navbar {
            background-color: #ffffff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        .navbar-brand h1 {
            font-size: 2.5rem;
            color: #DAA520;
            margin: 0;
            font-weight: 700;
        }
        .nav-item .nav-link {
            font-size: 1.1rem;
            color: #555;
            padding: 10px 15px;
            transition: color 0.3s ease;
        }
        .nav-item .nav-link:hover,
        .nav-item .nav-link.active {
            color: #ff69b4;
        }
        .btn-primary-custom {
            background-color: #CD853F;
            border-color: #CD853F;
            color: white;
            font-size: 1.1rem;
            padding: 10px 20px;
            border-radius: 25px;
        }
        .btn-primary-custom:hover {
            background-color: #b56c38;
            border-color: #b56c38;
        }
        .booking-card {
            border: 1px solid #e49d9d;
            border-radius: 8px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
        }
        .booking-card img {
            width: 100%;
            max-width: 400px;
            height: auto;
            object-fit: contain;
            margin-right: 20px;
            border-radius: 8px;
        }
        .form-section {
            background-color: #FFE4B5;
            padding: 20px;
            border-radius: 8px;
        }
        .form-label {
            font-weight: bold;
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
                        <a href="/form" class="nav-item nav-link">ติดต่อเรา</a>
                        <a href="/service" class="nav-item nav-link">บริการ</a>
                        <a href="/show-promotions" class="nav-item nav-link">โปรโมชั่น</a>
                        <a href="/package" class="nav-link">แพคเกจ</a>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">สมัครสมาชิก</a>
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

    <!-- Booking Form Start -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6">
                <div class="booking-card d-flex">
                    <img src="{{ request('image') }}" alt="Promotion Image"> <!-- Dynamically loads the image from the URL query parameter -->
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-section">
                    <p class="fs-4 text-uppercase text-primary">กรอกข้อมูลการจอง</p>
                    <form onsubmit="return submitBooking();"> <!-- Form submission trigger -->
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">ชื่อ</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="phone" class="form-label">เบอร์โทร</label>
                                <input type="telephone" class="form-control" id="phone" name="phone" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="date" class="form-label">วันที่จอง</label>
                                <input type="text" id="date" class="form-control flatpickr" name="date" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="time" class="form-label">เวลา</label>
                                <select class="form-control" id="time" name="time">
                                    <option value="">--:--</option>
                                    <?php 
                                    $unavailableTimes = ['12:00', '15:30']; // Example unavailable times from the database
                                    for ($hour = 11; $hour <= 20; $hour++) {
                                        for ($minute = 0; $minute < 60; $minute += 30) {
                                            $time = sprintf('%02d:%02d', $hour, $minute);
                                            $class = in_array($time, $unavailableTimes) ? 'unavailable-time' : 'available-time';
                                            $disabled = in_array($time, $unavailableTimes) ? 'disabled' : '';
                                            echo "<option value='$time' class='$class' $disabled>$time</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="sessions" class="form-label">จำนวนครั้ง</label>
                                <input type="number" class="form-control" id="sessions" name="sessions" min="1" value="{{ request('sessions', 1) }}" required>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="details" class="form-label">รายละเอียดเพิ่มเติม</label>
                            <textarea class="form-control" id="details" name="details" rows="3"></textarea>
                        </div>
                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn w-100 me-2" style="background-color: #DAA520; color: white;">บันทึก</button>
                            <a href="/" class="btn w-100" style="background-color: #CD853F; color: white;">ยกเลิก</a>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking Form End -->

    <!-- Modal Structure -->
    <div class="modal fade" id="bookingConfirmationModal" tabindex="-1" aria-labelledby="bookingConfirmationLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="bookingConfirmationLabel">ยืนยันการจอง</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>คุณได้จองบริการในชื่อ: <span id="modal-name"></span></p>
                    <p>เบอร์โทร: <span id="modal-phone"></span></p>
                    <p>วันที่: <span id="modal-date"></span></p>
                    <p>เวลา: <span id="modal-time"></span></p>
                    <p>จำนวนครั้ง: <span id="modal-sessions"></span></p>
                    <p>ขอบคุณค่ะ!</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
                    <a href="/" class="btn btn-primary">กลับสู่หน้าหลัก</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Flatpickr -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var unavailableDates = ["2024-09-10", "2024-09-12", "2024-09-15"];
            flatpickr(".flatpickr", {
                locale: "th",
                dateFormat: "Y-m-d",
                disable: unavailableDates,
                onDayCreate: function (dObj, dStr, fp, dayElem) {
                    const currentMonth = fp.currentMonth;
                    const currentYear = fp.currentYear;
                    if (dayElem.dateObj.getMonth() !== currentMonth || dayElem.dateObj.getFullYear() !== currentYear) {
                        dayElem.style.backgroundColor = "white";
                    } else {
                        var dateStr = dayElem.dateObj.toISOString().split('T')[0];
                        if (unavailableDates.includes(dateStr)) {
                            dayElem.style.backgroundColor = "#FF9999";
                            dayElem.style.color = "white";
                            dayElem.classList.add("flatpickr-disabled");
                        } else {
                            dayElem.style.backgroundColor = "#99FF99";
                        }
                    }
                },
                onReady: function (selectedDates, dateStr, instance) {
                    updateYearToBuddhistEra(instance);
                },
                onYearChange: function (selectedDates, dateStr, instance) {
                    updateYearToBuddhistEra(instance);
                }
            });

            function updateYearToBuddhistEra(instance) {
                const calendarContainer = instance.calendarContainer;
                const yearElements = calendarContainer.querySelectorAll(".cur-year");

                yearElements.forEach((yearElement) => {
                    const year = parseInt(yearElement.textContent, 10);
                    yearElement.textContent = year + 543; // Convert to Buddhist Era
                });
            }
        });

        function submitBooking() {
            // Get form values
            var name = document.getElementById("name").value;
            var phone = document.getElementById("phone").value;
            var date = document.getElementById("date").value;
            var time = document.getElementById("time").value;
            var sessions = document.getElementById("sessions").value;
    
            // Fill the modal content with the form values
            document.getElementById("modal-name").textContent = name;
            document.getElementById("modal-phone").textContent = phone;
            document.getElementById("modal-date").textContent = date;
            document.getElementById("modal-time").textContent = time;
            document.getElementById("modal-sessions").textContent = sessions;
    
            // Show the modal
            var myModal = new bootstrap.Modal(document.getElementById('bookingConfirmationModal'));
            myModal.show();
    
            return false; // Prevent actual form submission
        }
    </script>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
