@extends('layouts.back')

@section('content')
<div class="container">
    <h1 style="margin-top: 90px;">ข้อมูลการติดต่อ</h1>

    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('contact.create') }}" class="btn btn-primary">+ เพิ่มข้อมูล</a>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>ชื่อ</th>
                <th>อีเมล</th>
                <th>ข้อความ</th>
                <th>จัดการ</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contacts as $index => $contact)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->message }}</td>
                    <td>
                        <a href="{{ route('contact.show', $contact->id) }}" class="btn btn-info btn-sm" title="ดูรายละเอียด">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="{{ route('contact.edit', $contact->id) }}" class="btn btn-warning btn-sm" title="แก้ไข">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('contact.destroy', $contact->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" title="ลบ">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
@endsection
