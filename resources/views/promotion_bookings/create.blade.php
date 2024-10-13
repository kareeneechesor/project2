@extends('layouts.back')

@section('content')
<div class="container">
    <h1 style="margin-top: 90px;">เพิ่มข้อมูลการจอง</h1>
    <div class="d-flex justify-content-end mb-3">
        <!-- You can add a button or link here if needed -->
    </div>

    <!-- Card for the booking form -->
    <div class="card">
        <div class="card-body">
            <!-- Form สำหรับการเพิ่มการจองใหม่ -->
            <form action="{{ route('promotion_bookings.store') }}" method="POST">
                @csrf

                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">ชื่อ</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="phone">เบอร์โทร</label>
                            <input type="text" name="phone" id="phone" class="form-control" required>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="date">วันที่</label>
                            <input type="date" name="booking_date" id="date" class="form-control" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="time">เวลา</label>
                            <input type="time" name="booking_time" id="time" class="form-control" required>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="service">ชื่อโปรโมชั่น</label>
                            <input type="text" name="service" id="service" class="form-control" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="price">ราคา</label>
                            <input type="number" name="price" id="price" class="form-control" required>
                        </div>
                    </div>
                </div>

                <div class="form-group mb-3">
                    <label for="details">รายละเอียดเพิ่มเติม</label>
                    <textarea name="details" id="details" class="form-control"></textarea>
                </div>

                <div class="d-flex justify-content-center mt-4">
                    <button type="submit" class="btn btn-success">บันทึก</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
