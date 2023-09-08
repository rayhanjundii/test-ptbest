<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Crud
 * @package App\Models
 * @version September 8, 2023, 7:23 am UTC
 *
 * @property string $pegawai_nama
 * @property string $pegawai_jabatan
 * @property string $pegawai_umur
 * @property string $pegawai_alamat
 */
class Crud extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'cruds';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'pegawai_nama',
        'pegawai_jabatan',
        'pegawai_umur',
        'pegawai_alamat'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'pegawai_nama' => 'string',
        'pegawai_jabatan' => 'string',
        'pegawai_umur' => 'string',
        'pegawai_alamat' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
