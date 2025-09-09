@extends('layouts.app')

@section('title', 'Sales - Update Data Customer')

@section('page-title', 'Form Update Data Customer')

@section('content')
<div class="card p-4 shadow-sm">
    <form action="{{ route('updatedatacustomer') }}" method="POST">
        @csrf

        {{-- Nama Perusahaan --}}
        <div class="mb-3">
            <label class="form-label">Nama Perusahaan <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="nama_perusahaan" placeholder="Nama Perusahaan">
        </div>

        {{-- Jenis Usaha --}}
        <div class="mb-3">
            <label class="form-label">Jenis Usaha <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="jenis_usaha" placeholder="Jenis Usaha">
        </div>

        {{-- Alamat --}}
        <div class="mb-3">
            <label class="form-label">Alamat <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="alamat" placeholder="Alamat">
        </div>

        {{-- NPWP --}}
        <div class="mb-3">
            <label class="form-label">NPWP <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="npwp" placeholder="NPWP">
        </div>

        {{-- No. Telepon --}}
        <div class="mb-3">
            <label class="form-label">No. Telepon <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="telepon" placeholder="No. Telepon">
        </div>

        {{-- Fax / Facsimile --}}
        <div class="mb-3">
            <label class="form-label">Fax / Facsimile</label>
            <input type="text" class="form-control" name="fax" placeholder="Fax / Facsimile">
        </div>

        {{-- Tombol --}}
        <div class="d-flex justify-content-start mb-3">
            <button type="submit" class="btn btn-primary">
                SIMPAN
            </button>
        </div>
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
