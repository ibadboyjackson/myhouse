<?php

namespace App\Repository\Faq;

use App\Model\Faq\FaqCategoryType;
use App\Repository\ShouldBeCalled;

class FaqCategoryTypeRepository {

    use ShouldBeCalled;

    /**
     * @var FaqCategoryType
     */
    private $model;

    /**
     * FaqCategoryTypeRepository constructor.
     * @param FaqCategoryType $model
     */
    public function __construct(FaqCategoryType $model)
    {
        $this->model = $model;
    }
}
