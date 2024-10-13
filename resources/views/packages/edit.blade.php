@extends('layouts.back')

@section('content')
<div class="container">
    <h1 style="margin-top: 90px;">แสดงแพ็คเกจ</h1>
    
    <!-- Display validation errors -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('packages.update', $package->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Package Name -->
        <div class="mb-3">
            <label for="name" class="form-label">Package Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $package->name) }}" required>
        </div>

        <!-- Description -->
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" required>{{ old('description', $package->description) }}</textarea>
        </div>

        <!-- Image Upload -->
        <div class="mb-3">
            <label for="image" class="form-label">Image (optional)</label>
            <input type="file" class="form-control" id="image" name="image">
            @if ($package->image)
                <img src="{{ asset('storage/' . $package->image) }}" alt="Package Image" width="100">
            @endif
        </div>

        <!-- Price -->
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{ old('price', $package->price) }}" required>
        </div>

        <!-- Usage Count -->
        <div class="mb-3">
            <label for="usage_count" class="form-label">Usage Count</label>
            <input type="number" class="form-control" id="usage_count" name="usage_count" value="{{ old('usage_count', $package->usage_count) }}" required>
        </div>

        <!-- Status -->
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-control" id="status" name="status" required>
                <option value="available" {{ old('status', $package->status) == 'available' ? 'selected' : '' }}>Available</option>
                <option value="unavailable" {{ old('status', $package->status) == 'unavailable' ? 'selected' : '' }}>Unavailable</option>
            </select>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Update Package</button>
    </form>
</div>
@endsection
