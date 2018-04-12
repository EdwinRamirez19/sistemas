<?php

namespace App\Repositories;

use App\Models\Area;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AreaRepository
 * @package App\Repositories
 * @version April 12, 2018, 8:20 pm UTC
 *
 * @method Area findWithoutFail($id, $columns = ['*'])
 * @method Area find($id, $columns = ['*'])
 * @method Area first($columns = ['*'])
*/
class AreaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre_cur',
        'descripcion_cur'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Area::class;
    }
}
