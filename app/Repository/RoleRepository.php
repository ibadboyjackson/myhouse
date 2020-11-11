<?php

namespace App\Repository;

use App\Role;

class RoleRepository {

    use ShouldBeCalled;

    /**
     * @var Role
     */
    private $model;

    /**
     * RoleRepository constructor.
     * @param Role $model
     */
    public function __construct(Role $model)
    {
        $this->model = $model;
    }
}
