<?php


namespace App\Repositories\Interfaces;

use Illuminate\Database\Eloquent\Model as GlobalModel;

/**
 * Interface EloquentRepository
 * @package App\Repositories\Interfaces
 *
 */
interface EloquentRepository
{

    /**
     *
     * @param array $attributes
     * @return GlobalModel
     */

    public function create(array $attributes): GlobalModel;


    /**
     * @param $id
     * @return GlobalModel
     */
    public function find($id): ?GlobalModel;

}
