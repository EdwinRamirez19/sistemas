<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Periodo
 * @package App\Models
 * @version April 12, 2018, 7:48 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection Seguimiento
 * @property string estado_per
 * @property string nombre_per
 */
class Periodo extends Model
{
    use SoftDeletes;

    public $table = 'periodos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'estado_per',
        'nombre_per'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'estado_per' => 'string',
        'nombre_per' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'estado_per' => 'required',
        'nombre_per' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function seguimientos()
    {
        return $this->hasMany(\App\Models\Seguimiento::class, 'id_per');
    }
}
