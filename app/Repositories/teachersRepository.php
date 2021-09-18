<?php

namespace App\Repositories;

use App\Models\teachers;
use App\Repositories\BaseRepository;

/**
 * Class teachersRepository
 * @package App\Repositories
 * @version September 18, 2021, 12:30 am UTC
*/

class teachersRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Lastname',
        'Firstname',
        'Middlename',
        'Birthday',
        'Religion',
        'Citizenship'
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
        return teachers::class;
    }
}
