<?php

namespace App\Repository;

use App\Model\Transaction;

class TransactionRepository {

    use ShouldBeCalled;

    /**
     * @var Transaction
     */
    private $model;


    /**
     * TransactionRepository constructor.
     * @param Transaction $model
     */
    public function __construct(Transaction $model)
    {
        $this->model = $model;
    }
}
