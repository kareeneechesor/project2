@extends('layouts.back')

@section('content')
    <div class="container mt-4">
        <h1>Edit Employee</h1>
        <div class="card shadow-sm border-light">
            <div class="card-body">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('employees.update', $employee->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group mb-3">
                        <label for="name">ชื่อพนักงาน</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name', $employee->name) }}" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="email">อีเมล</label>
                        <input type="email" name="email" class="form-control" value="{{ old('email', $employee->email) }}" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="position">ตำแหน่ง</label>
                        <input type="text" name="position" class="form-control" value="{{ old('position', $employee->position) }}" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="phone">เบอร์โทร</label>
                        <input type="text" name="phone" class="form-control" value="{{ old('phone', $employee->phone) }}" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="image">รูปภาพพนักงาน</label>
                        @if($employee->image)
                            <div class="mb-3">
                                <img src="{{ asset('storage/' . $employee->image) }}" alt="{{ $employee->name }}" width="150">
                            </div>
                        @endif
                        <input type="file" name="image" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">บันทึกการแก้ไข</button>
                    <a href="{{ route('employees.index') }}" class="btn btn-secondary">ยกเลิก</a>
                </form>
            </div>
        </div>
    </div>
@endsection
