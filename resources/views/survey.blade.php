@extends('layouts.app')

@section('title', 'Technical Support - survey')

@section('page-title', 'Form Survey')

@section('content')
<div class="d-flex justify-content-start mb-3">
    <a href="{{ route('tambah_data_survey') }}" class="btn btn-primary">
        Tambah Data
    </a>
</div>

<div class="table-responsive">
    <table class="table table-bordered align-middle custom-table">
        <thead class="text-center">
            <tr>
                <th>No.</th>
                <th>No. Tiket</th>
                <th>Nama Customer</th>
                <th>Alamat Customer</th>
                <th>Contact Person</th>
                <th>Tanggal Survey</th>
                <th>Surveyor</th>
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
