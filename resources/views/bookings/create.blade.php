@extends('layouts.back')

@section('content')
<div class="container mt-5">
    <h1 style="margin-top: 90px;">เพิ่มการจอง</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <form action="{{ route('bookings.store') }}" method="POST">
                @csrf

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="name" class="form-label">ชื่อ</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="ชื่อ-นามสกุล" required>
                    </div>

                    <div class="col-md-6">
                        <label for="phone" class="form-label">เบอร์โทรศัพท์</label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="0XXXXXXXXX" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="service" class="form-label">บริการ</label>
                        <input type="text" class="form-control" id="service" name="service" placeholder="กรุณาเลือกบริการ" required>
                    </div>

                    <div class="col-md-6">
                        <label for="booking_time" class="form-label">เวลา</label>
                        <input type="time" class="form-control" id="booking_time" name="booking_time" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="booking_date" class="form-label">วันที่</label>
                        <input type="date" class="form-control" id="booking_date" name="booking_date" required>
                    </div>

                    <div class="col-md-6">
                        <label for="price" class="form-label">ราคา</label>
                        <input type="number" class="form-control" id="price" name="price" placeholder="กรุณาใส่ราคา" step="0.01" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="employee" class="form-label">พนักงาน</label>
                        <input type="text" class="form-control" id="employee" name="employee" placeholder="กรุณาเลือกพนักงาน" required>
                    </div>

                    <div class="col-md-6">
                        <label for="status" class="form-label">สถานะ</label>
                        <select class="form-control" id="status" name="status" required>
                            <option value="pending">รออนุมัติ</option>
                            <option value="confirmed">อนุมัติแล้ว</option>
                            <option value="canceled">ยกเลิก</option>
                        </select>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="details" class="form-label">รายละเอียด</label>
                    <textarea class="form-control" id="details" name="details" rows="3" placeholder="กรุณาใส่รายละเอียดเพิ่มเติม"></textarea>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">บันทึกการจอง</button>
                    <a href="{{ route('bookings.index') }}" class="btn btn-secondary">กลับ</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
