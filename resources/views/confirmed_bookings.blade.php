@extends('layouts.back')

@section('content')
<div class="container mt-5">
    <h1 style="margin-top: 90px;">ดำเนินการแล้ว</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered mt-3">
        <thead class="table-light" style="background-color: #aca9a9; color: #0e0d0d;">
            <tr>
                <th>ลำดับ</th>
                <th>ชื่อ</th>
                <th>เบอร์โทร</th>
                <th>วันที่</th>
                <th>เวลา</th>
                <th>บริการ</th>
                <th>ราคา</th>
                <th>พนักงาน</th>
                <th>สถานะ</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($confirmedBookings as $index => $booking)
                <tr id="booking-{{ $booking->id }}">
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $booking->name }}</td>
                    <td>{{ $booking->phone }}</td>
                    <td>{{ \Carbon\Carbon::parse($booking->booking_date)->format('d/m/Y') }}</td>
                    <td>{{ $booking->booking_time }}</td>
                    <td>{{ $booking->service }}</td>
                    <td>{{ number_format($booking->price, 2) }} บาท</td>
                    <td>{{ $booking->employee }}</td>
                    <td>
                        <span class="badge bg-success">อนุมัติแล้ว</span>
                    </td>
                    <td>
                        <div class="d-flex justify-content-start">
                            <button class="btn btn-info btn-sm me-2" data-bs-toggle="modal" data-bs-target="#detailsModal-{{ $booking->id }}">
                                <i class="fas fa-eye" style="font-size: 0.8em;"></i> <!-- Eye icon here -->
                            </button>
                            <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('คุณแน่ใจหรือไม่ว่าต้องการลบข้อมูลนี้?');">
                                    <i class="fas fa-trash" style="font-size: 0.8em;"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>

                <!-- Booking Details Modal -->
                <div class="modal fade" id="detailsModal-{{ $booking->id }}" tabindex="-1" aria-labelledby="detailsModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="detailsModalLabel">รายละเอียดการจอง</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p><strong>ชื่อ:</strong> {{ $booking->name }}</p>
                                <p><strong>เบอร์โทร:</strong> {{ $booking->phone }}</p>
                                <p><strong>วันที่การจอง:</strong> {{ \Carbon\Carbon::parse($booking->booking_date)->format('d/m/Y') }}</p>
                                <p><strong>เวลา:</strong> {{ $booking->booking_time }}</p>
                                <p><strong>บริการ:</strong> {{ $booking->service }}</p>
                                <p><strong>ราคา:</strong> {{ number_format($booking->price, 2) }} บาท</p>
                                <p><strong>พนักงาน:</strong> {{ $booking->employee }}</p>
                                <p><strong>รายละเอียด:</strong> {{ $booking->details }}</p>
                                <p><strong>สถานะ:</strong> {{ $booking->status }}</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </tbody>
    </table>
    <div class="mt-3">
        {{ $confirmedBookings->links() }} <!-- Pagination links -->
    </div>
</div>
@endsection
