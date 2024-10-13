@extends('layouts.back')

@section('content')
<div class="container">
    <h1 style="margin-top: 90px;">แสดงข้อมูลการจองโปรโมชั่น</h1>
    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('promotion_bookings.create') }}" class="btn btn-primary">+เพิ่มข้อมูล</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>ชื่อ</th>
                <th>เบอร์โทร</th>
                <th>ชื่อโปรโมชั่น</th>
                <th>ราคา</th>
                <th>วันที่</th>
                <th>เวลา</th>
                <th>รายละเอียด</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bookings as $booking)
            <tr>
                <td>{{ $booking->id }}</td>
                <td>{{ $booking->name }}</td>
                <td>{{ $booking->phone }}</td>
                <td>{{ $booking->promotion->name ?? 'N/A' }}</td>
                <td>{{ $booking->promotion->price ?? 'N/A' }}</td>
                <td>{{ \Carbon\Carbon::parse($booking->booking_date_time)->format('d/m/Y') }}</td>
                <td>{{ \Carbon\Carbon::parse($booking->booking_date_time)->format('H:i') }}</td>
                <td>{{ $booking->details }}</td>
                <td>
                    <a href="{{ route('promotion_bookings.edit', $booking->id) }}" class="btn btn-warning btn-sm" title="Edit">
                        <i class="fas fa-edit"></i>
                    </a>
                    <form action="{{ route('promotion_bookings.destroy', $booking->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" title="Delete" onclick="return confirm('Are you sure you want to delete this booking?');">
                            <i class="fas fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
