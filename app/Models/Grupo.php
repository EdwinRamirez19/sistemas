<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Grupo
 * @package App\Models
 * @version April 12, 2018, 8:22 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection Curso
 * @property string nombre_gru
 * @property string descripcion_gru
 */
class Grupo extends Model
{
    use SoftDeletes;

    public $table = 'grupos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre_gru',
        'descripcion_gru'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombre_gru' => 'string',
        'descripcion_gru' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre_gru' => 'required',
        'descripcion_gru' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function cursos()
    {
        return $this->hasMany(\App\Models\Curso::class, 'id_gru');
    }
}
