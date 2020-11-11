<?php

namespace App\Repository\Back\Menu;

use App\Model\Neuf\Neuf;

class NeufRepository {


    /**
     * get all neufs
     * @return mixed
     */
    public function getAllNeufs () {
        return Neuf::where('user_id', auth()->user()->id)->orderBy('created_at', 'desc')->get();
    }

    /**
     * get all online neuf
     * @param $request
     * @return mixed
     */
    public function getAllOnlineNeuf ($request) {

        $location = explode(" ", $request->get('location'));

        $location = str_replace(',', '', $location[0]);

        return Neuf::where('ville', $location)->where('online', 1)->orderBy('created_at', 'desc')->get();
    }

}
