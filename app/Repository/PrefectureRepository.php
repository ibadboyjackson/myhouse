<?php

namespace App\Repository;

use App\Model\Administration\Prefecture;

class PrefectureRepository {

    use ShouldBeCalled;

    /**
     * @var Prefecture
     */
    private $model;


    /**
     * PrefectureRepository constructor.
     * @param Prefecture $model
     */
    public  function __construct(Prefecture $model)
    {
        $this->model = $model;
    }
}
