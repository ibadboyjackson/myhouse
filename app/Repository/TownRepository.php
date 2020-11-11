<?php

namespace App\Repository;

use App\Model\Administration\Town;

class TownRepository {

    use ShouldBeCalled;
    /**
     * @var Town
     */
    private $model;

    /**
     * TownRepository constructor.
     * @param Town $model
     */
    public function __construct(Town $model)
    {
        $this->model = $model;
    }
}
