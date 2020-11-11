<?php

namespace App\Repository\Interfaces;

interface RepositoryInterface {

    /**
     * Get order by created descendant
     * @return mixed
     */
    public function get ();

    /**
     * Get all
     * @return mixed
     */
    public function getAll ();

    /**
     * Get by id
     * @param int $id
     * @return mixed
     */
    public function getById (int $id);

    /**
     * Store
     * @param $request
     * @return mixed
     */
    public function store ($request);

    /**
     * Update
     * @param int $id
     * @param $request
     * @return mixed
     */
    public function update (int $id, $request);

    /**
     * Delete
     * @param int $id
     * @return mixed
     */
    public function delete (int $id);
}
