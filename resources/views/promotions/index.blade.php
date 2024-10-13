@extends('layouts.back')

@section('content')
    <div class="container">
        <h1 style="margin-top: 90px;">แสดงโปรโมชั่น</h1>
        <div class="d-flex justify-content-end mb-3">
            <a href="{{ route('promotions.create') }}" class="btn btn-primary">+เพิ่มข้อมูล</a>
        </div>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ลำดับ</th> <!-- Added column for sequence -->
                    <th>ชื่อ</th>
                    <th>รูป</th>
                    <th>วันที่เริ่ม</th>
                    <th>วันที่สิ้นสุด</th>
                    <th>สถานะ</th>
                    <th>รายละเอียด</th>
                    <th style="width: 150px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($promotions as $index => $promotion)
                    <tr>
                        <td>{{ $index + 1 }}</td> <!-- Displaying the sequence number -->
                        <td>{{ $promotion->name }}</td>
                        <td>
                            @if($promotion->image)
                                <img src="{{ Storage::url($promotion->image) }}" class="img-fluid" style="max-width: 100px;">
                            @else
                                <p>No image available</p>
                            @endif
                        </td>
                        <td>{{ $promotion->start_date }}</td>
                        <td>{{ $promotion->end_date }}</td>
                        <td>{{ $promotion->status }}</td>
                        <td>{{ $promotion->details }}</td>
                        <td class="text-center">
                            <a href="{{ route('promotions.edit', $promotion->id) }}" class="btn btn-warning btn-sm" title="Edit">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('promotions.destroy', $promotion->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete" onclick="return confirm('Are you sure you want to delete this promotion?');">
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
