@extends('layouts.app')

@section('title', 'Technical Support - Survey')

@section('page-title', 'Form Data Form Survey')

@section('content')
<div class="container">
    <div class="card shadow-sm border-0 rounded-3">
        <div class="card-body">
            <form action="{{ route('tambah_data_survey') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">No. Tiket <span class="text-danger">*</span></label>
                    <input type="text" name="no_tiket" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Nama Customer <span class="text-danger">*</span></label>
                    <input type="text" name="nama_customer" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Alamat Customer <span class="text-danger">*</span></label>
                    <textarea name="alamat" class="form-control" rows="2" required></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Nama Teknisi <span class="text-danger">*</span></label>
                    <input type="text" name="nama_teknisi" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label"><em>Contact Person</em> <span class="text-danger">*</span></label>
                    <input type="text" name="contact_person" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tanggal Survey<span class="text-danger">*</span></label>
                    <input type="date" name="tanggal" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Surveyor <span class="text-danger">*</span></label>
                    <input type="text" name="contact_person" class="form-control" required>
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
