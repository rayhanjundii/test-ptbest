<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class datadiri
 * @package App\Models
 * @version September 8, 2023, 7:29 am UTC
 *
 * @property string $nama_lengkap
 * @property string $tempat_tgl_lahir
 * @property string $alamat
 * @property integer $no_telp
 * @property boolean $jenis_kelamin
 * @property string $agama
 * @property string $hobi
 */
class datadiri extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'datadiris';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nama_lengkap',
        'tempat_tgl_lahir',
        'alamat',
        'no_telp',
        'jenis_kelamin',
        'agama',
        'hobi'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nama_lengkap' => 'string',
        'tempat_tgl_lahir' => 'string',
        'alamat' => 'string',
        'no_telp' => 'integer',
        'jenis_kelamin' => 'boolean',
        'agama' => 'string',
        'hobi' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
