@extends('layouts.back')

@section('content')
<div class="container">
    <h1 style="margin-top: 90px;">แก้ไขการจอง</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('bookings.update', $booking->id) }}" method="POST">
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
            <label for="booking_date" class="form-label">วันที่จอง</label>
            <input type="date" class="form-control" id="booking_date" name="booking_date" value="{{ old('booking_date', $booking->booking_date) }}" required>
        </div>

        <div class="mb-3">
            <label for="booking_time" class="form-label">เวลา</label>
            <input type="time" class="form-control" id="booking_time" name="booking_time" value="{{ old('booking_time', $booking->booking_time) }}" required>
        </div>

        <div class="mb-3">
            <label for="service" class="form-label">บริการ</label>
            <input type="text" class="form-control" id="service" name="service" value="{{ old('service', $booking->service) }}" required>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">ราคา</label>
            <input type="number" class="form-control" id="price" name="price" step="0.01" value="{{ old('price', $booking->price) }}" required>
        </div>

        <div class="mb-3">
            <label for="employee" class="form-label">พนักงาน</label>
            <input type="text" class="form-control" id="employee" name="employee" value="{{ old('employee', $booking->employee) }}" required>
        </div>

        <div class="mb-3">
            <label for="details" class="form-label">รายละเอียด</label>
            <textarea class="form-control" id="details" name="details">{{ old('details', $booking->details) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">สถานะ</label>
            <select class="form-control" id="status" name="status" required>
                <option value="pending" {{ $booking->status == 'pending' ? 'selected' : '' }}>รออนุมัติ</option>
                <option value="confirmed" {{ $booking->status == 'confirmed' ? 'selected' : '' }}>อนุมัติแล้ว</option>
                <option value="canceled" {{ $booking->status == 'canceled' ? 'selected' : '' }}>ยกเลิก</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">อัปเดตการจอง</button>
        <a href="{{ route('bookings.index') }}" class="btn btn-secondary">กลับ</a>
    </form>
</div>
@endsection
