@extends('layouts.app')

@section('title', 'Invoice Customer')

@section('content')
<div class="container">
    <h3 class="mb-4">Invoice</h3>

    {{-- Navigasi ke Detail / Invoice --}}
    <ul class="nav nav-tabs mb-3">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('customer.detail', 1) }}">Detail Customer</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="{{ route('customer.invoice', 1) }}">Invoice</a>
        </li>
    </ul>

    <div class="table-responsive">
        <table class="table table-bordered align-middle text-center">
            <thead style="background-color: #f8a979; color: #000;">
                <tr>
                    <th>No.</th>
                    <th>Invoice</th>
                    <th>Tujuan Invoice</th>
                    <th>Total</th>
                    <th>Tgl Invoice</th>
                    <th>Due Date</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Java Kartha Solusindo<br><small>000000000000000</small></td>
                    <td>Pembayaran Langganan Internet</td>
                    <td>Rp 300.000</td>
                    <td>2025-09-01</td>
                    <td>2025-09-10</td>
                    <td><span class="badge bg-success">Lunas</span></td>
                    <td>
                        <a href="#" class="btn btn-sm btn-outline-dark"><i class="bi bi-eye"></i></a>
                        <a href="#" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></a>
                        <a href="#" class="btn btn-sm btn-outline-secondary"><i class="bi bi-three-dots-vertical"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Java Kartha Solusindo<br><small>000000000000001</small></td>
                    <td>Pembayaran Langganan Internet</td>
                    <td>Rp 300.000</td>
                    <td>2025-08-01</td>
                    <td>2025-08-10</td>
                    <td><span class="badge bg-warning text-dark">Belum Bayar</span></td>
                    <td>
                        <a href="#" class="btn btn-sm btn-outline-dark"><i class="bi bi-eye"></i></a>
                        <a href="#" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></a>
                        <a href="#" class="btn btn-sm btn-outline-secondary"><i class="bi bi-three-dots-vertical"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

   {{-- Tombol --}}
<div class="d-flex gap-2 mt-3">
    <a href="{{ route('logcustomer') }}" class="btn btn-secondary">Kembali</a>
</div>
</div>
@endsection
