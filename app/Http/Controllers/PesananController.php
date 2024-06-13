<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function store(Request $request)
    {
        // Validasi data yang diterima dari form
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telepon' => 'required|string|max:15',
            'jenis_tiket' => 'required|string',
            'jumlah_tiket' => 'required|integer|min:1',
        ]);

        // Simpan data ke database atau lakukan proses lainnya
        // Contoh: Pesanan::create($validatedData);

        // Redirect ke halaman sukses atau halaman lain yang diinginkan
        return redirect()->route('pesan')->with('success', 'Pemesanan berhasil dilakukan!');
    }
}
