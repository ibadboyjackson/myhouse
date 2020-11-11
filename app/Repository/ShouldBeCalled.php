<?php

namespace App\Repository;

trait ShouldBeCalled {

    /**
     * get All order by date paginate
     * @return mixed
     */
    public function get () {
        return $this->model->orderBy('created_at', 'DESC')->paginate(5);
    }

    /**
     * Get all
     * @return mixed
     */
    public function getAll() {
        return $this->model->get();
    }

    /**
     * Get a transaction by Id
     * @param int $id
     */
    public function getById ($id) {

        $transactionId =  $this->model->findOrFail($id);

        if ($transactionId) {
            return $transactionId;
        }
        return abort(404);
    }

    /**
     * Update a transaction
     * @param int $id
     * @param $request
     */
    public function update (int $id, $request) {
        $transaction = $this->getById($id);

        if($transaction) {
            return $transaction->update($request->all());
        }
        return abort(404);
    }

    /**
     * Create a transaction
     * @param $request
     * @return mixed
     */
    public function create ($request) {
        return $this->model->create($request->all());
    }

    public function delete(int $id) {
        $transaction = $this->getById($id);

        if($transaction) {
            return $transaction->delete();
        }
        return abort(403);
    }
}
