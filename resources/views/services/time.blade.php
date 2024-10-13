@extends('layouts.back')

@section('content')
<div class="container mt-5">
    <h1>เวลาในการบริการ</h1>

    <table class="table table-bordered mt-3">
        <thead class="table-light" style="background-color: #aca9a9; color: #0e0d0d;">
            <tr>
                <th>ลำดับ</th>
                <th>เวลา</th>
                <th>สถานะ</th>
            </tr>
        </thead>
        <tbody>
            @foreach($times as $time)
                <tr>
                    <td>{{ $time['id'] }}</td>
                    <td>{{ $time['time'] }}</td>
                    <td>
                        @if($time['status'] === 'available')
                            <span class="badge bg-success">ว่าง</span>
                        @else
                            <span class="badge bg-danger">ไม่ว่าง</span>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
