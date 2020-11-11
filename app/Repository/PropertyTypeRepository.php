<?php

namespace App\Repository;

use App\Model\Property;

class PropertyTypeRepository {

    use ShouldBeCalled;
    /**
     * @var Property
     */
    private $model;

    /**
     * PropertyTypeRepository constructor.
     * @param Property $model
     */
    public function __construct(Property $model)
    {
        $this->model = $model;
    }
}
