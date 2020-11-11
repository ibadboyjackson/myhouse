<?php

namespace App\Repository\Blog;

use App\Model\League;
use App\Repository\ShouldBeCalled;

class LeagueRepository
{
    use ShouldBeCalled;

    /**
     * @var League
     */
    private $model;

    /**
     * LeagueRepository constructor.
     * @param League $model
     */
    public function __construct(League $model)
    {
        $this->model = $model;
    }

}
