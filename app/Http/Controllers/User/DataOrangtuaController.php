<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Datadiri;
use App\Models\Dataorangtua;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DataOrangtuaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.dataorangtua');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.dataorangtua');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Mengecek apakah user sudah mengisi data diri
        $datadiri = Datadiri::where('user_id', Auth::id())->first(); // Pastikan relasi atau field yang digunakan benar

        if (!$datadiri) {
            // Jika data diri belum ada, tampilkan pesan error
            return redirect()->route('dataorangtua.index')->with('error', 'Anda harus mengisi data diri terlebih dahulu.');
        }

        // Mengecek apakah user sudah mengisi data orang tua
        $existingData = Dataorangtua::where('datadiri_id', Auth::id())->first();

        if ($existingData) {
            // Jika sudah ada data, tampilkan pesan error
            return redirect()->route('dataorangtua.index')->with('error', 'Anda telah mengisi data orang tua sebelumnya dan tidak dapat mengubahnya.');
        }

        // Validasi data
        $request->validate([
            'nama_ayah' => 'required|string|max:255',
            'nik_ayah' => 'required|string',
            'pendidikan_terakhir_ayah' => 'required|string',
            'pekerjaan_ayah' => 'required|string',
            'penghasilan_ayah' => 'required|string',
            'nomor_hp_ayah' => 'required|string',
            'nama_ibu' => 'required|string|max:255',
            'nik_ibu' => 'required|string',
            'pendidikan_terakhir_ibu' => 'required|string',
            'pekerjaan_ibu' => 'required|string',
            'penghasilan_ibu' => 'required|string',
            'nomor_hp_ibu' => 'required|string',
            'nama_wali' => 'nullable|string|max:255',
            'nik_wali' => 'nullable|string',
            'pendidikan_terakhir_wali' => 'nullable|string',
            'pekerjaan_wali' => 'nullable|string',
            'nomor_hp_wali' => 'nullable|string',
        ]);

        // Menyimpan data orang tua
        Dataorangtua::create([
            'datadiri_id' => $datadiri->id,
            'nama_ayah' => $request->nama_ayah,
            'nik_ayah' => $request->nik_ayah,
            'pendidikan_terakhir_ayah' => $request->pendidikan_terakhir_ayah,
            'pekerjaan_ayah' => $request->pekerjaan_ayah,
            'penghasilan_ayah' => $request->penghasilan_ayah,
            'nomor_hp_ayah' => $request->nomor_hp_ayah,
            'nama_ibu' => $request->nama_ibu,
            'nik_ibu' => $request->nik_ibu,
            'pendidikan_terakhir_ibu' => $request->pendidikan_terakhir_ibu,
            'pekerjaan_ibu' => $request->pekerjaan_ibu,
            'penghasilan_ibu' => $request->penghasilan_ibu,
            'nomor_hp_ibu' => $request->nomor_hp_ibu,
            'nama_wali' => $request->nama_wali,
            'nik_wali' => $request->nik_wali,
            'pendidikan_terakhir_wali' => $request->pendidikan_terakhir_wali,
            'pekerjaan_wali' => $request->pekerjaan_wali,
            'nomor_hp_wali' => $request->nomor_hp_wali,
        ]);

        return redirect()->route('dataorangtua.index')->with('success', 'Data orang tua berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
