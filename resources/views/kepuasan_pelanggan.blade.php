@extends('layouts.app')

@section('title', 'CR - Kepuasan Pelanggan')
@section('page-title', 'Form Kepuasan Pelanggan')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <!-- Filter Dropdown -->
    <div>
        <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
            Filter
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Hari ini</a></li>
            <li><a class="dropdown-item" href="#">Minggu ini</a></li>
            <li><a class="dropdown-item" href="#">Bulan ini</a></li>
        </ul>
    </div>

    <!-- Tambah Data -->
    <a href="{{ route('tambah_data_kepuasan_pelanggan') }}" class="btn btn-primary">
        Tambah Data
    </a>
</div>

<!-- Tabel -->
<div class="table-responsive">
    <table class="table table-bordered align-middle custom-table">
        <thead class="text-center">
            <tr>
                <th style="width: 5%">No</th>
                <th style="width: 60%">Nama Pelanggan</th>
                <th style="width: 20%">Tanggal</th>
                <th style="width: 15%">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-center">1</td>
                <td>Ahmad Sahrioni</td>
                <td class="text-center">06/01/2021</td>
                <td class="text-center">
                    <a href="#" class="btn btn-sm btn-outline-secondary"><i class="bi bi-pencil"></i></a>
                    <a href="#" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></a>
                    <a href="#" class="btn btn-sm btn-outline-dark"><i class="bi bi-three-dots-vertical"></i></a>
                </td>
            </tr>
            <tr>
                <td class="text-center">2</td>
                <td>Uya Kuya</td>
                <td class="text-center">06/01/2021</td>
                <td class="text-center">
                    <a href="#" class="btn btn-sm btn-outline-secondary"><i class="bi bi-pencil"></i></a>
                    <a href="#" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></a>
                    <a href="#" class="btn btn-sm btn-outline-dark"><i class="bi bi-three-dots-vertical"></i></a>
                </td>
            </tr>
            <tr>
                <td class="text-center">3</td>
                <td>Eko Patrio</td>
                <td class="text-center">06/01/2021</td>
                <td class="text-center">
                    <a href="#" class="btn btn-sm btn-outline-secondary"><i class="bi bi-pencil"></i></a>
                    <a href="#" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></a>
                    <a href="#" class="btn btn-sm btn-outline-dark"><i class="bi bi-three-dots-vertical"></i></a>
                </td>
            </tr>
            <tr>
                <td class="text-center">4</td>
                <td>Jokowi</td>
                <td class="text-center">06/01/2021</td>
                <td class="text-center">
                    <a href="#" class="btn btn-sm btn-outline-secondary"><i class="bi bi-pencil"></i></a>
                    <a href="#" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></a>
                    <a href="#" class="btn btn-sm btn-outline-dark"><i class="bi bi-three-dots-vertical"></i></a>
                </td>
            </tr>
        </tbody>
    </table>
</div>

{{-- custom style --}}
<style>
    .custom-table th {
        background-color: #f8a979; 
        color: #000;
    }
    .custom-table tbody tr:nth-child(even) {
        background-color: #ffe4d6;
    }
</style>
@endsection
