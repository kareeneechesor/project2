@extends('layouts.back')

@section('content')
<div class="container mt-5">
    <h1 style="margin-top: 90px;">เพิ่มเวลา</h1>

    <form action="{{ route('times.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="time" class="form-label">เวลา</label>
            <input type="time" class="form-control" id="time" name="time" required>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">สถานะ</label>
            <select class="form-select" id="status" name="status" required>
                <option value="available">ว่าง</option>
                <option value="booked">ไม่ว่าง</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">บันทึกเวลา</button>
    </form>
</div>
@endsection
