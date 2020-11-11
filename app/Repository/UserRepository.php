<?php

namespace App\Repository;

use App\User;

class UserRepository {

    use ShouldBeCalled;

    /**
     * @var User
     */
    private $model;


    /**
     * UserRepository constructor.
     * @param User $model
     */
    public function __construct(User $model)
    {
        $this->model = $model;
    }
}
