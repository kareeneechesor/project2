@extends('layouts.back')

@section('content')
<div class="container mt-5">
    <h1 style="margin-top: 90px;">แก้ไขการจองแพคเกจ</h1>

    <form method="POST" action="{{ route('package-bookings.update', $booking->id) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">ชื่อ</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $booking->name) }}" required>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">เบอร์โทร</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone', $booking->phone) }}" required>
        </div>

        <div class="mb-3">
            <label for="booking_date" class="form-label">วันที่การจอง</label>
            <input type="date" class="form-control" id="booking_date" name="booking_date" value="{{ old('booking_date', $booking->booking_date) }}" required>
        </div>

        <div class="mb-3">
            <label for="booking_time" class="form-label">เวลา</label>
            <input type="time" class="form-control" id="booking_time" name="booking_time" value="{{ old('booking_time', $booking->booking_time) }}" required>
        </div>

        <div class="mb-3">
            <label for="service" class="form-label">ชื่อแพคเกจ</label>
            <input type="text" class="form-control" id="service" name="service" value="{{ old('service', $booking->service) }}" required>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">ราคา</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ old('price', $booking->price) }}" required>
        </div>

        <div class="mb-3">
            <label for="times_used" class="form-label">จำนวนครั้งที่ใช้บริการ</label>
            <input type="number" class="form-control" id="times_used" name="times_used" value="{{ old('times_used', $booking->times_used) }}" required>
        </div>

        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-warning">อัปเดตการจอง</button>
            <a href="{{ route('package-bookings.index') }}" class="btn btn-secondary ml-2">ยกเลิก</a>
        </div>
    </form>
</div>
@endsection
