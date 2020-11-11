<?php

namespace App\Repository\Faq;

use App\Model\Faq\FaqCategoryTypeQuestion;
use App\Repository\ShouldBeCalled;

class FaqCategoryTypeQuestionRepository {

    use ShouldBeCalled;

    /**
     * @var FaqCategoryTypeQuestion
     */
    private $model;

    /**
     * FaqCategoryTypeQuestionRepository constructor.
     * @param FaqCategoryTypeQuestion $model
     */
    public function __construct(FaqCategoryTypeQuestion $model)
    {
        $this->model = $model;
    }
}
