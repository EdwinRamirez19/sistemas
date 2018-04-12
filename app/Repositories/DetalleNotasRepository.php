<?php

namespace App\Repositories;

use App\Models\DetalleNotas;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class DetalleNotasRepository
 * @package App\Repositories
 * @version April 12, 2018, 8:35 pm UTC
 *
 * @method DetalleNotas findWithoutFail($id, $columns = ['*'])
 * @method DetalleNotas find($id, $columns = ['*'])
 * @method DetalleNotas first($columns = ['*'])
*/
class DetalleNotasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return DetalleNotas::class;
    }
}
