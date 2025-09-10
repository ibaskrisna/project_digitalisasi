@extends('layouts.app')

@section('title', 'CR - log customer complaint')

@section('page-title', 'Log Customer Complaint')

@section('content')
<div class="d-flex justify-content-start mb-3">
    <a href="{{ route('tambah_data_customer_complaint') }}" class="btn btn-primary">
    Tambah Data
</a>
</div>

<div class="table-responsive">
    <table class="table table-bordered align-middle custom-table">
        <thead class="text-center">
            <tr>
                <th>No.</th>
                <th>No.WO</th>
                <th>No.Tiket</th>
                <th>PIC</th>
                <th>Support By</th>
                <th>Issued Date</th>
                <th>Customer</th>
                <th>Contact person</th>
                <th>Area</th>
                <th>Product</th>
                <th>Kategori</th>
                <th>Keterangan</th>
                <th>Status</th>
                <th>Close Date</th>
                <th>Completion Date</th>
                <th>Aktion By</th>
                <th>aksi</th>
                
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
