@extends('layouts.back')

@section('content')
<div class="container mt-5">
    <h1 style="margin-top: 90px;">เวลาการบริการ</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('times.create') }}" class="btn btn-primary">+ เพิ่มเวลา</a>
    </div>

    <table class="table table-bordered mt-3">
        <thead class="table-light">
            <tr>
                <th>ลำดับ</th>
                <th>เวลา</th>
                <th>สถานะ</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($times as $index => $time)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ \Carbon\Carbon::parse($time->time)->format('H:i') }}</td>
                    <td>
                        @if($time->status === 'available')
                            ว่าง
                        @else
                            ไม่ว่าง
                        @endif
                    </td>
                    <td>
                        <div class="d-flex justify-content-start">
                            <a href="{{ route('times.edit', $time->id) }}" class="btn btn-warning btn-sm me-2" title="แก้ไข">
                                <i class="fas fa-edit"></i> <!-- Edit Icon -->
                            </a>
                            <form action="{{ route('times.destroy', $time->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('คุณแน่ใจว่าต้องการลบเวลานี้?');" title="ลบ">
                                    <i class="fas fa-trash"></i> <!-- Delete Icon -->
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
