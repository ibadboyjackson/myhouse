<?php

namespace App\Repository;

use App\Model\Administration\Reply;

class ReplyRepository {

    use ShouldBeCalled;
    /**
     * @var Reply
     */
    private $model;

    /**
     * ReplyRepository constructor.
     * @param Reply $model
     */
    public function __construct(Reply $model)
    {
        $this->model = $model;
    }
}
