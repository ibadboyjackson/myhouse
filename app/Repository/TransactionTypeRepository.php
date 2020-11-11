<?php

namespace App\Repository;

use App\Model\TransactionType;

class TransactionTypeRepository {

    use ShouldBeCalled;
    /**
     * @var TransactionType
     */
    private $model;

    /**
     * TransactionTypeRepository constructor.
     * @param TransactionType $model
     */
    public function __construct(TransactionType $model)
    {
        $this->model = $model;
    }
}
