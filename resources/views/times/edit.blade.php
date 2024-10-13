@extends('layouts.back')

@section('content')
<div class="container mt-5">
    <h1 style="margin-top: 90px;">แก้ไขเวลา</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('times.update', $time->id) }}">
        @csrf
        @method('PUT') <!-- ใช้ PUT สำหรับการอัปเดต -->

        <div class="mb-3">
            <label for="time" class="form-label">เวลา</label>
            <input type="time" class="form-control" id="time" name="time" value="{{ old('time', \Carbon\Carbon::parse($time->time)->format('H:i')) }}" required>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">สถานะ</label>
            <select class="form-control" id="status" name="status" required>
                <option value="available" {{ old('status', $time->status) == 'available' ? 'selected' : '' }}>ว่าง</option>
                <option value="unavailable" {{ old('status', $time->status) == 'unavailable' ? 'selected' : '' }}>ไม่ว่าง</option>
            </select>
        </div>

        <button type="submit" class="btn btn-custom">อัปเดตเวลา</button>
        <a href="{{ route('times.index') }}" class="btn btn-secondary">กลับ</a>
    </form>
</div>

<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
@endsection
