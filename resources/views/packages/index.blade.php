@extends('layouts.back')

@section('content')
<div class="container">
    <h1 style="margin-top: 90px;">แพ็คเกจบริการ</h1>
    
    <!-- Button to add new package -->
    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('packages.create') }}" class="btn btn-primary">+ เพิ่มแพ็คเกจ</a>
    </div>
    
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered mt-3">
        <thead>
            <tr> 
                <th>ID</th>
                <th>ชื่อแพ็คเกจ</th>
                <th>รายละเอียด</th>
                <th>ภาพ</th>
                <th>ราคา</th>
                <th>จำนวนการใช้งาน</th>
                <th>สถานะ</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($packages as $package)
                <tr>
                    <td>{{ $package->id }}</td>
                    <td>{{ $package->name }}</td>
                    <td>{{ $package->description }}</td>
                    <td>
                        @if($package->image)
                            <img src="{{ asset('storage/' . $package->image) }}" class="img-fluid" style="max-width: 100px;">
                        @else
                            No Image
                        @endif
                    </td>
                    <td>{{ $package->price }} บาท</td>
                    <td>{{ $package->usage_count }}</td>
                    <td>{{ ucfirst($package->status) }}</td>
                    <td>
                        <a href="{{ route('packages.edit', $package->id) }}" class="btn btn-warning btn-sm" title="Edit">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('packages.destroy', $package->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete" onclick="return confirm('คุณแน่ใจหรือไม่ว่าต้องการลบแพ็คเกจนี้?');">
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
