@extends('layouts.back')

@section('content')
<div class="container mt-5">
    <h1 style="margin-top: 90px;">รายการจองแพคเกจ</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('package-bookings.create') }}" class="btn btn-primary">เพิ่มการจองแพคเกจ</a>
    </div>

    <table class="table table-bordered mt-3">
        <thead class="table-light">
            <tr>
                <th>ลำดับ</th>
                <th>ชื่อ</th>
                <th>เบอร์โทร</th>
                <th>วันที่การจอง</th>
                <th>เวลา</th>
                <th>ชื่อแพคเกจ</th>
                <th>ราคา</th>
                <th>จำนวนครั้งที่ใช้</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bookings as $index => $booking)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $booking->name }}</td>
                    <td>{{ $booking->phone }}</td>
                    <td>{{ \Carbon\Carbon::parse($booking->booking_date)->format('d/m/Y') }}</td>
                    <td>{{ \Carbon\Carbon::parse($booking->booking_time)->format('H:i') }}</td>
                    <td>{{ $booking->service }}</td>
                    <td>{{ number_format($booking->price, 2) }} บาท</td>
                    <td>{{ $booking->times_used }}</td>
                    <td>
                        <a href="{{ route('package-bookings.edit', $booking->id) }}" class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i> แก้ไข
                        </a>
                        <form action="{{ route('package-bookings.destroy', $booking->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('คุณแน่ใจว่าต้องการลบ?');">
                                <i class="fas fa-trash"></i> ลบ
                            </button>
                        </form>
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
