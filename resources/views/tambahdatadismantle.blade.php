@extends('layouts.app')

@section('title', 'Sales - Form Perubahan Data (Dismantle)')

@section('page-title', 'Form Perubahan Data (Dismantle)')

@section('content')
<div class="card p-4 shadow-sm">
    
     <form action="{{ route('tambahdatadismantle') }}" method="POST">
            @csrf
        <div class="mb-3">
            <label class="form-label">Nama Perusahaan <span class="text-danger">*</span></label>
            <input type="text" class="form-control" placeholder="Nama Perusahaan">
        </div>

        <div class="mb-3">
            <label class="form-label">Jenis Usaha <span class="text-danger">*</span></label>
            <input type="text" class="form-control" placeholder="Jenis Usaha">
        </div>

        <div class="mb-3">
            <label class="form-label">Alamat <span class="text-danger">*</span></label>
            <input type="text" class="form-control" placeholder="Alamat">
        </div>

        <div class="mb-3">
            <label class="form-label">NPWP <span class="text-danger">*</span></label>
            <input type="text" class="form-control" placeholder="NPWP">
        </div>

        <div class="mb-3">
            <label class="form-label">No. Telepon <span class="text-danger">*</span></label>
            <input type="text" class="form-control" placeholder="No. Telepon">
        </div>

        <div class="mb-3">
            <label class="form-label">Fax / Facsimile</label>
            <input type="text" class="form-control" placeholder="Fax / Facsimile">
        </div>

        <div class="mb-3">
            <label class="form-label">Alamat Semula <span class="text-danger">*</span></label>
            <input type="text" class="form-control" placeholder="Alamat Semula">
        </div>

        <div class="mb-3">
            <label class="form-label">Alamat Baru <span class="text-danger">*</span></label>
            <input type="text" class="form-control" placeholder="Alamat Baru">
        </div>

        <div class="mb-3">
            <label class="form-label">PIC <span class="text-danger">*</span></label>
            <input type="text" class="form-control" placeholder="PIC">
        </div>

        <div class="d-flex justify-content-start mb-3">
            <button type="submit" class="btn btn-primary">
                SIMPAN
            </button>
    </form>
</div>

{{-- custom style --}}
<style>
    .form-control {
        background-color: #f0f4f9;
    }
    .btn-primary {
        background-color: #007bff;
        border: none;
        padding: 10px 30px;
    }
</style>
@endsection
