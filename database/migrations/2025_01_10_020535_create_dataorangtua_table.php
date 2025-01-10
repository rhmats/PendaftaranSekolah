<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('dataorangtua', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('datadiri_id');
            $table->string('nama_ayah');
            $table->string('nik_ayah');
            $table->enum('pendidikan_terakhir_ayah', [
                'tidak_sekolah',
                'paud',
                'tk_sederajat',
                'putus_sd',
                'sd_sederajat',
                'smp_sederajat',
                'sma_sederajat',
                'paket_a',
                'paket_b',
                'paket_C',
                'd1',
                'd2',
                'd3',
                'd4',
                'profesi',
                's1',
                'sp1',
                's2',
                'sp2',
                's3',
                'non_formal',
                'informal',
                'lainnya'
            ]);
            $table->enum('pekerjaan_ayah', [
                'tidak_bekerja',
                'nelayan',
                'petani',
                'peternak',
                'pppk_pns_tni_polri',
                'karyawan_swasta',
                'pedagang_kecil',
                'pedagang_besar',
                'wiraswasta',
                'wirausaha',
                'buruh',
                'pensiunan',
                'pegawai_bumn',
                'pegawai_bumd',
                'sudah_meninggal',
                'lainnya'
            ]);
            $table->enum('penghasilan_ayah', [
                'tidak_ada_penghasilan',
                'kurang_dari_500',
                '500_999',
                '1juta_1juta900',
                '2juta_4juta900',
                '5juta_20juta',
                'lebih_dari_20juta'
            ]);
            $table->string('nomor_hp_ayah');
            $table->string('nama_ibu');
            $table->string('nik_ibu');
            $table->enum('pendidikan_terakhir_ibu', [
                'tidak_sekolah',
                'paud',
                'tk_sederajat',
                'putus_sd',
                'sd_sederajat',
                'smp_sederajat',
                'sma_sederajat',
                'paket_a',
                'paket_b',
                'paket_C',
                'd1',
                'd2',
                'd3',
                'd4',
                'profesi',
                's1',
                'sp1',
                's2',
                'sp2',
                's3',
                'non_formal',
                'informal',
                'lainnya'
            ]);
            $table->enum('pekerjaan_ibu', [
                'tidak_bekerja',
                'nelayan',
                'petani',
                'peternak',
                'pppk_pns_tni_polri',
                'karyawan_swasta',
                'pedagang_kecil',
                'pedagang_besar',
                'wiraswasta',
                'wirausaha',
                'buruh',
                'pensiunan',
                'pegawai_bumn',
                'pegawai_bumd',
                'sudah_meninggal',
                'lainnya'
            ]);
            $table->enum('penghasilan_ibu', [
                'tidak_ada_penghasilan',
                'kurang_dari_500',
                '500_999',
                '1juta_1juta900',
                '2juta_4juta900',
                '5juta_20juta',
                'lebih_dari_20juta'
            ]);
            $table->string('nomor_hp_ibu');
            $table->string('nama_wali')->nullable();
            $table->string('nik_wali')->nullable();
            $table->enum('pekerjaan_wali', [
                'tidak_bekerja',
                'nelayan',
                'petani',
                'peternak',
                'pppk_pns_tni_polri',
                'karyawan_swasta',
                'pedagang_kecil',
                'pedagang_besar',
                'wiraswasta',
                'wirausaha',
                'buruh',
                'pensiunan',
                'pegawai_bumn',
                'pegawai_bumd',
                'sudah_meninggal',
                'lainnya'
            ])->nullable();
            $table->enum('pendidikan_terakhir_wali', [
                'tidak_sekolah',
                'paud',
                'tk_sederajat',
                'putus_sd',
                'sd_sederajat',
                'smp_sederajat',
                'sma_sederajat',
                'paket_a',
                'paket_b',
                'paket_C',
                'd1',
                'd2',
                'd3',
                'd4',
                'profesi',
                's1',
                'sp1',
                's2',
                'sp2',
                's3',
                'non_formal',
                'informal',
                'lainnya'
            ])->nullable();
            $table->string('nomor_hp_wali')->nullable();
            $table->foreign('datadiri_id')->references('id')->on('datadiri')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dataorangtua');
    }
};
