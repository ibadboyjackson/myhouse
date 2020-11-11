<?php

namespace App\Http\Controllers\Myhouse\Home;

use App\Repository\Back\Menu\NeufRepository;
use App\Repository\Back\Menu\Particulier\ParticulierRepository;
use App\Repository\Back\Menu\ProfessionnelRepository;
use App\Repository\Front\Acceuil\HomeRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use App\ParticulierAgenda;
use Illuminate\Support\Facades\Response;
use App\Model\Professionnel\ProfessionnelAgenda;

class HomeController extends Controller
{
    /**
     * @var HomeRepository
     */
    private $homeRepository;
    /**
     * @var ParticulierRepository
     */
    private $particulierRepository;
    /**
     * @var ProfessionnelRepository
     */
    private $professionnelRepository;
    /**
     * @var NeufRepository
     */
    private $neufRepository;

    /**
     * HomeController constructor.
     * @param HomeRepository $homeRepository
     * @param ParticulierRepository $particulierRepository
     * @param ProfessionnelRepository $professionnelRepository
     * @param NeufRepository $neufRepository
     */
    public function __construct(HomeRepository $homeRepository, ParticulierRepository $particulierRepository, ProfessionnelRepository $professionnelRepository, NeufRepository $neufRepository)
    {
        $this->homeRepository = $homeRepository;
        $this->particulierRepository = $particulierRepository;
        $this->professionnelRepository = $professionnelRepository;
        $this->neufRepository = $neufRepository;
    }

    public function index () {

        # default search type
        $type = 'mixte';

        #bannieres

        $bannieres = $this->homeRepository->getAllBanniere();

        return view('myhouse.front.pages.index', [
            'type' => $type,
            'bannieres' => $bannieres
        ]);
    }

    public function language (Request $request) {

        # Change local

        if ($request->get('language') === 'en') {
            session()->put('locale', 'en');
        }elseif ($request->get('language') === 'fr') {
            session()->put('locale', 'fr');
        }

        return redirect()->back();
    }

    /*
     * Search Controller
     */

    public function recherche(Request $request, $type = []) {


        session(['location' => $request->get('location'), 'page' => $request->get('page')]);

        /*
         * Retrieve the appropriate page
         */

        if ($type === 'mixte') {





            /*
             * Check the type of page from the request and retrieve the appropriate page
             */

            if ($request->get('page') === 'neufs') {

                $neufs = $this->neufRepository->getAllOnlineNeuf($request);

                return view('myhouse.front.pages.recherche.neuf.mixte', [
                    'type' => $type,
                    'neufs' => $neufs
                ]);

            }
            
            elseif ($request->get('page') === 'professionnels') {

                $professionnels = $this->professionnelRepository->getAllOnlineProfessionnels($request);

                return view('myhouse.front.pages.recherche.professionnel.mixte', [
                    'type' => $type,
                    'professionnels' => $professionnels
                ]);

            }
            elseif ($request->get('page') === 'particuliers') {

                $partiuliers = $this->particulierRepository->getAllOnlineParticulier($request);

                return view('myhouse.front.pages.recherche.particulier.mixte', [
                    'type' => $type,
                    'particuliers' => $partiuliers
                ]);

            }
            else {

                return abort(403);

            }

        }

        elseif ($type === 'carte') {

            /*
             * Check the type of page from the request and retrieve the appropriate page
             */

            if ($request->get('page') === 'neufs') {
                return view('myhouse.front.pages.recherche.neuf.carte')->with('type', $type);
            }
            elseif ($request->get('page') === 'professionnels') {
                return view('myhouse.front.pages.recherche.professionnel.carte')->with('type', $type);

            }
            elseif ($request->get('page') === 'particuliers') {
                return view('myhouse.front.pages.recherche.particulier.carte')->with('type', $type);
            }
            else {
                return abort(403);
            }
        }

        elseif ($type === 'liste') {

            /*
            * Check the type of page from the request and retrieve the appropriate page
            */

            if ($request->get('page') === 'neufs') {

                $neufs = $this->neufRepository->getAllOnlineNeuf();

                return view('myhouse.front.pages.recherche.neuf.liste', [
                    'type' => $type,
                    'neufs' => $neufs
                ]);
            }


            elseif ($request->get('page') === 'professionnels') {

                $professionnels = $this->professionnelRepository->getAllOnlineProfessionnels($request);

                return view('myhouse.front.pages.recherche.professionnel.liste', [
                    'type' => $type,
                    'professionnels' => $professionnels
                ]);
            }


            elseif ($request->get('page') === 'particuliers') {

                $partiuliers = $this->particulierRepository->getAllOnlineParticulier($request);

                return view('myhouse.front.pages.recherche.particulier.liste', [
                    'particuliers' => $partiuliers,
                    'type' => $type
                ]);
            }


            else {
                return abort(403);
            }

        }

        else {
            return abort(403);
        }
    }


    /*
     * Result product
     */

    public function resultat_neuf (string $name) {

        $neuf = $this->homeRepository->getNeuf ($name);

        return view('myhouse.front.pages.recherche.resultat.neuf.resultat', ['neuf' => $neuf]);
    }

    public function resultat_professionnel (string $type, Request $request) {

        $professionnel = $this->homeRepository->getProfessionnel ($type);



        if ( $request->ajax() ) {


            $start = (!empty($_GET["start"])) ? ($_GET["start"]) : ('');
            $end = (!empty($_GET["end"])) ? ($_GET["end"]) : ('');  

            $user = auth()->user()->id;


            
            $data = ProfessionnelAgenda::whereDate('start', '>=', $start)->whereDate('end',   '<=', $end)->where('user_id', $user)->where('professionnel_id', $professionnel->id)->get(['id','start', 'end']);
            
            return Response::json($data);
        }
        


        return view('myhouse.front.pages.recherche.resultat.professionnel.resultat', [
            'professionnel' => $professionnel
        ]);
    }

    public function resultat_particulier (string $type, Request $request) {

        $particulier = $this->homeRepository->getParticulier ($type);


        if ( $request->ajax() ) {


            $start = (!empty($_GET["start"])) ? ($_GET["start"]) : ('');
            $end = (!empty($_GET["end"])) ? ($_GET["end"]) : ('');

            $user = auth()->user()->id;


            
            $data = ParticulierAgenda::whereDate('start', '>=', $start)->whereDate('end',   '<=', $end)->where('user_id', $user)->where('particulier_id', $particulier->id)->get(['id','start', 'end']);
            
            return Response::json($data);
        }




        if ($particulier) {

            return view('myhouse.front.pages.recherche.resultat.particulier.resultat', [
            
                'particulier' => $particulier

            ]);

        }

        return abort(404);

    }


    public function entreprise ($name) {


        return view('myhouse.front.pages.recherche.extra.neuf.entreprise')->with('name', $name);
    }

    public function type ($name, $type) {
        return view('myhouse.front.pages.recherche.extra.neuf.type')->with(['name' => $name, 'type' => $type]);
    }

    public function bien ($name, $type, $bien) {
        return view('myhouse.front.pages.recherche.extra.neuf.bien')->with(['name' => $name, 'type' => $type, 'bien' => $bien]);
    }

    public function professionnel_offre($name) {
        return view('myhouse.front.pages.recherche.extra.professionnel.offre')->with('name', $name);
    }

    public function professionnel_entreprise($id) {

        $entreprise = $this->homeRepository->getEntreprise ($id);

        if ($entreprise) {
            return view('myhouse.front.pages.recherche.extra.professionnel.entreprise')->with('entreprise', $entreprise);
        }

        return abort(404);

    }




}
