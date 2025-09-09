@extends('layouts.app')

@section('title', 'Sales - Kontrak')

@section('page-title', 'Form Kontrak Pelanggan')

@section('content')
<div class="card p-4 shadow-sm">
    <form action="{{ route('tambahdatakontrak') }}" method="POST" enctype="multipart/form-data">
        @csrf

        {{-- Nama Customer --}}
        <div class="mb-3">
            <label class="form-label">Nama Customer <span class="text-danger">*</span></label>
            <input 
                type="text" 
                class="form-control" 
                name="nama_customer" 
                placeholder="Nama Customer">
        </div>

        {{-- No. Dokumen Kerja Sama --}}
        <div class="mb-3">
            <label class="form-label">No. Dokumen Kerja Sama <span class="text-danger">*</span></label>
            <input 
                type="text" 
                class="form-control" 
                name="no_dokumen" 
                placeholder="No. Dokumen Kerja Sama">
        </div>

        {{-- Waktu Mulai --}}
        <div class="mb-3">
            <label class="form-label">Waktu Mulai <span class="text-danger">*</span></label>
            <input 
                type="date" 
                class="form-control" 
                name="waktu_mulai">
        </div>

        {{-- Waktu Selesai --}}
        <div class="mb-3">
            <label class="form-label">Waktu Selesai <span class="text-danger">*</span></label>
            <input 
                type="date" 
                class="form-control" 
                name="waktu_selesai">
        </div>

        {{-- Email Customer --}}
        <div class="mb-3">
            <label class="form-label">Email Customer <span class="text-danger">*</span></label>
            <input 
                type="email" 
                class="form-control" 
                name="email" 
                placeholder="Email Customer">
        </div>

        {{-- Upload File --}}
        <div class="mb-3">
            <label class="form-label">Upload File <span class="text-danger">*</span></label>
            <input 
                type="file" 
                class="form-control" 
                name="file_kontrak">
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
