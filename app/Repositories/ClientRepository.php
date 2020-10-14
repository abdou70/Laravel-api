<?php

namespace App\Repositories;

use App\Models\Client;
use App\Repositories\BaseRepository;

/**
 * Class ClientRepository
 * @package App\Repositories
 * @version October 13, 2020, 12:57 pm UTC
*/

class ClientRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nom',
        'prenom',
        'adresse',
        'telephone',
        'datenaiss'
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
        return Client::class;
    }
}
