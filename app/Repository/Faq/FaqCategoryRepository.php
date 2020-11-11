<?php

namespace App\Repository\Faq;

use App\Model\Faq\FaqCategory;
use App\Repository\ShouldBeCalled;

class FaqCategoryRepository {

    use ShouldBeCalled;

    /**
     * @var FaqCategory
     */
    private $model;

    /**
     * FaqCategoryRepository constructor.
     * @param FaqCategory $model
     */
    public function __construct(FaqCategory $model)
    {
        $this->model = $model;
    }
}
