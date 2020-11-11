<?php

namespace App\Repository\Currency;

use App\Model\Currency;
use App\Repository\ShouldBeCalled;

class CurrencyRepository {

    use ShouldBeCalled;

    /**
     * @var Currency
     */
    private $model;

    /**
     * CurrencyRepository constructor.
     * @param Currency $model
     */
    public function __construct(Currency $model)
    {
        $this->model = $model;
    }
}
