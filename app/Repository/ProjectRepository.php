<?php
namespace App\Repository;

use App\Model\Projet;

class ProjectRepository {

    use Projectable;

    /**
     * @var Projet
     */
    private $project;

    public function __construct(Projet $project)
    {
        $this->project = $project;
    }
}
