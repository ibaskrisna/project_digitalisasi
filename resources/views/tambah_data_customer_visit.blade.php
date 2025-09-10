@extends('layouts.app')

@section('title', 'CR - Penjadwalan Customer Visit')
@section('page-title', 'Penjadwalan Customer Visit')

@section('content')
<div class="card shadow p-4 rounded">
    <form action="{{ route('tambah_data_customer_visit') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Customer <span class="text-danger">*</span></label>
            <input type="text" name="customer" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Contact Person <span class="text-danger">*</span></label>
            <input type="text" name="contact_person" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Periode Kontrak <span class="text-danger">*</span></label>
            <input type="text" name="periode_kontrak" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Appointment <span class="text-danger">*</span></label>
            <input type="text" name="appointment" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Visit Date Plan <span class="text-danger">(dd/mm/yy)*</span></label>
            <input type="date" name="visit_date_plan" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Realisasi Visit <span class="text-danger">(dd/mm/yy)*</span></label>
            <input type="date" name="realisasi_visit" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Keterangan</label>
            <textarea name="keterangan" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Status <span class="text-danger">*</span></label>
            <select name="status" class="form-select" required>
                <option value="" disabled selected>-- Pilih Status --</option>
                <option value="Plan">Plan</option>
                <option value="On Progress">On Progress</option>
                <option value="Done">Done</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary w-100">SIMPAN</button>
    </form>
</div>
@endsection