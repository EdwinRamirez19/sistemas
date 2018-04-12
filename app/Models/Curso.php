<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Curso
 * @package App\Models
 * @version April 12, 2018, 8:29 pm UTC
 *
 * @property \App\Models\Seguimiento seguimiento
 * @property \App\Models\Area area
 * @property \App\Models\Grupo grupo
 * @property integer id_seg
 * @property integer id_area
 * @property integer id_gru
 * @property string nombre_cur
 * @property string descripcion_cur
 * @property string estado_seg
 */
class Curso extends Model
{
    use SoftDeletes;

    public $table = 'cursos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'id_seg',
        'id_area',
        'id_gru',
        'nombre_cur',
        'descripcion_cur',
        'estado_seg'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_seg' => 'integer',
        'id_area' => 'integer',
        'id_gru' => 'integer',
        'nombre_cur' => 'string',
        'descripcion_cur' => 'string',
        'estado_seg' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre_cur' => 'required',
        'descripcion_cur' => 'required',
        'estado_seg' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function seguimiento()
    {
        return $this->belongsTo(\App\Models\Seguimiento::class, 'id_seg', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function area()
    {
        return $this->belongsTo(\App\Models\Area::class, 'id_area', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function grupo()
    {
        return $this->belongsTo(\App\Models\Grupo::class, 'id_gru', 'id');
    }
}
