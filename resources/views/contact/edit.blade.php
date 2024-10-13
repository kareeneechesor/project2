@extends('layouts.back')

@section('content')
<div class="container mt-5">
    <h1 style="margin-top: 90px;">แก้ไขข้อมูลติดต่อ</h1>

    <form action="{{ route('contact.update', $contact->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- This is important for updating resources -->
        
        <div class="form-group">
            <label for="name">ชื่อของคุณ</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $contact->name }}" required>
        </div>
        <div class="form-group">
            <label for="email">อีเมลของคุณ</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $contact->email }}" required>
        </div>
        <div class="form-group">
            <label for="message">ข้อความของคุณ</label>
            <textarea class="form-control" id="message" name="message" rows="5" required>{{ $contact->message }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
    </form>
    
</div>
@endsection
