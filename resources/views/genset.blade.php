@extends('layouts.app')

@section('title', 'Technical Support - Maintenance Genset')

@section('page-title', 'Daily Maintenance Genset')

@section('content')
<div class="d-flex justify-content-start mb-3">
    <button class="btn btn-primary">Tambah Data</button>
</div>

<div class="table-responsive">
    <table class="table table-bordered align-middle custom-table">
        <thead class="text-center">
            <tr>
                <th rowspan="2">No.</th>
                <th rowspan="2">Bulan</th>
                <th rowspan="2">Nama Petugas</th>
                <th colspan="7">Pemeriksaan Visual & Umum</th>
                <th colspan="1">Uji Coba</th>
                <th rowspan="2">Aksi</th>
            </tr>
            <tr>
                <th>P1</th>
                <th>P2</th>
                <th>P3</th>
                <th>P4</th>
                <th>P5</th>
                <th>P6</th>
                <th>P7</th>
                <th>P1</th>
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
        <tbody>
            <tr>
                <td class="text-center">2</td>
                <td>-</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
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
