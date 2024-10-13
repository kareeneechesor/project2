@extends('layouts.back')

@section('content')
<div class="container">
    <h1 style="margin-top: 90px;">แสดงแพ็คเกจ</h1>

    <form action="{{ route('packages.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">ชื่อแพคเกจ</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">รายละเอียด</label>
            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">รูป</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">ราคา</label>
            <input type="number" class="form-control" id="price" name="price" required>
        </div>

        <div class="mb-3">
            <label for="usage_count" class="form-label">จำนวนครั้งที่ใช้</label>
            <input type="number" class="form-control" id="usage_count" name="usage_count" required>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">สถานะ</label>
            <select class="form-control" id="status" name="status" required>
                <option value="available">Available</option>
                <option value="unavailable">Unavailable</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Save Package</button>
    </form>
</div>
@endsection
