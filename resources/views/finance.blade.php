@extends('layouts.app')

@section('title', 'Finance - Dashboard')

@section('page-title', 'Finance')

@section('content')
<div class="container">
    <h3 class="fw-bold text-uppercase mb-3">FINANCE</h3>

    {{-- ======================= --}}
    {{-- TABLE PERMINTAAN BBM --}}
    {{-- ======================= --}}
    <p class="fw-semibold mb-2">Form Permintaan BBM</p>
    <div class="table-responsive mb-4">
        <table class="table table-bordered align-middle">
            <thead class="text-center" style="background-color:#FFE4D6;">
                <tr>
                    <th>Nama Cust</th>
                    <th>Alamat Cust</th>
                    <th>Nama</th>
                    <th>Keperluan</th>
                    <th>Jumlah</th>
                    <th>Nomor Kendaraan</th>
                    <th>Jarak Tempuh</th>
                    <th>Start date</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
@forelse($permintaanBbm as $bbm)
    <tr>
        <td><i class="bi bi-person me-1"></i> {{ $bbm->nama_customer }}</td>
        <td><i class="bi bi-geo-alt me-1"></i> {{ $bbm->alamat_customer }}</td>
        <td><i class="bi bi-person me-1"></i> {{ $bbm->nama }}</td>
        <td>{{ $bbm->keperluan }}</td>
        <td>{{ 'Rp '.number_format($bbm->jumlah,0,',','.') }}</td>
        <td>{{ $bbm->nomor_kendaraan }}</td>
        <td>{{ $bbm->jarak_tempuh }} km</td>
        <td>{{ \Carbon\Carbon::parse($bbm->tanggal)->format('d/m/Y') }}</td>
        <td class="text-center">
            <a href="{{ route('finance.editBBM',$bbm->id) }}" class="btn btn-sm btn-outline-secondary">
                <i class="bi bi-pencil"></i>
            </a>
            <form action="{{ route('finance.destroyBBM',$bbm->id) }}" method="POST" class="d-inline">
                @csrf @method('DELETE')
                <button type="submit" class="btn btn-sm btn-outline-danger">
                    <i class="bi bi-trash"></i>
                </button>
            </form>
            <a href="{{ route('finance.showBBM',$bbm->id) }}" class="btn btn-sm btn-outline-dark">
                <i class="bi bi-three-dots-vertical"></i>
            </a>
        </td>
    </tr>
@empty
    <tr>
        <td colspan="9" class="text-center text-muted">Belum ada data permintaan BBM.</td>
    </tr>
@endforelse
</tbody>

        </table>
    </div>

    {{-- ======================= --}}
    {{-- TABLE PENGAJUAN BIAYA --}}
    {{-- ======================= --}}
    <p class="fw-semibold mb-2">Form Pengajuan Biaya</p>
    <div class="table-responsive">
        <table class="table table-bordered align-middle">
            <thead class="text-center" style="background-color:#FFE4D6;">
                <tr>
                    <th>Diajukan</th>
                    <th>Departemen</th>
                    <th>Kebutuhan</th>
                    <th>Quality</th>
                    <th>Satuan</th>
                    <th>Harga Satuan</th>
                    <th>Total</th>
                    <th>Grand Total</th>
                    <th>Start date</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
@forelse($pengajuanBiaya as $biaya)
    <tr>
        <td><i class="bi bi-person me-1"></i> {{ $biaya->diajukan }}</td>
        <td>{{ $biaya->departemen }}</td>
        <td>{{ $biaya->kebutuhan }}</td>
        <td>{{ $biaya->quality }}</td>
        <td>{{ $biaya->satuan }}</td>
        <td>{{ 'Rp '.number_format($biaya->harga_satuan,0,',','.') }}</td>
        <td>{{ 'Rp '.number_format($biaya->total,0,',','.') }}</td>
        <td>{{ 'Rp '.number_format($biaya->grand_total,0,',','.') }}</td>
        <td>{{ \Carbon\Carbon::parse($biaya->tanggal)->format('d/m/Y') }}</td>
        <td class="text-center">
            <a href="{{ route('finance.editBiaya',$biaya->id) }}" class="btn btn-sm btn-outline-secondary">
                <i class="bi bi-pencil"></i>
            </a>
            <form action="{{ route('finance.destroyBiaya',$biaya->id) }}" method="POST" class="d-inline">
                @csrf @method('DELETE')
                <button type="submit" class="btn btn-sm btn-outline-danger">
                    <i class="bi bi-trash"></i>
                </button>
            </form>
            <a href="{{ route('finance.showBiaya',$biaya->id) }}" class="btn btn-sm btn-outline-dark">
                <i class="bi bi-three-dots-vertical"></i>
            </a>
        </td>
    </tr>
@empty
    <tr>
        <td colspan="10" class="text-center text-muted">Belum ada data pengajuan biaya.</td>
    </tr>
@endforelse
</tbody>

        </table>
    </div>
</div>
@endsection
