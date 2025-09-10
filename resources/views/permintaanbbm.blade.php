@extends('layouts.app')

@section('title', 'Finance - Form Permintaan BBM')

@section('page-title', 'Permintaan BBM')

@section('content')
<div class="container">
    <p class="mb-4">Form Permintaan BBM</p>

    <form action="{{ route('finance.store') }}" method="POST" enctype="multipart/form-data" class="p-4 bg-light rounded shadow-sm">
        @csrf
        <div class="row mb-3">
            <div class="col-md-4">
                <label class="form-label">Nama Customer <span class="text-danger">*</span></label>
                <input type="text" name="nama_customer" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label class="form-label">Alamat Customer <span class="text-danger">*</span></label>
                <input type="text" name="alamat_customer" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label class="form-label">Tanggal <span class="text-danger">*</span></label>
                <input type="date" name="tanggal" class="form-control" required>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Nama <span class="text-danger">*</span></label>
            <input type="text" name="nama" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Permintaan/Keperluan <span class="text-danger">*</span></label>
            <textarea name="keperluan" class="form-control" rows="2" required></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Nomor Kendaraan <span class="text-danger">*</span></label>
            <input type="text" name="nomor_kendaraan" class="form-control" required>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label class="form-label">Titik Awal <span class="text-danger">*</span></label>
                <input type="text" id="titik_awal" name="titik_awal" class="form-control" placeholder="Masukkan alamat awal" required>
            </div>
            <div class="col-md-6">
                <label class="form-label">Titik Akhir <span class="text-danger">*</span></label>
                <input type="text" id="titik_akhir" name="titik_akhir" class="form-control" placeholder="Masukkan alamat tujuan" required>
            </div>
        </div>

        {{-- MAPS --}}
        <div class="mb-3">
            <label class="form-label">Rute Perjalanan</label>
            <div id="map" style="height: 400px; border-radius: 8px;"></div>
        </div>

        <div class="mb-3">
            <small class="text-muted">
                Note: Form ini digunakan untuk pengajuan BBM apabila tim operasional akan melakukan perjalanan kerja.
            </small>
        </div>

        <div class="mb-3">
            <label class="form-label">Jarak (km)</label>
            <input type="text" id="jarak" name="jarak" class="form-control" readonly>
        </div>

        <div class="mb-3">
            <label class="form-label">Jumlah/Nominal (Rp) <span class="text-danger">*</span></label>
            <input type="text" id="biaya" name="biaya" class="form-control" readonly>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary px-5">SIMPAN</button>
        </div>
    </form>
</div>

{{-- Leaflet JS & Routing Machine --}}
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css"/>
<link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine/dist/leaflet-routing-machine.css"/>

<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script src="https://unpkg.com/leaflet-routing-machine/dist/leaflet-routing-machine.js"></script>

<script>
    // Buat map
    var map = L.map('map').setView([-6.200000, 106.816666], 12); // default Jakarta

    // Tambah tile layer (peta dasar)
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    var control = null;

    // Fungsi buat rute
    function generateRoute(start, end) {
        if(control != null) {
            map.removeControl(control);
        }
        control = L.Routing.control({
            waypoints: [
                L.latLng(start[0], start[1]),
                L.latLng(end[0], end[1])
            ],
            routeWhileDragging: true
        }).addTo(map);

        control.on('routesfound', function(e) {
            var routes = e.routes;
            var summary = routes[0].summary;
            var distanceKm = (summary.totalDistance / 1000).toFixed(2);
            var biaya = distanceKm * 10000;

            document.getElementById('jarak').value = distanceKm;
            document.getElementById('biaya').value = biaya.toLocaleString('id-ID');
        });
    }

    // Contoh: otomatis rute Jakarta ke Bekasi
    // (kalau mau input alamat → harus pakai geocoding API)
    generateRoute([-6.200000, 106.816666], [-6.238270, 106.975571]);
</script>

{{-- custom style --}}
<style>
    .form-label { font-weight: 600; }
    .btn-primary { background-color: #4dabf7; border: none; }
    .btn-primary:hover { background-color: #339af0; }
</style>
@endsection
