@extends('layouts.app')

@section('title', 'Technical Support - Maintenance Genset')

@section('page-title', 'Form Data Daily Maintenance Genset')

@section('content')
<div class="container">
    <div class="card shadow-sm border-0 rounded-3">
        <div class="card-body">
            <form action="{{ route('tambah_data_genset') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Bulan <span class="text-danger">*</span></label>
                    <input type="month" name="bulan" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Nama Petugas <span class="text-danger">*</span></label>
                    <input type="text" name="nama_petugas" class="form-control" required>
                </div>

                <h6 class="fw-bold mt-4">Pemeriksaan Visual & Umum</h6>

                {{-- Pertanyaan 1–7 --}}
                <div class="mb-2 d-flex align-items-center justify-content-between">
                    <label class="mb-0">1. Kondisi Fisik Genset</label>
                    <select name="kondisi_fisik" class="form-select form-select-sm select-angka" required>
                        @for ($i = 1; $i <= 31; $i++)
                            <option value="{{ sprintf('%02d', $i) }}">{{ sprintf('%02d', $i) }}</option>
                        @endfor
                    </select>
                </div>

                <div class="mb-2 d-flex align-items-center justify-content-between">
                    <label class="mb-0">2. Level Oli Mesin</label>
                    <select name="level_oli" class="form-select form-select-sm select-angka" required>
                        @for ($i = 1; $i <= 31; $i++)
                            <option value="{{ sprintf('%02d', $i) }}">{{ sprintf('%02d', $i) }}</option>
                        @endfor
                    </select>
                </div>

                <div class="mb-2 d-flex align-items-center justify-content-between">
                    <label class="mb-0">3. Level Air Radiator/ Coolant</label>
                    <select name="level_air" class="form-select form-select-sm select-angka" required>
                        @for ($i = 1; $i <= 31; $i++)
                            <option value="{{ sprintf('%02d', $i) }}">{{ sprintf('%02d', $i) }}</option>
                        @endfor
                    </select>
                </div>

                <div class="mb-2 d-flex align-items-center justify-content-between">
                    <label class="mb-0">4. Level Bahan Bakar (Solar)</label>
                    <select name="level_solar" class="form-select form-select-sm select-angka" required>
                        @for ($i = 1; $i <= 31; $i++)
                            <option value="{{ sprintf('%02d', $i) }}">{{ sprintf('%02d', $i) }}</option>
                        @endfor
                    </select>
                </div>

                <div class="mb-2 d-flex align-items-center justify-content-between">
                    <label class="mb-0">5. Kebocoran Oli/BBM/Air</label>
                    <select name="kebocoran" class="form-select form-select-sm select-angka" required>
                        @for ($i = 1; $i <= 31; $i++)
                            <option value="{{ sprintf('%02d', $i) }}">{{ sprintf('%02d', $i) }}</option>
                        @endfor
                    </select>
                </div>

                <div class="mb-2 d-flex align-items-center justify-content-between">
                    <label class="mb-0">6. Panel Kontrol Berfungsi Dengan Normal</label>
                    <select name="panel_kontrol" class="form-select form-select-sm select-angka" required>
                        @for ($i = 1; $i <= 31; $i++)
                            <option value="{{ sprintf('%02d', $i) }}">{{ sprintf('%02d', $i) }}</option>
                        @endfor
                    </select>
                </div>

                <div class="mb-2 d-flex align-items-center justify-content-between">
                    <label class="mb-0">7. Lampu Indikator Normal</label>
                    <select name="lampu_indikator" class="form-select form-select-sm select-angka" required>
                        @for ($i = 1; $i <= 31; $i++)
                            <option value="{{ sprintf('%02d', $i) }}">{{ sprintf('%02d', $i) }}</option>
                        @endfor
                    </select>
                </div>

                <h6 class="fw-bold mt-4">Uji Coba/ Run Test</h6>

                <div class="mb-3 d-flex align-items-center justify-content-between">
                    <label class="mb-0">1. Genset Dapat Menyala Dengan Baik</label>
                    <select name="run_test" class="form-select form-select-sm select-angka" required>
                        @for ($i = 1; $i <= 31; $i++)
                            <option value="{{ sprintf('%02d', $i) }}">{{ sprintf('%02d', $i) }}</option>
                        @endfor
                    </select>
                </div>

                <div class="d-flex justify-content-start mb-3 mt-4">
                    <button type="submit" class="btn btn-primary">
                        SIMPAN
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- custom style --}}
<style>
    .card {
        background-color: #fff;
        border-radius: 10px;
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
    .select-angka {
        width: 70px;   /* kecil & ringkas */
        font-size: 14px;
        padding: 2px 6px;
    }
</style>
@endsection
