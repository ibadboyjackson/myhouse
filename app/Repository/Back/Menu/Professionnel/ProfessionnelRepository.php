<?php

namespace App\Repository\Back\Menu;

use App\Model\Generique\Banniere;
use App\Model\Professionnel\Professionnel;
use Intervention\Image\Facades\Image;
use App\Model\Generique\Entreprise;
use Illuminate\Support\Str;


class ProfessionnelRepository {


    /**
     * Get all professionnels annonces
     * @return mixed
     */
    public function getAllProfessionnels () {
        return Professionnel::where('user_id', auth()->user()->id)->orderBy('created_at', 'desc')->get();
    }

    /**
     *
     */
    public function getAllOnlineProfessionnels ($location) {

        $location = explode(" ", $location->get('location'));
        $location = str_replace(',', '', $location[0]);

        return Professionnel::where('online', 1)
            ->where('ville', $location)
            ->orderBy('created_at', 'desc')
            ->get();
    }

    /**
     * @param $request
     * Store bannière picture 
     * @return mixed
     */
    public function storeHomePicture ($request) {

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('development/files/professionnel/banniere/' . $filename);
            Image::make($image)->fit(970, 250)->save($location);

            $image = $filename;

            $data = $request->all();

            unset($data['image']);

            $data['image'] = $image;
            $data['user_id'] = auth()->user()->id;

            return Banniere::create($data);

        }

        return abort(403);

    }



    public function storeInteresse($id)

    {

        $user = auth()->user();

        $isFavorite = $user->favorite_professionnel()->where('professionnel_id', $id)->count();


        if ($isFavorite == 0) {

            $user->favorite_professionnel()->attach($id);
    
            return putSessionMessage('statut', __('myhouse/help.success'));
        }

        return putSessionMessage('error', __('myhouse/help.exist'));

    }


    public function unsetInteresse ($interresse) {

        $user = auth()->user();

        $isFavorite = $user->favorite_professionnel()->where('professionnel_id', $interresse)->count();

        if ($isFavorite >= 1) {

            $user->favorite_professionnel()->detach($interresse);
            return putSessionMessage('statut', __('myhouse/help.unsuccess'));
        }

        return putSessionMessage('error', __('myhouse/help.exist'));

    }


    private function getProfessionnelInteresse ($id) {
 
        return ProfessionnelInteresse::where('professionnel_id', $id)->first();
 
    }

    public function getInteresses () {

        return ProfessionnelInteresse::where('user_id', auth()->user()->id)->get();

    }


    public function detachAgenda ($agenda) {

        $user = auth()->user()->agenda_professionnel()->detach($agenda);

        return putSessionMessage('statut', __('myhouse/help.unsuccess'));

    }


    public function updateEntreprise ($request) {
        

        $entreprise = Entreprise::find($request->get('entreprise_id'));

        if ($entreprise) {






            if($request->hasFile('image')){

            
                $image = $request->file('image');
    
                $destinationPath = public_path('development/files/professionnel/entreprise');
    
    
                $filename = md5(Str::random(30) . time() . '_' . $image) . '.' . $image->getClientOriginalExtension();
    
                $location_436 = public_path('development/files/professionnel/entreprise/436/' .$filename);
    
    
    
    
    
                Image::make($image)
                    ->fit(436, 327)->save($location_436);
    
    
                $image->move($destinationPath, $filename);
     
                $images = $filename;

                $requests = $request->except('image', 'entreprise_id');

                $requests['image'] = $images;
     
       
    
            }





            $entreprise->update($requests);

        }


    }


    public function deleteEntreprise ($id) {
        
        $entreprise = Entreprise::find($id);

        $entreprise->delete();

        return true;
    }

}
