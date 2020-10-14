<?php

namespace App\Repositories;

use App\Models\Compte;
use App\Repositories\BaseRepository;

/**
 * Class CompteRepository
 * @package App\Repositories
 * @version October 13, 2020, 12:58 pm UTC
*/

class CompteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'numcompte',
        'numagence',
        'clerib',
        'ninea',
        'dateouv',
        'fraisouv',
        'client'
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
        return Compte::class;
    }
}
