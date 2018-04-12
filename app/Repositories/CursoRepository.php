<?php

namespace App\Repositories;

use App\Models\Curso;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CursoRepository
 * @package App\Repositories
 * @version April 12, 2018, 8:29 pm UTC
 *
 * @method Curso findWithoutFail($id, $columns = ['*'])
 * @method Curso find($id, $columns = ['*'])
 * @method Curso first($columns = ['*'])
*/
class CursoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre_cur',
        'descripcion_cur',
        'estado_seg'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Curso::class;
    }
}
