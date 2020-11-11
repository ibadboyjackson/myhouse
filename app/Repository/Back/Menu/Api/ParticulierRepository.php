<?php

namespace App\Repository\Back\Menu\Api;
use Illuminate\Support\Facades\Response;

use App\ParticulierAgenda;
use App\Model\Professionnel\ProfessionnelAgenda;


class ParticulierRepository {




    public function setParticulierAgenda ($request) {

     
        if ($request->ajax()) {
            
            $user = auth()->user();

            $start = str_replace("amp", "", $request->get('amp;start'));
            $end = str_replace('amp', '', $request->get('amp;end'));

            $user->agenda_particulier()->attach($request->get('particulier_id'), ['start' => $start, 'end' => $end]);

            $event = true;

             return Response::json($event);

    
    
            # $isFavorite = $user->agenda_particulier()->where('particulier_id', $request->get('particulier_id'))->count();
            /* return response()->json([
                'status' => '403',//sample entry
                'message' => 'ACCOUNT ACTION HAS BEEN DISABLED',//sample message
             ], Response::HTTP_FORBIDDEN);

            */

        }

    

    }


    public function updateParticulierAgenda ($request) {


        if ( $request->ajax() ) {

            $start = str_replace("amp", "", $request->get('amp;start'));
            $end = str_replace('amp', '', $request->get('amp;end'));

            $id = str_replace('amp', '', $request->get('amp;id'));


            ParticulierAgenda::where('id' , $id)->update([
                'start' => $start,
                'end' => $end
            ]);

            $event = true;

            return Response::json($event);

        }

    }


    public function deleteParticulierRepository($request) {

        $id = str_replace('amp', '', $request->get('amp;id'));

        $event = ParticulierAgenda::where('id', $id)->delete();
   
        return Response::json($event);

    }




    public function setProfessionnelAgenda ($request) {

     
        if ($request->ajax()) {
            
            $user = auth()->user();

            $start = str_replace("amp", "", $request->get('amp;start'));
            $end = str_replace('amp', '', $request->get('amp;end'));


            $user->agenda_professionnel()->attach($request->get('professionnel_id'), ['start' => $start, 'end' => $end]);

            $event = true;

             return Response::json($event);

    
    
            # $isFavorite = $user->agenda_particulier()->where('particulier_id', $request->get('particulier_id'))->count();
            /* return response()->json([
                'status' => '403',//sample entry
                'message' => 'ACCOUNT ACTION HAS BEEN DISABLED',//sample message
             ], Response::HTTP_FORBIDDEN);

            */

        }

    

    }

    public function updateProfessionnelAgenda ($request) {


        if ( $request->ajax() ) {

            $start = str_replace("amp", "", $request->get('amp;start'));
            $end = str_replace('amp', '', $request->get('amp;end'));

            $id = str_replace('amp', '', $request->get('amp;id'));


            ProfessionnelAgenda::where('id' , $id)->update([
                'start' => $start,
                'end' => $end
            ]);

            $event = true;

            return Response::json($event);

        }

    }


    public function deleteProfessionnelRepository($request) {

        $id = str_replace('amp', '', $request->get('amp;id'));

        $event = ProfessionnelAgenda::where('id', $id)->delete();
   
        return Response::json($event);

    }

}