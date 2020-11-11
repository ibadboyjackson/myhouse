<?php

namespace App\Repository;

use App\Model\Administration\Comment;

class CommentRepository {

    use ShouldBeCalled;

    /**
     * @var Comment
     */
    private $model;

    /**
     * CommentRepository constructor.
     * @param Comment $model
     */
    public function __construct(Comment $model)
    {
        $this->model = $model;
    }


}
