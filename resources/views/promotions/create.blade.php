@extends('layouts.back')

@section('content')
    <div class="container mt-4">
        <h1 style="margin-top: 90px;">เพิ่มโปรโมชั่น</h1>
        <div class="card shadow-sm border-light">
            <div class="card-body">
                <form action="{{ route('promotions.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">ชื่อ</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image">รูป</label>
                                <input type="file" class="form-control-file" id="image" name="image">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="start_date">วันที่เริ่ม</label>
                                <input type="date" class="form-control" id="start_date" name="start_date" value="{{ old('start_date') }}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="end_date">วันที่สิ้นสุด</label>
                                <input type="date" class="form-control" id="end_date" name="end_date" value="{{ old('end_date') }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label for="details">รายละเอียด</label>
                        <textarea class="form-control" id="details" name="details" rows="4" required>{{ old('details') }}</textarea>
                    </div>
                    <div class="form-group mb-4">
                        <label for="status">สถานะ</label>
                        <select class="form-control" id="status" name="status" required>
                            <option value="ใช้งานได้" {{ old('status') == 'ใช้งานได้' ? 'selected' : '' }}>ใช้งานได้</option>
                            <option value="หมดเขต" {{ old('status') == 'หมดเขต' ? 'selected' : '' }}>หมดเขต</option>
                        </select>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">บันทึก</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
