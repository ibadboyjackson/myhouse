<?php

namespace App\Repository;

use App\User;
use Illuminate\Pagination\LengthAwarePaginator;

trait Projectable {

    use Operable;

    /**
     * Get all projects from database with pagination ordering by date descendant
     * @return mixed
     */
    public function getProjects () : LengthAwarePaginator
    {
        return $this->project->orderBy('created_at', 'DESC')->paginate(5);
    }

    /**
     * Get all project
     * @return mixed
     */
    public function getAllProjects ()  {
        return $this->project->get();
    }


    /**
     * @param int $id
     * Find a specific project by id and destroy it
     * @return bool|void
     */
    public function destroy (int $id) {
        $project = $this->project->findOrFail($id);

        if ($project) {
            $project->delete();
            return true;
        }
        return abort(403);
    }

    /**
     * Get a single project by id
     * @param int $id
     * @return mixed|void
     */
    public function getSingleProject(int $id) {
        $project = $this->projectId($id);

        if ($project) {
            return $project;
        }else {
            return abort(404);
        }
    }

    /**
     * Get the user who posted a project
     * @param int $id
     * @return mixed|void
     */
    public function getUserAssociatedProject (int $id) {
        $project = $this->projectId($id);
        $userId = $project->user->id;
        $user =  userId($userId);

        if ($user) {
            return $user;
        }
        return abort(404);
    }


    /**
     * Get project by id
     * @param int $id
     * @return mixed
     */
    private function projectId (int $id) {
        return $this->project->find($id);
    }
}
