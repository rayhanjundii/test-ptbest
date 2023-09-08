<?php

namespace App\Repositories;

use App\Models\Crud;
use App\Repositories\BaseRepository;

/**
 * Class CrudRepository
 * @package App\Repositories
 * @version September 8, 2023, 7:23 am UTC
*/

class CrudRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'pegawai_nama',
        'pegawai_jabatan',
        'pegawai_umur',
        'pegawai_alamat'
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
        return Crud::class;
    }
}
