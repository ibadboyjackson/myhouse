<?php

namespace App\Http\Controllers\Myhouse\Menu\Professionnel;

use App\Repository\Back\Menu\ProfessionnelRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Professionnel\ProfessionnelAgenda;
use Illuminate\Support\Facades\Response;


class ProfessionnelController extends Controller
{
    /**
     * @var ProfessionnelRepository
     */
    private $professionnelRepository;


    /**
     * ProfessionnelController constructor.
     * @param ProfessionnelRepository $professionnelRepository
     */
    public function __construct(ProfessionnelRepository $professionnelRepository)
    {
        $this->professionnelRepository = $professionnelRepository;
    }


    public function backoffice () {
 
        $professionnels = $this->professionnelRepository->getAllProfessionnels();

        return view('myhouse.back.menu.professionnel.backoffice', ['professionnels' => $professionnels]);
    }

    public function interesse ($user) {

        $interesses =  auth()->user()->favorite_professionnel;

        return view('myhouse.back.menu.professionnel.interesse', ['user' => $user], ['interesses' => $interesses]);
    }

    public function agenda (Request $request) {


 
        $agendas = auth()->user()->agenda_professionnel->unique();



        if ( $request->ajax() ) {


            $start = (!empty($_GET["start"])) ? ($_GET["start"]) : ('');
            $end = (!empty($_GET["end"])) ? ($_GET["end"]) : ('');


            $user = auth()->user()->id;
            
            $data = ProfessionnelAgenda::whereDate('start', '>=', $start)->whereDate('end',   '<=', $end)->where('user_id', $user)->get(['id','start', 'end', 'professionnel_id']);
            
            return Response::json($data);
        }






        return view('myhouse.back.menu.professionnel.agenda', ['agendas' => $agendas]);
    }

    public function campaign () {
        return view('myhouse.back.menu.professionnel.campaign.campaign');
    }


    public function campaignPost (Request $request) {

        $this->validate($request, [
           'image' => 'required|mimes:jpeg,jpg,png,svg|max:30000',
        ]);

        $this->professionnelRepository->storeHomePicture($request);
        return redirect()->route('professionnel.menu.campaign.success');
    }


    public function campaign_success () {
        return view('myhouse.back.menu.professionnel.campaign.campaign-success');
    }

    public function email () {
        return view('myhouse.back.menu.professionnel.campaign.email');
    } 


    public function email_notification () {
        return view('myhouse.back.menu.professionnel.campaign.email-notification');
    }

    public function email_success () {
        return view('myhouse.back.menu.professionnel.campaign.email-success');
    }

    public function push () {
        return view('myhouse.back.menu.professionnel.campaign.push');
    }

    public function push_notification () {
        return view('myhouse.back.menu.professionnel.campaign.push-notification');
    }

    public function push_success () {
        return view('myhouse.back.menu.professionnel.campaign.push-success');
    }

    public function entreprise () {
        return view('myhouse.back.menu.professionnel.entreprise');
    }


    public function updateEntreprise (Request $request) { 
        $this->professionnelRepository->updateEntreprise($request);
        return redirect()->route('professionnel.menu.backoffice')->with('status', __('myhouse/help.status'));
    }

    public function deleteEntreprise ($id) {
        $this->professionnelRepository->deleteEntreprise($id);
        return redirect()->back()->with('success', __('myhouse/help.entreprise'));
    }
    
    
    public function setinteresse ($id) {

        $this->professionnelRepository->storeInteresse($id);

        # return $particulier;  
        return redirect()->back();



    }

    public function unsetInteresse ($interesse) {

        $this->professionnelRepository->unsetInteresse ($interesse);
        
        return redirect()->back();

    }

}
