<?php

namespace App\Repository;

use App\Model\Favorite;
use Illuminate\Database\Eloquent\Collection;

class FavoriteRepository {
    /**
     * @var Favorite
     */
    private $favorite;

    /**
     * FavoriteRepository constructor.
     * @param Favorite $favorite
     */
    public function __construct(Favorite $favorite)
    {
        $this->favorite = $favorite;
    }

    /**
     * Create a favorite
     * @param $request
     * @param string $search
     * @return bool
     */
    public function createFavorite ($request, string $search) {

        $project_id = $request->project_id;
        $entity = $this->favorite->where($search, $project_id)->first();

        if ($entity) {
            return true;
        }
        $this->favorite->create($request->all());
        return false;
    }

    /**
     * Get Favorite by id
     * @param int $id
     */
    public function getFavoriteById (int $id) {

        $favorite = $this->favorite->findOrFail($id);

        if ($favorite) {
            return $favorite;
        }
        return abort(403);
    }

    /**
     * Get all favorites order by created date descendant
     * @return mixed
     */
    public function getFavorites () {
        return $this->favorite->orderBy('created_at', 'desc')->paginate(5);
    }

    /**
     * Get all favorites
     * @return Favorite[]|Collection
     */
    public function getAllFavorites () {
        return $this->favorite->all();
    }

    /**
     * @param $userId
     */
    public function getUserFavorites ($userId) {
        $favorites = $this->favorite->where('user_id', $userId)->paginate(5);

        if ($favorites) {
            return $favorites;
        }
        return abort(403);
    }

    /**
     * @param $id
     * delete a favorite
     * @return bool
     */
    public function deleteFavorite ($id) {
        $favorite = $this->getFavoriteById($id);
        $favorite->delete();
        return true;
    }
}
