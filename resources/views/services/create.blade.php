@extends('layouts.back')

@section('content')
<div class="container">
    <h1 style="margin-top: 90px;">เพิ่มบริการใหม่</h1>
    <div class="card mt-4">
        <div class="card-body">
            <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="name">ชื่อบริการ:</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="price">ราคา:</label>
                        <input type="number" class="form-control" id="price" name="price" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="duration">เวลานวด (นาที):</label>
                        <input type="number" class="form-control" id="duration" name="duration" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="image">รูปภาพ:</label>
                        <input type="file" class="form-control" id="image" name="image">
                    </div>
                </div>

                <div class="form-group">
                    <label for="details">รายละเอียด:</label>
                    <textarea class="form-control" id="details" name="details" rows="4"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">บันทึก</button>
            </form>
        </div>
    </div>
</div>
@endsection
