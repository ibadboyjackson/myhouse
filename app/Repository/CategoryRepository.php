<?php

namespace App\Repository;

use App\Model\Category;

class CategoryRepository {

    use ShouldBeCalled;
    /**
     * @var Category
     */
    private $model;


    /**
     * CategoryRepository constructor.
     * @param Category $model
     */
    public function __construct(Category $model)
    {
        $this->model = $model;
    }
}
