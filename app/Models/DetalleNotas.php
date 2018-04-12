<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class DetalleNotas
 * @package App\Models
 * @version April 12, 2018, 8:35 pm UTC
 *
 * @property \App\Models\Curso curso
 * @property integer id_cur
 * @property string nombreCurso_cur_det
 * @property string codigoGrupo_gru_det
 * @property string nombreDocente_det
 * @property string codigoEstudiante_det
 * @property string nombreEstudiante_det
 * @property number nota1_det
 * @property number nota2_det
 * @property number nota3_det
 * @property number promedio_det
 */
class DetalleNotas extends Model
{
    use SoftDeletes;

    public $table = 'detalle_notas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'id_cur',
        'nombreCurso_cur_det',
        'codigoGrupo_gru_det',
        'nombreDocente_det',
        'codigoEstudiante_det',
        'nombreEstudiante_det',
        'nota1_det',
        'nota2_det',
        'nota3_det',
        'promedio_det'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_cur' => 'integer',
        'nombreCurso_cur_det' => 'string',
        'codigoGrupo_gru_det' => 'string',
        'nombreDocente_det' => 'string',
        'codigoEstudiante_det' => 'string',
        'nombreEstudiante_det' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombreCurso_cur_det' => 'required',
        'codigoGrupo_gru_det' => 'required',
        'nombreDocente_det' => 'required',
        'codigoEstudiante_det' => 'required',
        'nombreEstudiante_det' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function curso()
    {
        return $this->belongsTo(\App\Models\Curso::class, 'id_cur', 'id');
    }
}
