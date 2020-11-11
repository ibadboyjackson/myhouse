<?php

namespace App\Socialite;


class Socialite {


    /**
     * @var \Laravel\Socialite\Facades\Socialite
     */
    private $socialite;

    public function __construct(\Laravel\Socialite\Facades\Socialite $socialite)
    {
        $this->socialite = $socialite;
    }

    public function getDriver () {

    }

    public function putDriver () {

    }


}
