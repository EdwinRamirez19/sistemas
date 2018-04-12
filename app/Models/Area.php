<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Area
 * @package App\Models
 * @version April 12, 2018, 8:20 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection Curso
 * @property string nombre_cur
 * @property string descripcion_cur
 */
class Area extends Model
{
    use SoftDeletes;

    public $table = 'areas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre_area',
        'descripcion_area'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombre_area' => 'string',
        'descripcion_area' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre_area' => 'required',
        'descripcion_area' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function cursos()
    {
        return $this->hasMany(\App\Models\Curso::class,'id_area');
    }
}
