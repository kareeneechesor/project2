@extends('layouts.back')

@section('content')
<div class="container">
    <h1 style="margin-top: 90px;">รายการบริการ</h1>
    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('services.create') }}" class="btn btn-success">เพิ่มบริการใหม่</a>
    </div>
    <table class="table table-striped" style="font-size: 0.875rem;">
        <thead>
            <tr>
                <th>ลำดับ</th>
                <th>ชื่อบริการ</th>
                <th style="width: 20%;">รายละเอียด</th> <!-- ปรับขนาดคอลัมน์ -->
                <th>รูป</th>
                <th>ราคา</th>
                <th>เวลานวด</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($services as $service)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $service->name }}</td>
                    <td style="width: 20%;">{{ $service->details }}</td> <!-- ปรับขนาดคอลัมน์ -->
                    <td>
                        @if($service->image)
                            <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->name }}" width="100">
                        @else
                            ไม่มีรูป
                        @endif
                    </td>
                    <td>{{ $service->price }} บาท</td>
                    <td>{{ $service->duration }} ชั่วโมง</td>
                    <td class="text-center">
                        <a href="{{ route('services.edit', $service->id) }}" class="btn btn-warning btn-sm" title="Edit">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('services.destroy', $service->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete" onclick="return confirm('Are you sure you want to delete this service?');">
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
