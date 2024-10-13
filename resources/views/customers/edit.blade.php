@extends('layouts.back')

@section('content')
<div class="container mt-5">
    <h1>แก้ไขข้อมูลลูกค้า</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('customers.update', $customer->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="name" class="form-label">ชื่อ-นามสกุล</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $customer->name }}" required>
            </div>
            <div class="col-md-6">
                <label for="gender" class="form-label">เพศ</label>
                <select class="form-select" id="gender" name="gender" required>
                    <option value="male" {{ $customer->gender == 'male' ? 'selected' : '' }}>ชาย</option>
                    <option value="female" {{ $customer->gender == 'female' ? 'selected' : '' }}>หญิง</option>
                </select>
            </div>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">เบอร์โทรศัพท์</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ $customer->phone }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">อีเมล</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $customer->email }}" required>
        </div>

        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
            <a href="{{ route('customers.index') }}" class="btn btn-danger">ยกเลิก</a>
        </div>
    </form>
</div>
@endsection
