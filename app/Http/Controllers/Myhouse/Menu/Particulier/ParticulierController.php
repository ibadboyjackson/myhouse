<?php

namespace App\Http\Controllers\Myhouse\Menu\Particulier;

use App\Repository\Back\Menu\Particulier\ParticulierRepository;
use App\Repository\Back\Menu\Url\UrlRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ParticulierAgenda;
use Illuminate\Support\Facades\Response;



class ParticulierController extends Controller
{
    /**
     * @var ParticulierRepository
     */
    private $particulierRepository;
    /**
     * @var UrlRepository
     */
    private $repository;
    /**
     * @var UrlRepository
     */
    private $urlRepository;

    /**
     * ParticulierController constructor.
     * @param ParticulierRepository $particulierRepository
     * @param UrlRepository $urlRepository
     */

    public function __construct(ParticulierRepository $particulierRepository, UrlRepository $urlRepository)
    {
        $this->middleware('auth');
        $this->particulierRepository = $particulierRepository;
        $this->urlRepository = $urlRepository;
    }


    public function annonces () {

        $particuliers = $this->particulierRepository->getAllParticulier();

        return view('myhouse.back.menu.particulier.annonce', ['particuliers' => $particuliers]);
    }


    public function menu () {

        $this->urlRepository->setMenuUrl(url()->previous());

        return redirect()->route('particulier.menu.annonces');
    }


    public function interesse () {

        $interesses =  auth()->user()->favorite_particulier;

        return view('myhouse.back.menu.particulier.interesse', ['interesses' => $interesses]);
    }

    public function agenda (Request $request) {

        $agendas = auth()->user()->agenda_particulier->unique();



        if ( $request->ajax() ) {


            $start = (!empty($_GET["start"])) ? ($_GET["start"]) : ('');
            $end = (!empty($_GET["end"])) ? ($_GET["end"]) : ('');


            $user = auth()->user()->id;
            
            $data = ParticulierAgenda::whereDate('start', '>=', $start)->whereDate('end',   '<=', $end)->where('user_id', $user)->get(['id','start', 'end', 'particulier_id']);
            
            return Response::json($data);
        }


        return view('myhouse.back.menu.particulier.agenda', ['agendas' => $agendas]);
    }


    public function setInteresse ($particulier) {


        $this->particulierRepository->storeInteresse($particulier);

        # return $particulier;  
        return redirect()->back();

    }


    public function unsetInteresse ($interesse) {

        $this->particulierRepository->unsetInteresse ($interesse);
        
        return redirect()->back();

    }


    public function unsetAgenda ($agenda) {

        $this->particulierRepository->detachAgenda($agenda);
        
        return redirect()->back();

    }

}
