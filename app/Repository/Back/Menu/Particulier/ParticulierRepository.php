<?php

namespace App\Repository\Back\Menu\Particulier;


use App\Model\Particulier\Particulier;
use App\Model\Particulier\ParticulierInteresse;
use App\ParticulierAgenda;


class ParticulierRepository {


    /**
     * @return mixed
     * get all user annonce from particulier
     */

     public function getAllParticulier () {
 
        return Particulier::where('user_id', auth()->user()->id)->orderBy('created_at', 'desc')->get();
 
    }

    /**
     * @param $request
     * @return mixed
     * get all online annonces
     */

     public function getAllOnlineParticulier ($request) {

        $location = explode(" ", $request->get('location')); 
        $location = str_replace(',', '', $location[0]);

        $transaction = $request->get('transaction');
        $category = $request->get('category');
        $prix = $request->get('prix');
        $surface = $request->get('surface');

         return Particulier::where('online', 1)->where('ville', $location)->orderBy('created_at', 'desc')->get();

    }

    public function storeInteresse($particulier)

    {

        $user = auth()->user();

        $isFavorite = $user->favorite_particulier()->where('particulier_id', $particulier)->count();


        if ($isFavorite == 0) {

            $user->favorite_particulier()->attach($particulier);
    
            return putSessionMessage('statut', __('myhouse/help.success'));
        }

        return putSessionMessage('error', __('myhouse/help.exist'));


        /*

        $exist = $this->getParticulierInteresse($particulier_id);

        if ($exist) {
            
        }

        ParticulierInteresse::create([
           'particulier_id' => $particulier_id,
           'user_id' => auth()->user()->id
        ]);

        */

    }


    public function unsetInteresse ($interresse) {

        $user = auth()->user();

        $isFavorite = $user->favorite_particulier()->where('particulier_id', $interresse)->count();

        if ($isFavorite >= 1) {

            $user->favorite_particulier()->detach($interresse);
            return putSessionMessage('statut', __('myhouse/help.unsuccess'));
        }

        return putSessionMessage('error', __('myhouse/help.exist'));

    }


    private function getParticulierInteresse ($id) {
 
        return ParticulierInteresse::where('particulier_id', $id)->first();
 
    }

    public function getInteresses () {

        return ParticulierInteresse::where('user_id', auth()->user()->id)->get();

    }


    public function detachAgenda ($agenda) {

        $user = auth()->user()->agenda_particulier()->detach($agenda);

        return putSessionMessage('statut', __('myhouse/help.unsuccess'));

    }


}