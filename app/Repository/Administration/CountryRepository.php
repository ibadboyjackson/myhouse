<?php

namespace App\Repository\Administration;

use App\Model\Administration\Country;
use App\Repository\ShouldBeCalled;

class CountryRepository {

    use ShouldBeCalled;

    /**
     * @var Country
     */
    private $model;

    /**
     * CountryRepository constructor.
     * @param Country $model
     */
    public function __construct(Country $model)
    {
        $this->model = $model;
    }
}
