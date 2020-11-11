<?php

namespace App\Repository\Back\Menu\Url;

use App\Model\Generique\Url\ConnectUrl;
use App\Model\Generique\Url\MenuUrl;

class UrlRepository {


    public function getMPenuUrl () {
        return MenuUrl::all()->last()->url;
    }


    public function setMenuUrl ($url) {
        return MenuUrl::create(['url' => $url]);
    }

    public function setConnectUrl ($url) {
        return ConnectUrl::create(['url' => $url]);
    }


}
