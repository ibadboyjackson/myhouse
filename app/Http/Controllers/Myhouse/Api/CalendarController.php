<?php

namespace App\Http\Controllers\myhouse\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Repository\Back\Menu\Api\ParticulierRepository;



class CalendarController extends Controller
{
    private $particulierRepository;

    public function __construct (ParticulierRepository $particulierRepository) {
        $this->middleware('auth');
        $this->particulierRepository = $particulierRepository;
    }

    public function add (Request $request) {
        $this->particulierRepository->setParticulierAgenda ($request);
    }

    public function update (Request $request) {
        $this->particulierRepository->updateParticulierAgenda($request);
    }


    public function delete(Request $request) {
        $this->particulierRepository->deleteParticulierRepository($request);
    }




    public function proadd (Request $request) {
        $this->particulierRepository->setProfessionnelAgenda ($request);
    }

    public function proupdate (Request $request) {
        $this->particulierRepository->updateProfessionnelAgenda($request);
    }


    public function prodelete(Request $request) {
        $this->particulierRepository->deleteProfessionnelRepository($request);
    }



    
}