@extends('layouts.app')

@section('title', 'Technical Support - BAST')

@section('page-title', 'Form Data Berita Acara Serah Terima')

@section('content')
<div class="container">
    <div class="card shadow-sm border-0 rounded-3">
        <div class="card-body">
            <form action="{{ route('tambah_data_bast') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Nama Pelanggan <span class="text-danger">*</span></label>
                    <input type="text" name="nama_pelanggan" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Site <span class="text-danger">*</span></label>
                    <input type="text" name="site" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Alamat <span class="text-danger">*</span></label>
                    <textarea name="alamat" class="form-control" rows="2" required></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label"><em>Contact Person</em> <span class="text-danger">*</span></label>
                    <input type="text" name="contact_person" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Telepon <span class="text-danger">*</span></label>
                    <input type="text" name="telepon" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email <span class="text-danger">*</span></label>
                    <input type="text" name="email" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Uraian Pekerjaan <span class="text-danger">*</span></label>
                    <textarea name="uraian_pekerjaan" class="form-control" rows="2" required></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Status Pekerjaan <span class="text-danger">*</span></label>
                    <div class="d-flex gap-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="selesai" value="Selesai" required>
                            <label class="form-check-label" for="selesai">
                                ✅ Selesai
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="belum" value="Belum Selesai" required>
                            <label class="form-check-label" for="belum">
                                ❌ Belum Selesai
                            </label>
                        </div>
                    </div>
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
