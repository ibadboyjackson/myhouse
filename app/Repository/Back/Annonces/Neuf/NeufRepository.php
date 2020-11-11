<?php

namespace App\Repository\Back\Annonces\Neuf;

use App\Model\Generique\Entreprise;
use App\Model\Neuf\Annonce;
use App\Model\Neuf\Neuf;
use App\Traits\Neuf\Neufable;
use App\Traits\Professionnel\HasProfessionnel;
use Intervention\Image\Facades\Image;

class NeufRepository {

    use HasProfessionnel, Neufable;



    public function storeNeuf ($request) {

        $data = $this->getData($request->all());

        $request = $this->unsetData($data);

        $this->createNeuf($request);

        return true;
    }


    /**
     * @param $request
     * store enterprise
     * @return bool
     */
    public function storeEntreprise($request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('development/files/neuf/' . $filename);
            Image::make($image)->fit(39, 39)->save($location);

            $image = $filename;

            $request->merge([
                'images' => $image,
                'user_id' => auth()->user()->id
            ]);

        }

        $data = $this->getEntreprise($request->all());

        Entreprise::create($data);

        return true;
    }


    /**
     * @param $request
     * Store new neuf record
     * @return mixed
     */
    private function createNeuf($request) {

        return Neuf::create($request);

    }


    public function storeCritere ($request) {

        $neuf = $this->getLastRecord ($request->get('last_id'))->first();


        unset($request['last_id']);

       if($neuf) {
           $neuf->update($request->all());
       }

       return true;

    }

    public function getId ($request) {
        $neuf = $this->getLastRecord ($request->get('last_id'))->first();
        return $neuf->id;
    }

    public function findRecord ($id) {
        return Neuf::find($id);
    }



    private function getLastRecord($id) {
        return Neuf::where('last_id', $id);
    }

    public function storeDescription ($request) {
        $neuf = $this->findRecord($request->get('id'));

        unset($request['id']);

        $neuf->update($request->all());

        return true;
    }


    public function recordMedia ($request) {

        $names = [];

        foreach($request->file('media') as $image)
        {
            $destinationPath = public_path('development/files/neuf/images');

            $filename = $image->getClientOriginalName();


            $location_878 = public_path('development/files/neuf/878/' .$filename);
            $location_429 = public_path('development/files/neuf/429/' .$filename);
            $location_400 = public_path('development/files/neuf/400/' .$filename);
            $location_124 = public_path('development/files/neuf/124/' .$filename);
            $location_204 = public_path('development/files/neuf/204/' .$filename);



            Image::make($image)
                ->fit(878, 464)->save($location_878)
                ->fit(429, 291)->save($location_429)
                ->fit(400, 304)->save($location_400)
                ->fit(204, 134)->save($location_204)
                ->fit(124, 87)->save($location_124);


            $image->move($destinationPath, $filename);

            array_push($names, $filename);

        }

        $images = json_encode($names);

        $request['medias'] = $images;

        unset($request['media']);

        $neuf = $this->findRecord($request->get('id'));

        $neuf->update($request->all());
    }

    public function delete($id)
    {
        $record = $this->findRecord($id);
        $record->delete();
    }

    public function updateVente($id, $request)
    {

        $data = $this->getData($request->all());

        $request = $this->unsetData($data);

        $record = $this->findRecord($id);

        $record->update($request);
    }


    private function createAnnonce ($data) {
        Annonce::create($data);
    }


    public function activeOnline($id)
    {
        $record = $this->findRecord($id);
        $record->update(['online' => 1]);
        return true;
    }

    public function deactiveOnline($id)
    {
        $record = $this->findRecord($id);
        $record->update(['online' => 0]);
        return true;
    }
}
