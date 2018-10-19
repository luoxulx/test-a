<?php
/**
 * Created by PhpStorm.
 * User: luoxulxT
 * Date: 2018/10/17
 * Time: 23:37
 */

namespace App\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

trait BaseRepository
{
    /**
     * @var $model Model
     */
    protected $model;


    /**
     * Update columns in the record by id.
     *
     * @param $id
     * @param $input
     * @return bool
     */
    public function updateColumn($id, $input)
    {
        $this->model = $this->getById($id);

        foreach ($input as $key => $value) {
            $this->model->{$key} = $value;
        }

        return $this->model->save();
    }

    /**
     * Destroy a model.
     *
     * @param $id
     * @return bool|null
     * @throws \Exception
     */
    public function destroy($id)
    {
        return $this->getById($id)->delete();
    }

    /**
     * Get model by id.
     *
     * @param $id
     * @return Model
     */
    public function getById($id)
    {
        return $this->model->findOrFail($id);
    }

    /**
     * Get all the records
     * @param array $columns
     * @return mixed
     */
    public function all($columns = array('*'))
    {
        return $this->model->get($columns);
    }

    /**
     * @param null $perPage
     * @param array $orderBy
     * @param array $columns
     * @return mixed
     */
    public function page($perPage = null,$orderBy = array('sortColumn'=>'created_at','sort'=>'desc'), $columns = array('*'))
    {
        return $this->model->orderBy($orderBy['sortColumn'], $orderBy['sort'])->paginate($perPage, $columns);
    }

    /**
     * Store a new record.
     *
     * @param  $input
     * @return Model
     */
    public function store($input)
    {
        return $this->save($this->model, $input);
    }

    /**
     * Update a record by id.
     *
     * @param  $id
     * @param  $input
     * @return Model
     */
    public function update($id, $input)
    {
        $this->model = $this->getById($id);

        return $this->save($this->model, $input);
    }

    /**
     * Save the input's data.
     *
     * @param  $model
     * @param  $input
     * @return Model
     */
    public function save($model, $input)
    {
        $model->fill($input);

        $model->save();

        return $model;
    }
}