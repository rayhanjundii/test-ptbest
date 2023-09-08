<?php

namespace App\Repositories;

use App\Models\datadiri;
use App\Repositories\BaseRepository;

/**
 * Class datadiriRepository
 * @package App\Repositories
 * @version September 8, 2023, 7:29 am UTC
*/

class datadiriRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama_lengkap',
        'tempat_tgl_lahir',
        'alamat',
        'no_telp',
        'jenis_kelamin',
        'agama',
        'hobi'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return datadiri::class;
    }
}
