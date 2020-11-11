<?php

namespace App\Repository\Transaction;

use App\Model\Project\CategoryType;
use App\Repository\ShouldBeCalled;

class CategoryTypeRepository {

    use ShouldBeCalled;

    /**
     * @var CategoryType
     */
    private $model;

    /**
     * CategoryTypeRepository constructor.
     * @param CategoryType $model
     */
    public function __construct(CategoryType $model)
    {
        $this->model = $model;
    }

}
