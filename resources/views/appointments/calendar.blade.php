<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Calendar</title>

    <!-- FullCalendar CSS -->
    <link href='{{ asset('assets/fullcalendar/core/main.css') }}' rel='stylesheet' />
    <link href='{{ asset('assets/fullcalendar/daygrid/main.css') }}' rel='stylesheet' />
    <link href='{{ asset('assets/fullcalendar/timegrid/main.css') }}' rel='stylesheet' />

    <!-- FullCalendar JS -->
    <script src='{{ asset('assets/fullcalendar/core/main.js') }}'></script>
    <script src='{{ asset('assets/fullcalendar/interaction/main.js') }}'></script>
    <script src='{{ asset('assets/fullcalendar/daygrid/main.js') }}'></script>
    <script src='{{ asset('assets/fullcalendar/timegrid/main.js') }}'></script>
</head>
<body>
    <div id='calendar'></div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                plugins: [ 'interaction', 'dayGrid', 'timeGrid' ],
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'
                },
                initialView: 'timeGridWeek', // เลือกแสดงเป็นสัปดาห์
                editable: true,
                events: @json($events), // โหลดข้อมูลนัดหมายจาก Controller
                eventClick: function(info) {
                    info.jsEvent.preventDefault(); // ไม่ให้ลิงก์ทำงานตามปกติ
                    if (info.event.url) {
                        window.open(info.event.url); // เปิดลิงก์เมื่อคลิกที่เหตุการณ์
                    }
                }
            });
            calendar.render();
        });
    </script>
</body>
</html>
