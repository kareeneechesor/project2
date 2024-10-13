@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center" style="margin-top: 90px;">กรอกข้อมูลการจอง</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('booking.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">ชื่อ</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">เบอร์โทร</label>
            <input type="text" class="form-control" id="phone" name="phone" required>
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">วันที่</label>
            <input type="date" class="form-control" id="date" name="date" required>
        </div>
        <div class="mb-3">
            <label for="time" class="form-label">เวลา</label>
            <input type="time" class="form-control" id="time" name="time" required>
        </div>
        <div class="mb-3">
            <label for="details" class="form-label">รายละเอียด</label>
            <textarea class="form-control" id="details" name="details" rows="4"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">ยืนยันการจอง</button>
    </form>
</div>
@endsection
