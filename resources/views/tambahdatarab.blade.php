@extends('layouts.app') 

@section('title', 'Sales - Tambah Data RAB')

@section('page-title', 'Form RAB')

@section('content')
<div class="card p-4 shadow-sm">
    <form action="{{ route('tambahdatarab') }}" method="POST">
        @csrf

        {{-- Deskripsi Kebutuhan --}}
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi Kebutuhan</label>
            <textarea 
                class="form-control" 
                id="deskripsi" 
                name="deskripsi" 
                rows="3" 
                placeholder="Masukkan deskripsi kebutuhan"></textarea>
        </div>

        {{-- Vendor / Supplier --}}
        <div class="mb-3">
            <label for="vendor" class="form-label">Vendor/Supplier</label>
            <input 
                type="text" 
                class="form-control" 
                id="vendor" 
                name="vendor" 
                placeholder="Masukkan nama vendor atau supplier">
        </div>

        {{-- Quantity --}}
        <div class="mb-3">
            <label for="quantity" class="form-label">Quantity <span class="text-danger">*</span></label>
            <input 
                type="number" 
                class="form-control" 
                id="quantity" 
                name="quantity" 
                placeholder="Masukkan jumlah">
        </div>

        {{-- Satuan --}}
        <div class="mb-3">
            <label for="satuan" class="form-label">Satuan</label>
            <input 
                type="text" 
                class="form-control" 
                id="satuan" 
                name="satuan" 
                placeholder="Masukkan satuan">
        </div>

        {{-- Harga Beli / Satuan --}}
        <div class="mb-3">
            <label for="harga" class="form-label">Harga Beli/Satuan</label>
            <input 
                type="number" 
                class="form-control" 
                id="harga" 
                name="harga" 
                placeholder="Masukkan harga beli per satuan">
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
