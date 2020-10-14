<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Client
 * @package App\Models
 * @version October 13, 2020, 12:57 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $comptes
 * @property string $nom
 * @property string $prenom
 * @property string $adresse
 * @property string $telephone
 * @property string $datenaiss
 */
class Client extends Model
{
    use SoftDeletes;

    public $table = 'clients';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nom',
        'prenom',
        'adresse',
        'telephone',
        'datenaiss'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nom' => 'string',
        'prenom' => 'string',
        'adresse' => 'string',
        'telephone' => 'string',
        'datenaiss' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nom' => 'required',
        'prenom' => 'required',
        'adresse' => 'required',
        'telephone' => 'required',
        'datenaiss' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function comptes()
    {
        return $this->hasMany(\App\Models\Compte::class, 'client');
    }
}
