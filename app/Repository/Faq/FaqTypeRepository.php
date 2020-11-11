<?php

namespace App\Repository\Faq;

use App\Model\Faq\FaqType;
use App\Repository\ShouldBeCalled;

class FaqTypeRepository {

    use ShouldBeCalled;

    /**
     * @var FaqType
     */
    private $model;

    /**
     * FaqTypeRepository constructor.
     * @param FaqType $model
     */
    public function __construct(FaqType $model)
    {
        $this->model = $model;
    }
}
