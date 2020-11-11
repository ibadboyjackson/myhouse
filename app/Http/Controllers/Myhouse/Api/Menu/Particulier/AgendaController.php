<?php

namespace App\Http\Controllers\Myhouse\Api\Menu\Particulier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ParticulierAgenda;

use App\Model\Professionnel\ProfessionnelAgenda;


class AgendaController extends Controller
{
    

    public function index (Request $request) {


        if ( $request->ajax() ) {


            $start = (!empty($_GET["start"])) ? ($_GET["start"]) : ('');
            $end = (!empty($_GET["end"])) ? ($_GET["end"]) : ('');


            $user = auth()->user()->id;
            
            $data = ParticulierAgenda::whereDate('start', '>=', $start)->whereDate('end',   '<=', $end)->where('user_id', $user)->get(['id','start', 'end', 'particulier_id ']);
            
            return Response::json($data);
        }


    }


    public function agenda (Request $request) {


        if ( $request->ajax() ) {


            $start = (!empty($_GET["start"])) ? ($_GET["start"]) : ('');
            $end = (!empty($_GET["end"])) ? ($_GET["end"]) : ('');



            $user = auth()->user()->id;
            
            $data = ProfessionnelAgenda::whereDate('start', '>=', $start)->whereDate('end',   '<=', $end)->where('user_id', $user)->get(['id','start', 'end', 'professionnel_id ']);
            
            return Response::json($data);
        }


    }



}
