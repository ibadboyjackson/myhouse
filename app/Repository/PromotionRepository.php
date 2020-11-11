<?php

namespace App\Repository;

use App\Model\Promotion;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class PromotionRepository {
    /**
     * @var promotion
     */
    private $promotion;

    /**
     * PromotionRepository constructor.
     * @param promotion $promotion
     */
    public function __construct(Promotion $promotion)
    {
        $this->promotion = $promotion;
    }

    /**
     * Get promotions with pagination order by date desc
     * @return mixed
     */
    public function getPromotions () : LengthAwarePaginator
    {
        return $this->promotion->orderBy('created_at', 'desc')->paginate(5);
    }

    /**
     * Get all promotions
     * @return Collection
     */
    public function getAllPromotions () : Collection
    {
        return $this->promotion->all();
    }

    /**
     * Get promotion by id
     * @param int $id
     */
    public function getPromotionById (int $id) {

        $promotion = $this->promotion->findOrFail($id);

        if ($promotion) {
            return $promotion;
        }
        return abort(403);
    }

    /**
     * Create a promotion
     * @param $request
     * @return bool
     */
    public function createPromotion ($request) {

        $promotion = $this->promotion;

        $promotion->code = Str::random(7);
        $promotion->price = $request->price;
        $promotion->project_id = $request->project_id;
        $promotion->user_id = $request->user()->id;

        return $promotion->save();
    }

    /**
     * Update a promotion
     * @param $request
     * @param int $id
     * @return mixed
     */
    public function updatePromotion ($request, int $id) {

        $promotion = $this->getPromotionById($id);

        if($promotion) {

            $promotion->code = Str::random(7);
            $promotion->price = $request->price;
            $promotion->project_id = $request->project_id;
            $promotion->user_id = $request->user()->id;

            return $promotion->save();
        }
        return abort(403);
    }

    /**
     * Delete a promotion
     * @param int $id
     */
    public function deletePromotion (int $id) {

        $promotion = $this->getPromotionById($id);

        if($promotion) {
            return $promotion->delete();
        }
        return abort(403);
    }
}
