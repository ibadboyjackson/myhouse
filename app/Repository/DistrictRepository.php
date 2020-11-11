<?php

namespace App\Repository;

use App\Model\Administration\District;

class DistrictRepository {

    use ShouldBeCalled;

    /**
     * @var District
     */
    private $model;

    /**
     * DistrictRepository constructor.
     * @param District $model
     */
    public function __construct(District $model)
    {
        $this->model = $model;
    }

}
