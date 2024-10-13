@extends('layouts.back')

@section('content')
<div class="container">
    <h1>รายละเอียดข้อมูลติดต่อ</h1>
    <div class="card">
        <div class="card-header">
            <h2>{{ $contact->name }}</h2>
        </div>
        <div class="card-body">
            <p><strong>อีเมล:</strong> {{ $contact->email }}</p>
            <p><strong>ข้อความ:</strong> {{ $contact->message }}</p>
        </div>
    </div>
    <a href="{{ route('contact.index') }}" class="btn btn-primary mt-3">กลับ</a>
</div>
@endsection
