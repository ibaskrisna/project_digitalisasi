@extends('layouts.app')

@section('title', 'Detail Customer')

@section('content')
<div class="container">
    <h3 class="mb-4">Detail Customer</h3>

    {{-- Navigasi ke Invoice --}}
    <ul class="nav nav-tabs mb-3">
        <li class="nav-item">
            <a class="nav-link active" href="{{ route('customer.detail', 1) }}">Detail Customer</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('customer.invoice', 1) }}">Invoice</a>
        </li>
    </ul>

    <form>
        <div class="mb-3">
            <label>Kode Customer*</label>
            <input type="text" class="form-control" value="CST001" readonly>
        </div>
        <div class="mb-3">
            <label>Nama Customer*</label>
            <input type="text" class="form-control" value="Jaya Jaya Jaya" readonly>
        </div>
        <div class="mb-3">
            <label>ID Area*</label>
            <input type="text" class="form-control" value="AR-12" readonly>
        </div>
        <div class="mb-3">
            <label>Email*</label>
            <input type="text" class="form-control" value="jaya@example.com" readonly>
        </div>
        <div class="mb-3">
            <label>No Telepon*</label>
            <input type="text" class="form-control" value="08123456789" readonly>
        </div>
        <div class="mb-3">
            <label>No Identitas*</label>
            <input type="text" class="form-control" value="1234567890" readonly>
        </div>
        <div class="mb-3">
            <label>Status Kepemilikan Rumah*</label>
            <input type="text" class="form-control" value="Milik Sendiri" readonly>
        </div>
        <div class="mb-3">
            <label>Paket Berlangganan*</label>
            <input type="text" class="form-control" value="Internet 50Mbps" readonly>
        </div>
        <div class="mb-3">
            <label>Biaya Bulanan*</label>
            <input type="text" class="form-control" value="Rp 300.000" readonly>
        </div>
        <div class="mb-3">
            <label>Biaya Instalasi*</label>
            <input type="text" class="form-control" value="Rp 500.000" readonly>
        </div>

        {{-- Tombol --}}
        <div class="d-flex gap-2 mt-3">
            <a href="{{ url()->previous() }}" class="btn btn-secondary">Kembali</a>
            <a href="#" class="btn btn-primary">Edit</a>
        </div>
    </form>
</div>
@endsection
