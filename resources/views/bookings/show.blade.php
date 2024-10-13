<!-- resources/views/bookings/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h2>ข้อมูลการจองคิว</h2>
    <p><strong>ชื่อ:</strong> {{ $booking->name }}</p>
    <p><strong>เบอร์โทร:</strong> {{ $booking->phone }}</p>
    <p><strong>วันที่:</strong> {{ \Carbon\Carbon::parse($booking->booking_date)->format('d/m/Y') }}</p>
    <p><strong>เวลา:</strong> {{ $booking->booking_time }}</p>
    <p><strong>ประเภทงานบริการ:</strong> {{ $booking->service }}</p>
    <p><strong>สถานะ:</strong> {{ $booking->status }}</p>
    <p><strong>รายละเอียดเพิ่มเติม:</strong> {{ $booking->details }}</p>
    <a href="{{ route('bookings.index') }}" class="btn btn-primary">กลับไปยังรายการจอง</a>
</div>
@endsection
