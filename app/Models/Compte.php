<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Compte
 * @package App\Models
 * @version October 13, 2020, 12:58 pm UTC
 *
 * @property \App\Models\Client $client
 * @property string $numcompte
 * @property string $numagence
 * @property integer $clerib
 * @property string $ninea
 * @property string $dateouv
 * @property string $fraisouv
 * @property integer $client
 */
class Compte extends Model
{
    use SoftDeletes;

    public $table = 'comptes';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'numcompte',
        'numagence',
        'clerib',
        'ninea',
        'dateouv',
        'fraisouv',
        'client'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'numcompte' => 'string',
        'numagence' => 'string',
        'clerib' => 'integer',
        'ninea' => 'string',
        'dateouv' => 'string',
        'fraisouv' => 'string',
        'client' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'numcompte' => 'required',
        'numagence' => 'required',
        'clerib' => 'required',
        'ninea' => 'required',
        'dateouv' => 'required',
        'fraisouv' => 'required',
        'client' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function client()
    {
        return $this->belongsTo(\App\Models\Client::class, 'client');
    }
}
