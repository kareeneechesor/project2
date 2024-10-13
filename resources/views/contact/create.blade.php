@extends('layouts.back')

@section('content')
<div class="container mt-5">
    <h1 style="margin-top: 90px;">เพิ่มข้อมูลติดต่อ</h1>

    <form action="{{ route('contacts.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">ชื่อของคุณ</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">อีเมลของคุณ</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="message">ข้อความของคุณ</label>
            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">ส่งข้อความ</button>
    </form>
</div>
@endsection
