<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Form</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=PT+Serif:wght@400;700&display=swap" rel="stylesheet">

    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />

    <!-- Flatpickr CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f7f8fa;
            font-family: 'Open Sans', sans-serif;
        }

        /* Step Progress Styles */
        .step-progress {
            margin-top: 30px;
            margin-bottom: 30px;
            text-align: center;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
        }

        .step {
            width: 100%;
            text-align: center;
            position: relative;
        }

        .step-number {
            display: inline-block;
            width: 40px;
            height: 40px;
            line-height: 40px;
            border-radius: 50%;
            background-color: #f7f8fa;
            border: 2px solid #DAA520;
            margin-bottom: 10px;
            font-weight: bold;
            color: #999;
        }

        .step.active .step-number {
            background-color: #f56942;
            color: white;
            border-color: #f56942;
        }

        .step-progress::before {
            content: '';
            position: absolute;
            top: 20px;
            left: 5%;
            right: 5%;
            height: 2px;
            background-color: #ddd;
            z-index: -1;
        }

        .step.active + .step::before {
            background-color: #f56942;
        }

        /* Custom Button Styles */
        .btn-custom {
            background-color: #f56942;
            border-color: #f56942;
            color: white;
            font-size: 1rem;
            padding: 12px 30px;
            border-radius: 25px;
            margin-top: 20px;
        }

        .btn-custom:hover {
            background-color: #e55730;
            border-color: #e55730;
        }

        /* Form Section Styles */
        .form-section {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        /* Hide step sections by default */
        .step-section {
            display: none;
        }

        /* Show only the active step section */
        .step-section.active {
            display: block;
        }
    </style>

    <script>
        let formData = {};

        // Function to handle the step navigation
        function goToStep(step) {
            // Hide all step sections
            document.querySelectorAll('.step-section').forEach(function(section) {
                section.classList.remove('active');
            });

            // Show the selected step
            document.getElementById(step).classList.add('active');

            // Update step progress
            document.querySelectorAll('.step').forEach(function(step) {
                step.classList.remove('active');
            });
            document.getElementById(step + '-progress').classList.add('active');

            // Populate Step 3 with form data
            if (step === 'step3') {
                document.getElementById('summary-name').innerText = formData.name;
                document.getElementById('summary-phone').innerText = formData.phone;
                document.getElementById('summary-date').innerText = formData.booking_date;
                document.getElementById('summary-time').innerText = formData.booking_time;
                document.getElementById('summary-details').innerText = formData.details || '-';
                document.getElementById('summary-service').innerText = formData.service; // Show service name
                document.getElementById('summary-price').innerText = formData.price; // Show price
                document.getElementById('summary-employee').innerText = formData.employee; // Show employee name

                // Populate hidden fields for form submission
                document.getElementById('final-name').value = formData.name;
                document.getElementById('final-phone').value = formData.phone;
                document.getElementById('final-booking_date').value = formData.booking_date;
                document.getElementById('final-booking_time').value = formData.booking_time;
                document.getElementById('final-details').value = formData.details;
                document.getElementById('final-service').value = formData.service;
                document.getElementById('final-price').value = formData.price;
                document.getElementById('final-employee').value = formData.employee; // Hidden field for employee
            }
        }

        // Function to collect form data before moving to Step 3
        function collectFormData() {
            formData.name = document.getElementById('name').value;
            formData.phone = document.getElementById('phone').value;
            formData.booking_date = document.getElementById('date').value;
            formData.booking_time = document.getElementById('time').value;
            formData.details = document.getElementById('details').value;
            formData.service = '{{ request('service') }}'; // Get service name
            formData.price = '{{ request('price') }}'; // Get price
            formData.employee = document.getElementById('employee').value; // Get employee

            goToStep('step3');
        }

        // Function to go back to the first step
        function goToPreviousStep() {
            goToStep('step1');
        }

        // Initialize Flatpickr
        document.addEventListener('DOMContentLoaded', function() {
            flatpickr("#date", {
                dateFormat: "Y-m-d", // Format of the date to display
                minDate: "today" // Set the minimum date to today
            });
        });
    </script>
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
                        <a href="/package" class="nav-link ">แพคเกจ</a>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">สมัครสมาชิก</a>
                </div>
                <div class="d-flex align-items-center flex-nowrap pt-xl-0">
                    <a href="/booking" class="btn btn-primary rounded-pill py-3 px-4" style="background-color: #CD853F; border-color: #e2b68a;">จอง</a>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Progress Steps -->
    <div class="container" style="padding-top: 100px;">
        <div class="step-progress">
            <div class="step active" id="step1-progress">
                <div class="step-number">1</div>
                <div class="text">บริการของเรา</div>
            </div>
            <div class="step" id="step2-progress">
                <div class="step-number">2</div>
                <div class="text">กรอกข้อมูล</div>
            </div>
            <div class="step" id="step3-progress">
                <div class="step-number">3</div>
                <div class="text">ยืนยันการจอง</div>
            </div>
        </div>
    </div>

    <!-- Booking Form Start -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="form-section">

                    <!-- Step 1: Service Selection -->
                    <div id="step1" class="step-section active">
                        <h3 class="text-center">เลือกทรงแบบบริการ</h3>
                        <p class="text-center">เราจะอัปเดตใหม่สำหรับการจองคิวตามที่คุณจะทำการจองสำเร็จ</p>

                        <!-- Service Selection -->
                        <div class="form-group">
                            <h5>เลือกบริการนวดสำหรับคุณ <span class="badge-new">ใหม่</span></h5>
                            <div class="booking-card d-flex flex-column align-items-center">
                                <img src="{{ request('image') }}" alt="Massage Service" class="img-fluid mb-3" style="max-width: 50%; height: auto;">
                                <h4 class="text-center">{{ request('service') }}</h4>
                                <p class="text-muted text-center">บริการนวดที่ช่วยผ่อนคลายและบรรเทาความเมื่อยล้า</p>
                            </div>
                        </div>

                        <!-- Booking Summary -->
                        <div class="booking-summary text-center mt-4">
                            <p>ราคา <span class="text-danger">{{ request('price') }} บาท</span></p>
                            <button class="btn btn-custom w-100" onclick="goToStep('step2')">ถัดไป</button>
                        </div>
                    </div>

                    <!-- Step 2: Booking Form -->
                    <div id="step2" class="step-section">
                        <h3 class="text-center">กรอกข้อมูลการจอง</h3>

                        <form onsubmit="event.preventDefault(); collectFormData();">
                            <div class="row mb-3">
                                <!-- Name -->
                                <div class="col-md-6">
                                    <label for="name" class="form-label">ชื่อ</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>

                                <!-- Phone -->
                                <div class="col-md-6">
                                    <label for="phone" class="form-label">เบอร์โทร</label>
                                    <input type="text" class="form-control" id="phone" name="phone" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <!-- Booking Date -->
                                <div class="col-md-6 mb-3">
                                    <label for="date" class="form-label">วันที่จอง</label>
                                    <input type="text" id="date" class="form-control flatpickr" name="date" required>
                                </div>

                                <!-- Booking Time -->
                                <div class="col-md-6 mb-3">
                                    <label for="time" class="form-label">เวลา</label>
                                    <select class="form-control" id="time" name="time" required>
                                        <option value="">--:--</option>
                                        <?php 
                                        $unavailableTimes = ['12:00', '15:30']; // Example unavailable times from the database
                                        for ($hour = 10; $hour <= 20; $hour++) {
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

                            <!-- Employee Selection -->
                            <div class="mb-3">
                                <label for="employee" class="form-label">เลือกพนักงาน (ไม่เลือกก็ได้)</label>
                                <select class="form-control" id="employee" name="employee" onchange="updateEmployeeDetails()">
                                    <option value="">-- ไม่เลือก --</option>
                                    <option value="employee1" data-position="พนักงาน 1" data-phone="012-345-6789">พนักงาน 1</option>
                                    <option value="employee2" data-position="พนักงาน 2" data-phone="987-654-3210">พนักงาน 2</option>
                                    <option value="employee3" data-position="พนักงาน 3" data-phone="123-456-7890">พนักงาน 3</option>
                                    <!-- เพิ่มพนักงานตามต้องการ -->
                                </select>
                            </div>

                            <!-- Details -->
                            <div class="mb-3">
                                <label for="details" class="form-label">รายละเอียดเพิ่มเติม</label>
                                <textarea class="form-control" id="details" name="details"></textarea>
                            </div>

                            <!-- Navigation Buttons -->
                            <div class="mb-3 d-flex justify-content-between">
                                <button type="button" class="btn" style="background-color: #CD853F; color: white;" onclick="goToPreviousStep()">ย้อนกลับ</button>
                                <button type="submit" class="btn" style="background-color: #CD853F; color: white;">ถัดไป</button>
                            </div>
                        </form>
                    </div>

                    <!-- Step 3: Confirmation -->
                    <div id="step3" class="step-section">
                        <h3 class="text-center">ยืนยันการจอง</h3>

                        <div class="form-group">
                            <h5>ข้อมูลการจอง</h5>
                            <p><strong>ชื่อ:</strong> <span id="summary-name"></span></p>
                            <p><strong>เบอร์โทร:</strong> <span id="summary-phone"></span></p>
                            <p><strong>วันที่:</strong> <span id="summary-date"></span></p>
                            <p><strong>เวลา:</strong> <span id="summary-time"></span></p>
                            <p><strong>รายละเอียดเพิ่มเติม:</strong> <span id="summary-details"></span></p>
                            <p><strong>บริการ:</strong> <span id="summary-service">{{ request('service') }}</span></p>
                            <p><strong>ราคา:</strong> <span id="summary-price">{{ request('price') }} บาท</span></p>
                            <p><strong>พนักงาน:</strong> <span id="summary-employee"></span></p> <!-- แสดงพนักงาน -->
                        </div>

                        <!-- Navigation Buttons -->
                        <div class="d-flex justify-content-center mb-3">
                            <button type="button" class="btn" style="background-color: #CD853F; color: white; margin-right: 10px;" onclick="goToStep('step2')">ย้อนกลับ</button>
                            <form action="{{ route('bookings.store') }}" method="POST" style="flex: 1;">
                                @csrf
                                <input type="hidden" name="name" id="final-name" value="">
                                <input type="hidden" name="phone" id="final-phone" value="">
                                <input type="hidden" name="booking_date" id="final-booking_date" value="">
                                <input type="hidden" name="booking_time" id="final-booking_time" value="">
                                <input type="hidden" name="details" id="final-details" value="">
                                <input type="hidden" name="service" id="final-service" value="{{ request('service') }}">
                                <input type="hidden" name="price" id="final-price" value="{{ request('price') }}">
                                <input type="hidden" name="employee" id="final-employee" value=""> <!-- Hidden field for employee -->
                                <input type="hidden" name="status" value="pending"> <!-- กำหนดสถานะเริ่มต้น -->
                                <button type="submit" class="btn btn-success">ยืนยันการจอง</button>
                            </form>                            
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Booking Form End -->

    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script>
        // Function to update employee details in the form
        function updateEmployeeDetails() {
            const employeeSelect = document.getElementById('employee');
            const selectedOption = employeeSelect.options[employeeSelect.selectedIndex];

            // Get employee details
            const employeeName = selectedOption.value;
            const employeePosition = selectedOption.getAttribute('data-position');
            const employeePhone = selectedOption.getAttribute('data-phone');

            // Update the summary fields
            document.getElementById('summary-employee').innerText = employeePosition || "ไม่มีพนักงานเลือก"; // Show position or a default message
            document.getElementById('summary-phone').innerText = employeePhone || "ไม่มีเบอร์โทร"; // Show phone or a default message
        }
    </script>

</body>
</html>
