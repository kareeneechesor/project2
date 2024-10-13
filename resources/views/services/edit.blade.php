@extends('layouts.back')

@section('content')
<div class="container">
    <h1 style="margin-top: 90px;">แก้ไขบริการ</h1>
    <form action="{{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">ชื่อบริการ:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $service->name }}" required>
        </div>
        <div class="form-group">
            <label for="details">รายละเอียด:</label>
            <textarea class="form-control" id="details" name="details">{{ $service->details }}</textarea>
        </div>
        <div class="form-group">
            <label for="image">รูปภาพ:</label>
            <input type="file" class="form-control" id="image" name="image">
            @if($service->image)
                <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->name }}" width="100" class="mt-2">
            @endif
        </div>
        <div class="form-group">
            <label for="price">ราคา:</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ $service->price }}" required>
        </div>
        <div class="form-group">
            <label for="duration">เวลานวด (นาที):</label>
            <input type="number" class="form-control" id="duration" name="duration" value="{{ $service->duration }}" required>
        </div>
        <button type="submit" class="btn btn-primary">อัพเดท</button>
    </form>
</div>
@endsection
