<?php

namespace App\Repository;

use App\Model\Administration\Quartier;

class QuartierRepository  {

    use ShouldBeCalled;
    /**
     * @var Quartier
     */
    private $model;

    /**
     * QuartierRepository constructor.
     * @param Quartier $model
     */
    public function __construct(Quartier $model)
    {
        $this->model = $model;
    }
}
