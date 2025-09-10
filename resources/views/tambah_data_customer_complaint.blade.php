@extends('layouts.app')

@section('title', 'CR - Log Customer Complaint')
@section('page-title', 'Form Status Log Customer Complaint')

@section('content')
<div class="card shadow p-4 rounded">
    <form action="{{ route('tambah_data_customer_complaint') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">No. Tiket</label>
            <input type="text" name="no_tiket" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">PIC</label>
            <input type="text" name="pic" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Support By</label>
            <input type="text" name="support_by" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Issued Date</label>
            <input type="date" name="issued_date" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Customer</label>
            <input type="text" name="customer" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Contact Person</label>
            <input type="text" name="contact_person" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Area</label>
            <input type="text" name="area" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Product</label>
            <input type="text" name="product" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Kategori</label>
            <input type="text" name="kategori" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Keterangan</label>
            <textarea name="keterangan" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Status</label>
            <select name="status" class="form-select">
                <option value="">-- Pilih Status --</option>
                <option value="Open">Open</option>
                <option value="On Progress">On Progress</option>
                <option value="Closed">Closed</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Closed Date</label>
            <input type="date" name="closed_date" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Completion Date</label>
            <input type="date" name="completion_date" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Action By</label>
            <input type="text" name="action_by" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">No. WO</label>
            <input type="text" name="no_wo" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary w-100">SIMPAN</button>
    </form>
</div>
@endsection
