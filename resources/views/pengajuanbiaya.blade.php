@extends('layouts.app')

@section('title', 'Finance - Form Pengajuan Biaya')

@section('page-title', 'Form Pengajuan Biaya')

@section('content')
<div class="container">
    <h4 class="fw-bold text-uppercase mb-2">FINANCE</h4>
    <p class="mb-4">Form Pengajuan Biaya</p>

    <form action="{{ route('finance.store') }}" method="POST" class="p-4 bg-light rounded shadow-sm">
        @csrf
        <div class="row mb-3">
            <div class="col-md-4">
                <label class="form-label">Tanggal <span class="text-danger">*</span></label>
                <input type="date" name="tanggal" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label class="form-label">Diajukan <span class="text-danger">*</span></label>
                <input type="text" name="diajukan" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label class="form-label">Departemen <span class="text-danger">*</span></label>
                <input type="text" name="departemen" class="form-control" required>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Kebutuhan</label>
            <textarea name="kebutuhan" class="form-control" rows="2"></textarea>
        </div>

        <div class="row mb-3">
            <div class="col-md-3">
                <label class="form-label">Quantity</label>
                <input type="number" id="quantity" name="quantity" class="form-control" value="0">
            </div>
            <div class="col-md-3">
                <label class="form-label">Satuan</label>
                <input type="text" name="satuan" class="form-control">
            </div>
            <div class="col-md-3">
                <label class="form-label">Harga Satuan (Rp)</label>
                <input type="number" id="harga_satuan" name="harga_satuan" class="form-control" value="0">
            </div>
            <div class="col-md-3">
                <label class="form-label">Total</label>
                <input type="text" id="total" name="total" class="form-control" readonly>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Grand Total</label>
            <input type="text" id="grand_total" name="grand_total" class="form-control" readonly>
        </div>

        <div class="text-start">
            <button type="submit" class="btn btn-primary px-5">SIMPAN</button>
        </div>
    </form>
</div>

{{-- custom style --}}
<style>
    .form-label {
        font-weight: 600;
    }
    .btn-primary {
        background-color: #4dabf7;
        border: none;
    }
    .btn-primary:hover {
        background-color: #339af0;
    }
</style>

{{-- auto calculation script --}}
<script>
    function formatRupiah(value) {
        return new Intl.NumberFormat('id-ID', {
            style: 'currency',
            currency: 'IDR',
            minimumFractionDigits: 0
        }).format(value);
    }

    function calculateTotal() {
        let qty = parseFloat(document.getElementById("quantity").value) || 0;
        let harga = parseFloat(document.getElementById("harga_satuan").value) || 0;
        let total = qty * harga;

        document.getElementById("total").value = formatRupiah(total);
        document.getElementById("grand_total").value = formatRupiah(total); // kalau 1 item saja
    }

    document.getElementById("quantity").addEventListener("input", calculateTotal);
    document.getElementById("harga_satuan").addEventListener("input", calculateTotal);
</script>
@endsection
