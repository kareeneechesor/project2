@extends('layouts.back')

@section('content')
<div class="container">
    <h1 style="margin-top: 90px;">แก้ไขข้อมูลการจอง</h1>
    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('promotions.create') }}" class="btn btn-primary">+เพิ่มข้อมูล</a>
    </div>

    <!-- Form สำหรับการแก้ไขการจอง -->
    <form action="{{ route('promotion_bookings.update', $booking->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label for="name">ชื่อ</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $booking->name }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="phone">เบอร์โทร</label>
            <input type="text" name="phone" id="phone" class="form-control" value="{{ $booking->phone }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="date">วันที่</label>
            <input type="date" name="booking_date" id="date" class="form-control" value="{{ $booking->booking_date }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="time">เวลา</label>
            <input type="time" name="booking_time" id="time" class="form-control" value="{{ $booking->booking_time }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="service">ชื่อโปรโมชั่น</label>
            <input type="text" name="service" id="service" class="form-control" value="{{ $booking->service }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="price">ราคา</label>
            <input type="number" name="price" id="price" class="form-control" value="{{ $booking->price }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="details">รายละเอียดเพิ่มเติม</label>
            <textarea name="details" id="details" class="form-control">{{ $booking->details }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update Booking</button>
    </form>
</div>
@endsection
