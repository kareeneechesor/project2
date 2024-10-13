@extends('layouts.back')

@section('content')
<div class="container mt-5">
    <h1 style="margin-top: 90px;">เพิ่มตารางเวลา</h1>

    <form method="POST" action="{{ route('schedules.store') }}">
        @csrf

        <div class="mb-3">
            <label for="employee_id" class="form-label">พนักงาน</label>
            <select class="form-control" id="employee_id" name="employee_id" required>
                <option value="">เลือกพนักงาน</option>
                @foreach($employees as $employee)
                    <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="schedule_date" class="form-label">วันที่</label>
            <input type="date" class="form-control" id="schedule_date" name="schedule_date" required>
        </div>

        <div class="mb-3">
            <label for="start_time" class="form-label">เวลาเริ่มต้น</label>
            <input type="time" class="form-control" id="start_time" name="start_time" required>
        </div>

        <div class="mb-3">
            <label for="end_time" class="form-label">เวลาสิ้นสุด</label>
            <input type="time" class="form-control" id="end_time" name="end_time" required>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">สถานะ</label>
            <select class="form-control" id="status" name="status" required>
                <option value="active">ทำงาน</option>
                <option value="inactive">ไม่ทำงาน</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">เพิ่มเวลา</button>
        <a href="{{ route('schedules.index') }}" class="btn btn-secondary">กลับ</a>
    </form>
</div>
@endsection
