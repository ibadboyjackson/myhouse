<?php

namespace App\Http\Controllers\Myhouse\Home\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repository\Back\Menu\Particulier\ParticulierRepository;


class HomeController extends Controller
{
    
    private $partiulierRepository;


    public function __construc (ParticulierRepository $partiulierRepository) {

        $this->particulierepository = $partiulierRepository;
    
    }





    public function getinformations () {

        $partiuliers = $this->particulierRepository->getAllOnlineParticulier($request);

        return [
            'particuliers' => $partiuliers
        ]; 

    }



}
