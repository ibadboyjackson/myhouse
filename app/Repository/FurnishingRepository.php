<?php

namespace App\Repository;

use App\Model\Furnishing;

class FurnishingRepository {

    use ShouldBeCalled;

    /**
     * @var Furnishing
     */
    private $model;

    /**
     * FurnishingRequest constructor.
     * @param Furnishing $model
     */
    public function __construct(Furnishing $model)
    {
        $this->model = $model;
    }
}
