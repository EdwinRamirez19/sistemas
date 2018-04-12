<?php

namespace App\Repositories;

use App\Models\Grupo;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class GrupoRepository
 * @package App\Repositories
 * @version April 12, 2018, 8:22 pm UTC
 *
 * @method Grupo findWithoutFail($id, $columns = ['*'])
 * @method Grupo find($id, $columns = ['*'])
 * @method Grupo first($columns = ['*'])
*/
class GrupoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre_gru',
        'descripcion_gru'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Grupo::class;
    }
}
