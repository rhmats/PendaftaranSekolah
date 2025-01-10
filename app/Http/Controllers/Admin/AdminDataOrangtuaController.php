<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dataorangtua;
use Illuminate\Http\Request;

class AdminDataOrangtuaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         // Mengambil semua data diri peserta didik
         $dataorangtua = Dataorangtua::all();

         // Mengirim data ke view admin.datadiri
         return view('admin.dataorangtua', compact('dataorangtua'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
