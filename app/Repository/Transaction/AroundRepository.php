<?php

namespace App\Repository\Transaction;

use App\Model\Project\Around;
use App\Repository\ShouldBeCalled;

class AroundRepository {

    use ShouldBeCalled;

    /**
     * @var Around
     */
    private $model;

    /**
     * AroundRepository constructor.
     * @param Around $model
     */
    public function __construct(Around $model)
    {
        $this->model = $model;
    }

}
