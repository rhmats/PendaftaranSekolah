<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Dataorangtua extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'dataorangtua';

    protected $fillable = [
        'datadiri_id',
        'nama_ayah',
        'nik_ayah',
        'pendidikan_terakhir_ayah',
        'pekerjaan_ayah',
        'penghasilan_ayah',
        'nomor_hp_ayah',
        'nama_ibu',
        'nik_ibu',
        'pendidikan_terakhir_ibu',
        'pekerjaan_ibu',
        'penghasilan_ibu',
        'nomor_hp_ibu',
        'nama_wali',
        'nik_wali',
        'pendidikan_terakhir_wali',
        'pekerjaan_wali',
        'nomor_hp_wali',
    ];

    public function datadiri(): BelongsTo
    {
        return $this->belongsTo(Datadiri::class);
    }
}
