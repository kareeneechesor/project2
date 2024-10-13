<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 20px;
        }

        .booking-container {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .booking-header {
            font-size: 1.2em;
            margin-bottom: 10px;
        }

        .booking-duration {
            margin-bottom: 20px;
        }

        .calendar {
            text-align: center;
        }

        .calendar-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 1.2em;
            margin-bottom: 10px;
        }

        .calendar-header button {
            background-color: #2196F3;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        .calendar-header button:hover {
            background-color: #1976D2;
        }

        .calendar-days {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .calendar-dates {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 5px;
            margin-bottom: 20px;
        }

        .calendar-date {
            cursor: pointer;
            padding: 5px;
            border-radius: 50%;
            transition: background-color 0.3s;
            text-align: center;
        }

        .calendar-date:hover {
            background-color: #e0e0e0;
        }

        .calendar-date.selected {
            background-color: #2196F3;
            color: white;
        }

        .time-slots {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
        }

        .time-slot {
            padding: 10px;
            background-color: #e0e0e0;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .time-slot:hover {
            background-color: #ccc;
        }

        .time-slot:active {
            background-color: #aaa;
        }

        .time-slot.booked {
            background-color: #b0bec5;
            cursor: not-allowed;
        }

        .selected-details {
            margin-top: 20px;
            padding: 10px;
            background-color: #f1f1f1;
            border-radius: 5px;
        }

        .btn-group {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .btn-submit,
        .btn-back {
            flex: 1;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 1em;
            cursor: pointer;
            margin: 0 5px;
        }

        .btn-submit {
            background-color: #2196F3;
            color: white;
        }

        .btn-submit:hover {
            background-color: #1976D2;
        }

        .btn-back {
            background-color: #f44336;
            color: white;
        }

        .btn-back:hover {
            background-color: #d32f2f;
        }
    </style>
</head>
<body>

<div class="booking-container">
    <div class="booking-header">สปามือเท้า คอมโบเซต</div>
    <div class="booking-duration">เวลาทั้งหมด: 1 ชม.</div>

    <div class="calendar">
        <div class="calendar-header">
            <button onclick="changeMonth(-1)">&#10094;</button>
            <span id="calendarMonthYear"></span>
            <button onclick="changeMonth(1)">&#10095;</button>
        </div>
        <div class="calendar-days">
            <span>อา.</span><span>จ.</span><span>อ.</span><span>พ.</span><span>พฤ.</span><span>ศ.</span><span>ส.</span>
        </div>
        <div class="calendar-dates" id="calendarDates"></div>
    </div>

    <div class="time-slots">
        <div class="time-slot" onclick="selectTime(event, '11:00')" data-booked="false">11:00</div>
        <div class="time-slot" onclick="selectTime(event, '11:30')" data-booked="true">11:30</div>
        <div class="time-slot" onclick="selectTime(event, '12:00')" data-booked="false">12:00</div>
        <div class="time-slot" onclick="selectTime(event, '12:30')" data-booked="true">12:30</div>
        <div class="time-slot" onclick="selectTime(event, '13:00')" data-booked="false">13:00</div>
        <div class="time-slot" onclick="selectTime(event, '13:30')" data-booked="false">13:30</div>
        <div class="time-slot" onclick="selectTime(event, '14:00')" data-booked="true">14:00</div>
        <div class="time-slot" onclick="selectTime(event, '14:30')" data-booked="false">14:30</div>
        <div class="time-slot" onclick="selectTime(event, '15:00')" data-booked="false">15:00</div>
        <div class="time-slot" onclick="selectTime(event, '15:30')" data-booked="false">15:30</div>
        <div class="time-slot" onclick="selectTime(event, '16:00')" data-booked="true">16:00</div>
        <div class="time-slot" onclick="selectTime(event, '16:30')" data-booked="false">16:30</div>
        <div class="time-slot" onclick="selectTime(event, '17:00')" data-booked="false">17:00</div>
        <div class="time-slot" onclick="selectTime(event, '17:30')" data-booked="false">17:30</div>
        <div class="time-slot" onclick="selectTime(event, '18:00')" data-booked="false">18:00</div>
        <div class="time-slot" onclick="selectTime(event, '18:30')" data-booked="true">18:30</div>
        <div class="time-slot" onclick="selectTime(event, '19:00')" data-booked="false">19:00</div>
        <div class="time-slot" onclick="selectTime(event, '19:30')" data-booked="false">19:30</div>
        <div class="time-slot" onclick="selectTime(event, '20:00')" data-booked="false">20:00</div>
    </div>

    <div class="selected-details" id="selectedDetails">
        <p><strong>วันที่เลือก:</strong> <span id="selectedDate"></span></p>
        <p><strong>เวลาที่เลือก:</strong> <span id="selectedTime"></span></p>
    </div>

    <div class="btn-group">
        <button class="btn-submit" onclick="submitBooking()">ยืนยัน</button>
        <button class="btn-back" onclick="goBack()">ย้อนกลับ</button>
    </div>
</div>

<script>
    const calendarMonthYear = document.getElementById('calendarMonthYear');
    const calendarDates = document.getElementById('calendarDates');
    const selectedDateElement = document.getElementById('selectedDate');
    const selectedTimeElement = document.getElementById('selectedTime');
    const hiddenDate = document.createElement('input');
    const hiddenTime = document.createElement('input');
    hiddenDate.type = 'hidden';
    hiddenDate.id = 'hiddenDate';
    hiddenTime.type = 'hidden';
    hiddenTime.id = 'hiddenTime';
    document.body.appendChild(hiddenDate);
    document.body.appendChild(hiddenTime);

    let currentMonth = new Date().getMonth();
    let currentYear = new Date().getFullYear();
    let selectedDate = '';
    let selectedTime = '';

    function generateCalendar(month, year) {
        calendarDates.innerHTML = '';
        const firstDay = new Date(year, month).getDay();
        const daysInMonth = new Date(year, month + 1, 0).getDate();

        for (let i = 0; i < firstDay; i++) {
            calendarDates.innerHTML += '<div class="calendar-date"></div>';
        }

        for (let day = 1; day <= daysInMonth; day++) {
            calendarDates.innerHTML += `<div class="calendar-date" onclick="selectDate('${year}-${month + 1}-${day}')">${day}</div>`;
        }

        calendarMonthYear.innerHTML = `${month + 1}/${year}`;
    }

    function selectDate(date) {
        selectedDate = date;
        selectedDateElement.textContent = selectedDate;
        hiddenDate.value = selectedDate;
    }

    function selectTime(event, time) {
        if (event.target.dataset.booked === 'true') return;

        const timeSlots = document.querySelectorAll('.time-slot');
        timeSlots.forEach(slot => slot.classList.remove('selected'));
        event.target.classList.add('selected');
        selectedTime = time;
        selectedTimeElement.textContent = selectedTime;
        hiddenTime.value = selectedTime;
    }

    function submitBooking() {
    if (!selectedDate || !selectedTime) {
        alert('กรุณาเลือกวันที่และเวลาที่ต้องการ');
        return;
    }

    // URL for the booking confirmation page
    const bookingPageUrl = '/booking'; // Ensure this is the correct path to your booking confirmation page

    // Log values for debugging
    console.log('Selected Date:', selectedDate);
    console.log('Selected Time:', selectedTime);

    // Redirect to the booking page with selected date and time as query parameters
    window.location.href = `${bookingPageUrl}?date=${encodeURIComponent(selectedDate)}&time=${encodeURIComponent(selectedTime)}`;
}



    function changeMonth(direction) {
        currentMonth += direction;
        if (currentMonth > 11) {
            currentMonth = 0;
            currentYear++;
        } else if (currentMonth < 0) {
            currentMonth = 11;
            currentYear--;
        }
        generateCalendar(currentMonth, currentYear);
    }

    function goBack() {
        window.history.back();
    }

    generateCalendar(currentMonth, currentYear);
</script>

</body>
</html>
