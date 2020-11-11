<?php

namespace App\Repository;

use App\Model\Administration\Region;

class RegionRepository {

    use ShouldBeCalled;
    /**
     * @var Region
     */
    private $model;

    /**
     * RegionRepository constructor.
     * @param Region $model
     */
    public function __construct(Region $model)
    {
        $this->model = $model;
    }
}
