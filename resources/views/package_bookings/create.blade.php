@extends('layouts.back')

@section('content')
<div class="container mt-5">
    <h1 style="margin-top: 90px;">เพิ่มการจองแพคเกจ</h1>

    <form method="POST" action="{{ route('package-bookings.store') }}">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">ชื่อ</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">เบอร์โทร</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" required>
            @error('phone')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="booking_date" class="form-label">วันที่การจอง</label>
            <input type="date" class="form-control" id="booking_date" name="booking_date" value="{{ old('booking_date') }}" required>
            @error('booking_date')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="booking_time" class="form-label">เวลา</label>
            <input type="time" class="form-control" id="booking_time" name="booking_time" value="{{ old('booking_time') }}" required>
            @error('booking_time')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="service" class="form-label">ชื่อแพคเกจ</label>
            <input type="text" class="form-control" id="service" name="service" value="{{ old('service') }}" required>
            @error('service')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">ราคา</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ old('price') }}" required>
            @error('price')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="times_used" class="form-label">จำนวนครั้งที่ใช้บริการ</label>
            <input type="number" class="form-control" id="times_used" name="times_used" value="{{ old('times_used') }}" required>
            @error('times_used')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">บันทึกการจอง</button>
            <a href="{{ route('package-bookings.index') }}" class="btn btn-secondary ml-2">ยกเลิก</a>
        </div>
    </form>
</div>
@endsection
