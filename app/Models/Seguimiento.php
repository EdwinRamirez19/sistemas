<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Seguimiento
 * @package App\Models
 * @version April 12, 2018, 7:49 pm UTC
 *
 * @property \App\Models\Periodo periodo
 * @property integer id_per
 * @property string nombre_seg
 * @property string descripcion_seg
 * @property string estado_seg
 */
class Seguimiento extends Model
{
    use SoftDeletes;

    public $table = 'seguimientos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'id_per',
        'nombre_seg',
        'descripcion_seg',
        'estado_seg'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_per' => 'integer',
        'nombre_seg' => 'string',
        'descripcion_seg' => 'string',
        'estado_seg' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre_seg' => 'required',
        'descripcion_seg' => 'required',
        'estado_seg' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function periodo()
    {
        return $this->belongsTo(\App\Models\Periodo::class, 'id_per', 'id');
    }
}
