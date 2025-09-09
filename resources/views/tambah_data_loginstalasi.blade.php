@extends('layouts.app')

@section('title', 'Technical Support - Log Instalasi')

@section('page-title', 'Form Data Status Log Instalasi')

@section('content')
<div class="container">
    <div class="card shadow-sm border-0 rounded-3">
        <div class="card-body">
            <form action="{{ route('tambah_data_loginstalasi') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">No. Tiket <span class="text-danger">*</span></label>
                    <input type="text" name="no_tiket" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">PIC <span class="text-danger">*</span></label>
                    <input type="text" name="pic" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label"><em>Support By</em></span></label>
                    <input type="text" name="support" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label"><em>Issued Date </em> <span class="text-danger">*</span></label>
                    <input type="date" name="issued" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Customer <span class="text-danger">*</span></label>
                    <input type="text" name="customer" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label"><em>Contact Person </em> <span class="text-danger">*</span></label>
                    <input type="text" name="contact_person" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Area <span class="text-danger">*</span></label>
                    <input type="text" name="contact_person" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Product <span class="text-danger">*</span></label>
                    <input type="text" name="product" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Kategori <span class="text-danger">*</span></label>
                    <input type="text" name="kategori" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Keterangan <span class="text-danger">*</span></label>
                    <input type="text" name="keterangan" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Status <span class="text-danger">*</span></label>
                    <input type="text" name="status" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label"><em>Closed Date</em> <span class="text-danger">*</span></label>
                    <input type="date" name="closed" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">No. WO <span class="text-danger">*</span></label>
                    <input type="text" name="no_wo" class="form-control" required>
                </div>

                <div class="d-flex justify-content-start mb-3">
                    <button type="submit" class="btn btn-primary">
                        SIMPAN
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- custom style agar mirip desain --}}
<style>
    .card {
        background-color: #fff;
        border-radius: 10px;
    }
    .card-header {
        background-color: #f8f9fa;
        font-size: 18px;
    }
    .form-label {
        font-weight: 600;
    }
    .btn-primary {
        background-color: #0d6efd;
        border: none;
    }
    .btn-primary:hover {
        background-color: #0b5ed7;
    }
</style>
@endsection
