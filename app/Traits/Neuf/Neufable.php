<?php

namespace App\Traits\Neuf;

trait Neufable {

    use Pricable;

    public function getLatitude ($response) {
        return $response->Response->View[0]->Result[0]->Location->DisplayPosition->Latitude;
    }

    public function getLongitude ($response) {
        return $response->Response->View[0]->Result[0]->Location->DisplayPosition->Longitude;
    }

    public function hasRecord ($request) {

        $record = $this->findRecord($request->get('id'));

        $request = $request->only(['adresse', 'latitude', 'longitude']);


        $record->update($request);

        return true;
    }

    public function storeType($request) {


        $this->getPrices ($request);

        $this->unsetPrices ($request);

        $data = $this->procedMedias ($request);

        $this->createAnnonce ($data);

        return true;
    }

}
