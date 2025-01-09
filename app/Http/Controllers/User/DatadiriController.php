<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Datadiri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DatadiriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.datadiri');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.datadiri');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Mengecek apakah user sudah mengisi data diri
        $existingData = Datadiri::where('user_id', Auth::id())->first();

        if ($existingData) {
            // Jika sudah ada data, tampilkan pesan error
            return redirect()->route('datadiri.index')->with('error', 'Anda telah mengisi data diri sebelumnya dan tidak dapat mengubahnya.');
        }

        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'nik' => 'required|string',
            'agama' => 'required|string',
            'nama_sekolah' => 'required|string|max:255',
            'asal_sekolah' => 'required|string|max:255',
            'npsn_sekolah' => 'required|string',
            'alamat_sekolah' => 'required|string',
            'tahun_lulus' => 'required|numeric|min:1900|max:' . date('Y'),
            'nomor_ijazah' => 'required|string',
            'nomor_skhun' => 'required|string',
            'kewarganegaraan' => 'required|string',
            'alamat' => 'required|string',
            'rt_rw' => 'required|string',
            'kelurahan' => 'required|string',
            'kecamatan' => 'required|string',
            'kabupaten' => 'required|string',
            'kode_pos' => 'required|numeric',
            'nomor_hp' => 'required|string',
            'email' => 'required|email|max:255',
        ]);

        Datadiri::create([
            'nama_lengkap' => $request->nama_lengkap,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'nik' => $request->nik,
            'agama' => $request->agama,
            'nama_sekolah' => $request->nama_sekolah,
            'asal_sekolah' => $request->asal_sekolah,
            'npsn_sekolah' => $request->npsn_sekolah,
            'alamat_sekolah' => $request->alamat_sekolah,
            'tahun_lulus' => $request->tahun_lulus,
            'nomor_ijazah' => $request->nomor_ijazah,
            'nomor_skhun' => $request->nomor_skhun,
            'kewarganegaraan' => $request->kewarganegaraan,
            'alamat' => $request->alamat,
            'rt_rw' => $request->rt_rw,
            'kelurahan' => $request->kelurahan,
            'kecamatan' => $request->kecamatan,
            'kabupaten' => $request->kabupaten,
            'kode_pos' => $request->kode_pos,
            'nomor_hp' => $request->nomor_hp,
            'email' => $request->email,
            'user_id' => Auth::id(), // Tambahkan user_id di sini
        ]);

        return redirect()->route('datadiri.index')->with('success', 'Data diri Berhasil disimpan');
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
