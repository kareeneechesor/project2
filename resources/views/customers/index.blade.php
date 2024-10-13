@extends('layouts.back')

@section('content')
<div class="container mt-5">
    <h1 style="margin-top: 90px;">จัดการข้อมูลลูกค้า</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('customers.create') }}" class="btn btn-primary">+ เพิ่มข้อมูลลูกค้า</a>
    </div>

    <table class="table table-bordered mt-3">
        <thead class="table-light" style="background-color: #aca9a9; color: #0e0d0d;">
            <tr>
                <th>ลำดับ</th>
                <th>ชื่อ-สกุล</th>
                <th>เพศ</th>
                <th>เบอร์โทรศัพท์</th>
                <th>อีเมล</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($customers as $index => $customer)
                <tr id="customer-{{ $customer->id }}">
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->gender == 'male' ? 'ชาย' : 'หญิง' }}</td>
                    <td>{{ $customer->phone }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>
                        <div class="d-flex justify-content-start">
                            <button class="btn btn-info btn-sm me-2" title="ดูรายละเอียด" data-bs-toggle="modal" data-bs-target="#detailsModal-{{ $customer->id }}">
                                <i class="fas fa-eye" style="font-size: 0.8em;"></i>
                            </button>
                            <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-warning btn-sm me-2" title="แก้ไข">
                                <i class="fas fa-edit" style="font-size: 0.8em;"></i>
                            </a>
                            <button class="btn btn-danger btn-sm" title="ลบ" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal-{{ $customer->id }}">
                                <i class="fas fa-trash" style="font-size: 0.8em;"></i>
                            </button>
                        </div>
                    </td>
                </tr>

                <!-- Confirmation Modal for Deleting -->
                <div class="modal fade" id="confirmDeleteModal-{{ $customer->id }}" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="confirmDeleteModalLabel">ยืนยันการลบข้อมูล</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>คุณแน่ใจที่จะแบ่งข้อมูลนี้ไหม?</p>
                            </div>
                            <div class="modal-footer">
                                <form action="{{ route('customers.destroy', $customer->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">ใช่ !</button>
                                </form>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Customer Details Modal -->
                <div class="modal fade" id="detailsModal-{{ $customer->id }}" tabindex="-1" aria-labelledby="detailsModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="detailsModalLabel">รายละเอียดลูกค้า</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h5 class="card-title">{{ $customer->name }}</h5>
                                <p class="card-text"><strong>เพศ:</strong> {{ $customer->gender == 'male' ? 'ชาย' : 'หญิง' }}</p>
                                <p class="card-text"><strong>เบอร์โทรศัพท์:</strong> {{ $customer->phone }}</p>
                                <p class="card-text"><strong>อีเมล:</strong> {{ $customer->email }}</p>
                                <p class="card-text"><strong>รายละเอียด:</strong> {{ $customer->details ?? 'ไม่มีรายละเอียด' }}</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

<style>
    /* Custom CSS for centering modals */
    .modal-dialog {
        margin: auto; /* Center modal vertically */
    }
</style>
