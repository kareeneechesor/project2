@extends('layouts.back')

@section('content')
    <div class="container mt-4">
        <h1>Edit Promotion</h1>
        <div class="card shadow-sm border-light">
            <div class="card-body">
                <form action="{{ route('promotions.update', $promotion->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">ชื่อ</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $promotion->name) }}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image">รูป</label>
                                <input type="file" class="form-control-file" id="image" name="image">
                                @if($promotion->image)
                                    <img src="{{ Storage::url($promotion->image) }}" alt="{{ $promotion->name }}" width="100" class="mt-2">
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                          
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="end_date">วันที่สิ้นสุด</label>
                                <input type="date" class="form-control" id="end_date" name="end_date" value="{{ old('end_date', $promotion->end_date) }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label for="details">รายละเอียด</label>
                        <textarea class="form-control" id="details" name="details" rows="4" required>{{ old('details', $promotion->details) }}</textarea>
                    </div>
                    <div class="form-group mb-4">
                        <label for="status">สถานะ</label>
                        <select class="form-control" id="status" name="status" required>
                            <option value="ใช้งานได้" {{ old('status', $promotion->status) == 'ใช้งานได้' ? 'selected' : '' }}>ใช้งานได้</option>
                            <option value="หมดเขต" {{ old('status', $promotion->status) == 'หมดเขต' ? 'selected' : '' }}>หมดเขต</option>
                        </select>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Update Promotion</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
