@extends('layouts.back')

@section('title', 'Appointment Calendar')

@section('content')
    <div id='calendar'></div>
@endsection

@section('scripts')
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
                initialView: 'timeGridWeek',
                editable: true,
                events: @json($events), // ส่งข้อมูลนัดหมายจาก Controller
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
@endsection
