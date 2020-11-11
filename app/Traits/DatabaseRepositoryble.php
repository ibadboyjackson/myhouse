<?php

namespace App\Traits;

use App\Model\Particulier\Particulier;

trait DatabaseRepositoryble {


    public function getCurrentRecord ($id) {
        return Particulier::find($id);
    }

    public function storeType ($type, $lastrecord) {

        switch ($type) {
            case "appartement" :
                $lastrecord->type_bien_id = 1;
                $lastrecord->save();
                break;

            case "villa" :
                $lastrecord->type_bien_id = 2;
                $lastrecord->save();
                break;

            case "maison" :
                $lastrecord->type_bien_id = 3;
                $lastrecord->save();
                break;

            case "chalet" :
                $lastrecord->type_bien_id = 4;
                $lastrecord->save();;
                break;

            case "riad" :
                $lastrecord->type_bien_id = 5;
                $lastrecord->save();
                break;

            case "ferme" :
                $lastrecord->type_bien_id = 6;
                $lastrecord->save();
                break;

            case "chambre" :
                $lastrecord->type_bien_id = 7;
                $lastrecord->save();
                break;

            case "cite" :
                $lastrecord->type_bien_id = 8;
                $lastrecord->save();
                break;

            case "bureau" :
                $lastrecord->type_bien_id = 9;
                $lastrecord->save();
                break;

            case "plateau" :
                $lastrecord->type_bien_id = 10;
                $lastrecord->save();
                break;

            case "entrepot" :
                $lastrecord->type_bien_id = 11;
                $lastrecord->save();
                break;

            case "garage" :
                $lastrecord->type_bien_id = 12;
                $lastrecord->save();
                break;

            case "local_industriel" :
                $lastrecord->type_bien_id = 13;
                $lastrecord->save();
                break;

            case "local_commercial" :
                $lastrecord->type_bien_id = 14;
                $lastrecord->save();
                break;

            case "propriete_agricole" :
                $lastrecord->type_bien_id = 15;
                $lastrecord->save();
                break;

            case "immeuble" :
                $lastrecord->type_bien_id = 16;
                $lastrecord->save();
                break;

            case "residentiel" :
                $lastrecord->type_bien_id = 17;
                $lastrecord->save();
                break;

            case "commercial" :
                $lastrecord->type_bien_id = 18;
                $lastrecord->save();
                break;

            case "agricole" :
                $lastrecord->type_bien_id = 19;
                $lastrecord->save();
                break;

            case "industriel" :
                $lastrecord->type_bien_id = 20;
                $lastrecord->save();
                break;

            default :
                abort(404);
        }


    }


}
