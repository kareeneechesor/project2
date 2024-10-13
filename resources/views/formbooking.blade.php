<!-- resources/views/booking/create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center mb-4">Booking Form</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('booking.store') }}" method="POST">
        @csrf

        <!-- Name -->
        <div class="mb-3">
            <label for="name" class="form-label">ชื่อ</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
            @error('name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <!-- Phone -->
        <div class="mb-3">
            <label for="phone" class="form-label">เบอร์โทร</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" required>
            @error('phone')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <!-- Booking Date -->
        <div class="mb-3">
            <label for="booking_date" class="form-label">วันที่</label>
            <input type="date" class="form-control" id="booking_date" name="booking_date" value="{{ old('booking_date') }}" required>
            @error('booking_date')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <!-- Booking Time -->
        <div class="mb-3">
            <label for="booking_time" class="form-label">เวลา</label>
            <input type="time" class="form-control" id="booking_time" name="booking_time" value="{{ old('booking_time') }}" required>
            @error('booking_time')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <!-- Details -->
        <div class="mb-3">
            <label for="details" class="form-label">รายละเอียดเพิ่มเติม</label>
            <textarea class="form-control" id="details" name="details">{{ old('details') }}</textarea>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">ยืนยันการจอง</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
