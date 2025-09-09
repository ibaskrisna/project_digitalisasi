@extends('layouts.app')

@section('title', 'Sales - Status Log Customer')

@section('page-title', 'Form Status Log Customer')

@section('content')
<div class="card p-4 shadow-sm">
    <form action="{{ route('tambahlogcustomer') }}" method="POST" enctype="multipart/form-data">
        @csrf

        {{-- Kode Customer --}}
        <div class="mb-3">
            <label class="form-label">Kode Customer <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="kode_customer" placeholder="Masukkan kode customer">
        </div>

        {{-- ID Area --}}
        <div class="mb-3">
            <label class="form-label">ID Area <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="id_area" placeholder="Masukkan ID area">
        </div>

        {{-- Nama Customer --}}
        <div class="mb-3">
            <label class="form-label">Nama Customer <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="nama_customer" placeholder="Masukkan nama customer">
        </div>

        {{-- No Telepon --}}
        <div class="mb-3">
            <label class="form-label">No. Telepon <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="telepon" placeholder="Masukkan no. telepon">
        </div>

        {{-- Email --}}
        <div class="mb-3">
            <label class="form-label">Email <span class="text-danger">*</span></label>
            <input type="email" class="form-control" name="email" placeholder="Masukkan email">
        </div>

        {{-- Jenis Identitas --}}
        <div class="mb-3">
            <label class="form-label">Jenis Identitas <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="jenis_identitas" placeholder="Masukkan jenis identitas">
        </div>

        {{-- No Identitas --}}
        <div class="mb-3">
            <label class="form-label">No. Identitas <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="no_identitas" placeholder="Masukkan no. identitas">
        </div>

        {{-- Upload Foto Identitas --}}
        <div class="mb-3">
            <label class="form-label">Upload Foto Identitas <span class="text-danger">*</span></label>
            <input type="file" class="form-control" name="foto_identitas">
        </div>

        {{-- Status Kepemilikan Rumah --}}
        <div class="mb-3">
            <label class="form-label">Status Kepemilikan Rumah <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="status_rumah" placeholder="Masukkan status kepemilikan rumah">
        </div>

        {{-- Paket Berlangganan --}}
        <div class="mb-3">
            <label class="form-label">Paket Berlangganan <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="paket" placeholder="Masukkan paket berlangganan">
        </div>

        {{-- Biaya Bulanan --}}
        <div class="mb-3">
            <label class="form-label">Biaya Bulanan <span class="text-danger">*</span></label>
            <input type="number" class="form-control" name="biaya_bulanan" placeholder="Masukkan biaya bulanan">
        </div>

        {{-- Biaya Instalasi --}}
        <div class="mb-3">
            <label class="form-label">Biaya Instalasi <span class="text-danger">*</span></label>
            <input type="number" class="form-control" name="biaya_instalasi" placeholder="Masukkan biaya instalasi">
        </div>

        {{-- Tombol --}}
        <div class="d-flex justify-content-start gap-2 mb-3">
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
