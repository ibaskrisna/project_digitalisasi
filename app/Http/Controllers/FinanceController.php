<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinanceController extends Controller
{
    public function create()
    {
        return view('permintaanbbm');
    }

    public function store(Request $request)
    {
        // validasi
        $validated = $request->validate([
            'nama_customer' => 'required',
            'alamat_customer' => 'required',
            'tanggal' => 'required|date',
            'nama' => 'required',
            'keperluan' => 'required',
            'nomor_kendaraan' => 'required',
            'titik_awal' => 'required',
            'titik_akhir' => 'required',
            'jumlah' => 'required|numeric',
        ]);

        // simpan ke database (misal model PermintaanBBM)
        // PermintaanBBM::create($validated);

        return redirect()->route('finance.create')->with('success', 'Data berhasil disimpan!');
    }

}
