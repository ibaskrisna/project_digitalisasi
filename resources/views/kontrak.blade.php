@extends('layouts.app')

@section('title', 'Sales - Kontak')

@section('page-title', 'Kontrak Dengan Pelanggan')

@section('content')
<div class="d-flex justify-content-start mb-3">
   <a href="{{ route('tambahdatakontrak') }}" class="btn btn-primary">Tambah Data</a>
</a>
</div>

<div class="table-responsive">
    <table class="table table-bordered align-middle custom-table">
        <thead class="text-center">
            <tr>
                <th>No.</th>
                <th>Nama Customer</th>
                <th>No Dokumen Kerjasama</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Berakhir</th>
                <th>Email Customer</th>
                <th>Dokumen Pendukung</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-center">1</td>
                <td>-</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="text-center">
                    <a href="#" class="btn btn-sm btn-outline-secondary">
                        <i class="bi bi-pencil"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-outline-danger">
                        <i class="bi bi-trash"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-outline-dark">
                        <i class="bi bi-three-dots-vertical"></i>
                    </a>
                </td>
            </tr>
            <tr>
                <td class="text-center">2</td>
                <td>-</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="text-center">
                    <a href="#" class="btn btn-sm btn-outline-secondary">
                        <i class="bi bi-pencil"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-outline-danger">
                        <i class="bi bi-trash"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-outline-dark">
                        <i class="bi bi-three-dots-vertical"></i>
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
</div>

{{-- custom style --}}
<style>
    .custom-table {
        background-color: #ffe4d6;
    }
    .custom-table th {
        background-color: #f8a979; /* lebih gelap sedikit untuk header */
    }
</style>
@endsection
