@extends('layouts.back')

@section('content')
<div class="container mt-5">
    <h1 style="margin-top: 90px;">เพิ่มข้อมูลลูกค้า</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('customers.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="name" class="form-label">ชื่อ-นามสกุล</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required>
            </div>
            <div class="col-md-6">
                <label for="gender" class="form-label">เพศ</label>
                <select class="form-select" id="gender" name="gender" required>
                    <option value="male">ชาย</option>
                    <option value="female">หญิง</option>
                </select>
            </div>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">เบอร์โทรศัพท์</label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">อีเมล</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
        </div>

        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
            <a href="{{ route('customers.index') }}" class="btn btn-danger">ยกเลิก</a>
        </div>
    </form>
</div>
@endsection
