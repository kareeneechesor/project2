@extends('layouts.back')

@section('content')
<div class="container mt-5">
    <h1 style="margin-top: 90px;">ตารางเวลาของพนักงาน</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('schedules.create') }}" class="btn btn-primary">+ เพิ่มเวลา</a>
    </div>

    <table class="table table-bordered mt-3">
        <thead class="table-light">
            <tr>
                <th>ลำดับ</th>
                <th>พนักงาน</th>
                <th>วันที่</th>
                <th>เวลาเริ่มต้น</th>
                <th>เวลาสิ้นสุด</th>
                <th>สถานะ</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($schedules as $index => $schedule)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $schedule->employee->name }}</td>
                    <td>{{ \Carbon\Carbon::parse($schedule->schedule_date)->format('d/m/Y') }}</td>
                    <td>{{ \Carbon\Carbon::parse($schedule->start_time)->format('H:i') }}</td>
                    <td>{{ \Carbon\Carbon::parse($schedule->end_time)->format('H:i') }}</td>
                    <td>
                        @if($schedule->status == 'active')
                            ว่าง <!-- Available -->
                        @else
                            ไม่ว่าง <!-- Not Available -->
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('schedules.edit', $schedule->id) }}" class="btn btn-warning btn-sm" title="แก้ไข">
                            <i class="fas fa-edit"></i> <!-- Edit Icon -->
                        </a>
                        <form action="{{ route('schedules.destroy', $schedule->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('คุณแน่ใจว่าต้องการลบเวลา?');" title="ลบ">
                                <i class="fas fa-trash"></i> <!-- Delete Icon -->
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
