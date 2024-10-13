@extends('layouts.back')

@section('content')
<div class="container">
    <h1 style="margin-top: 90px;">แสดงข้อมูลพนักงาน</h1>
    
    <!-- ปุ่มเพิ่มข้อมูลอยู่ด้านขวา -->
    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('employees.create') }}" class="btn btn-primary">+เพิ่มข้อมูล</a>
    </div>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>รูป</th>
                <th>ชื่อพนักงาน</th>
                <th>Email</th>
                <th>ตำแหน่ง</th>
                <th>เบอร์โทร</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employees as $employee)
            <tr>
                <td>{{ $employee->id }}</td>
                <td>
                    @if($employee->image)
                        <img src="{{ asset('storage/' . $employee->image) }}" alt="{{ $employee->name }}" width="100">
                    @else
                        ไม่มีรูป
                    @endif
                </td>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->email }}</td>
                <td>{{ $employee->position }}</td>
                <td>{{ $employee->phone }}</td>
                <td class="text-center">
                    <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-warning btn-sm" title="Edit">
                        <i class="fas fa-edit"></i>
                    </a>
                    <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" title="Delete" onclick="return confirm('คุณแน่ใจหรือไม่ว่าต้องการลบพนักงานนี้?');">
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
