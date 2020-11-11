<?php

namespace App\Repository;

use Illuminate\Database\Eloquent\Model;

class CalledRepository {

    use ShouldBeCalled;

    /**
     * @var Model
     */
    private $model;

    /**
     * StreetRepository constructor.
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }
}
