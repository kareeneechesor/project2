@extends('layouts.back')

@section('content')
<div class="container mt-5">
    <h1>รายละเอียดลูกค้า</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $customer->name }}</h5>
            <p class="card-text"><strong>เพศ:</strong> {{ $customer->gender == 'male' ? 'ชาย' : 'หญิง' }}</p>
            <p class="card-text"><strong>เบอร์โทรศัพท์:</strong> {{ $customer->phone }}</p>
            <p class="card-text"><strong>อีเมล:</strong> {{ $customer->email }}</p>
            <a href="{{ route('customers.index') }}" class="btn btn-primary">กลับไปยังรายการลูกค้า</a>
        </div>
    </div>
</div>
@endsection
