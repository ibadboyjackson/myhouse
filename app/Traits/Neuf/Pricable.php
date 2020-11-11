<?php

namespace App\Traits\Neuf;


use Intervention\Image\Facades\Image;

trait Pricable {



    public function getPrices ($request) {

        if (isset($request['appartement'])) {
            $request ['prix_appartement'] = $this->calculatePrice($request['man1'], $request['man2'], $request['man3']);
        }

        if (isset($request['villa'])) {
            $request ['prix_villa'] = $this->calculatePrice($request['man4'], $request['man5'], $request['man6']);
        }

        if (isset($request['maison'])) {
            $request ['prix_maison'] = $this->calculatePrice($request['man7'], $request['man8'], $request['man9']);
        }

        if (isset($request['riad'])) {
            $request ['prix_riad'] = $this->calculatePrice($request['man10'], $request['man11'], $request['man12']);
        }

        if (isset($request['bureau'])) {
            $request ['prix_bureau'] = $this->calculatePrice($request['man13'], $request['man14'], $request['man15']);
        }

        if (isset($request['plateau'])) {
            $request ['prix_plateau'] = $this->calculatePrice($request['man16'], $request['man17'], $request['man18']);
        }

        if (isset($request['chalet'])) {
            $request ['prix_chalet'] = $this->calculatePrice($request['man19'], $request['man20'], $request['man21']);
        }


        if (isset($request['commerce'])) {
            $request ['prix_commerce'] = $this->calculatePrice($request['man22'], $request['man23'], $request['man24']);
        }

        if (isset($request['commercial'])) {
            $request ['prix_commercial'] = $this->calculatePrice($request['man25'], $request['man26'], $request['man27']);
        }


        if (isset($request['residentiel'])) {
            $request ['prix_residentiel'] = $this->calculatePrice($request['man28'], $request['man29'], $request['man30']);
        }

        return $request;

    }


    public function unsetPrices ($request) {
        unset($request['man1']);
        unset($request['man2']);
        unset($request['man3']);
        unset($request['man4']);
        unset($request['man5']);
        unset($request['man6']);
        unset($request['man7']);
        unset($request['man8']);
        unset($request['man9']);
        unset($request['man10']);
        unset($request['man11']);
        unset($request['man12']);
        unset($request['man13']);
        unset($request['man14']);
        unset($request['man15']);
        unset($request['man16']);
        unset($request['man17']);
        unset($request['man18']);
        unset($request['man19']);
        unset($request['man20']);
        unset($request['man21']);
        unset($request['man22']);
        unset($request['man23']);
        unset($request['man24']);
        unset($request['man25']);
        unset($request['man26']);
        unset($request['man27']);
        unset($request['man28']);
        unset($request['man29']);
        unset($request['man30']);

        return $request;

    }


    public function procedMedias ($request) {

        $names_1 = [];
        $names_2 = [];
        $names_3 = [];
        $names_4 = [];
        $names_5 = [];
        $names_6 = [];
        $names_7 = [];
        $names_8 = [];
        $names_9 = [];
        $names_10 = [];

        $data = $request->all();


        if($request->has('medias_appartement')) {

            foreach($request->file('medias_appartement') as $image)
            {
                $destinationPath = public_path('development/files/neuf/images');

                $filename = $image->getClientOriginalName();

                $location_429 = public_path('development/files/neuf/appartement/429/' .$filename);
                $location_400 = public_path('development/files/neuf/appartement/400/' .$filename);
                $location_124 = public_path('development/files/neuf/appartement/124/' .$filename);
                $location_878 = public_path('development/files/neuf/appartement/878/' .$filename);
                $location_204 = public_path('development/files/neuf/appartement/204/' .$filename);



                Image::make($image)
                    ->fit(878, 464)->save($location_878)
                    ->fit(429, 291)->save($location_429)
                    ->fit(400, 304)->save($location_400)
                    ->fit(204, 134)->save($location_204)
                    ->fit(124, 87)->save($location_124);

                $image->move($destinationPath, $filename);

                array_push($names_1, $filename);

            }

            $images_1 = json_encode($names_1);


            $data ['medias_appartement'] = $images_1;
        }

        if($request->has('medias_villa')) {
            foreach($request->file('medias_villa') as $image_1)
            {
                $destinationPath_1 = public_path('development/files/neuf/images');

                $filename_1 = $image_1->getClientOriginalName();

                $location_429 = public_path('development/files/neuf/villa/429/' .$filename_1);
                $location_400 = public_path('development/files/neuf/villa/400/' .$filename_1);
                $location_124 = public_path('development/files/neuf/villa/124/' .$filename_1);
                $location_878 = public_path('development/files/neuf/villa/878/' .$filename_1);
                $location_204 = public_path('development/files/neuf/villa/204/' .$filename_1);



                Image::make($image_1)
                    ->fit(878, 464)->save($location_878)
                    ->fit(429, 291)->save($location_429)
                    ->fit(400, 304)->save($location_400)
                    ->fit(204, 134)->save($location_204)
                    ->fit(124, 87)->save($location_124);

                $image_1->move($destinationPath_1, $filename_1);

                array_push($names_2, $filename_1);
            }

            $images_2 = json_encode($names_2);

            $data ['medias_villa'] = $images_2;
        }

        if($request->has('medias_maison')) {
            foreach($request->file('medias_maison') as $image_2)
            {
                $destinationPath_2 = public_path('development/files/neuf/images');

                $filename_2 = $image_2->getClientOriginalName();

                $location_429 = public_path('development/files/neuf/maison/429/' .$filename_2);
                $location_400 = public_path('development/files/neuf/maison/400/' .$filename_2);
                $location_124 = public_path('development/files/neuf/maison/124/' .$filename_2);
                $location_878 = public_path('development/files/neuf/maison/878/' .$filename_2);
                $location_204 = public_path('development/files/neuf/maison/204/' .$filename_2);



                Image::make($image_2)
                    ->fit(878, 464)->save($location_878)
                    ->fit(429, 291)->save($location_429)
                    ->fit(400, 304)->save($location_400)
                    ->fit(204, 134)->save($location_204)
                    ->fit(124, 87)->save($location_124);

                $image_2->move($destinationPath_2, $filename_2);

                array_push($names_3, $filename_2);
            }

            $images_3 = json_encode($names_3);

            $data ['medias_maison'] = $images_3;
        }

        if($request->has('medias_riad')) {
            foreach($request->file('medias_riad') as $image_3)
            {
                $destinationPath_3 = public_path('development/files/neuf/images');

                $filename_3 = $image_3->getClientOriginalName();

                $location_429 = public_path('development/files/neuf/riad/429/' .$filename_3);
                $location_400 = public_path('development/files/neuf/riad/400/' .$filename_3);
                $location_124 = public_path('development/files/neuf/riad/124/' .$filename_3);
                $location_878 = public_path('development/files/neuf/riad/878/' .$filename_3);
                $location_204 = public_path('development/files/neuf/riad/204/' .$filename_3);



                Image::make($image_3)
                    ->fit(878, 464)->save($location_878)
                    ->fit(429, 291)->save($location_429)
                    ->fit(400, 304)->save($location_400)
                    ->fit(204, 134)->save($location_204)
                    ->fit(124, 87)->save($location_124);

                $image_3->move($destinationPath_3, $filename_3);

                array_push($names_4, $filename_3);
            }

            $images_4 = json_encode($names_4);

            $data ['medias_riad'] = $images_4;
        }

        if($request->has('medias_chalet')) {
            foreach($request->file('medias_chalet') as $image_4)
            {
                $destinationPath_4 = public_path('development/files/neuf/images');

                $filename_4 = $image_4->getClientOriginalName();

                $location_429 = public_path('development/files/neuf/chalet/429/' .$filename_4);
                $location_400 = public_path('development/files/neuf/chalet/400/' .$filename_4);
                $location_124 = public_path('development/files/neuf/chalet/124/' .$filename_4);
                $location_878 = public_path('development/files/neuf/chalet/878/' .$filename_4);
                $location_204 = public_path('development/files/neuf/chalet/204/' .$filename_4);



                Image::make($image_4)
                    ->fit(878, 464)->save($location_878)
                    ->fit(429, 291)->save($location_429)
                    ->fit(400, 304)->save($location_400)
                    ->fit(204, 134)->save($location_204)
                    ->fit(124, 87)->save($location_124);

                $image_4->move($destinationPath_4, $filename_4);

                array_push($names_5, $filename_4);
            }

            $images_5 = json_encode($names_5);

            $data ['medias_chalet'] = $images_5;
        }

        if($request->has('medias_commerce')) {
            foreach($request->file('medias_commerce') as $image_5)
            {
                $destinationPath_5 = public_path('development/files/neuf/images');

                $filename_5 = $image_5->getClientOriginalName();

                $location_429 = public_path('development/files/neuf/commerce/429/' .$filename_5);
                $location_400 = public_path('development/files/neuf/commerce/400/' .$filename_5);
                $location_124 = public_path('development/files/neuf/commerce/124/' .$filename_5);
                $location_878 = public_path('development/files/neuf/commerce/878/' .$filename_5);
                $location_204 = public_path('development/files/neuf/commerce/204/' .$filename_5);



                Image::make($image_5)
                    ->fit(878, 464)->save($location_878)
                    ->fit(429, 291)->save($location_429)
                    ->fit(400, 304)->save($location_400)
                    ->fit(204, 134)->save($location_204)
                    ->fit(124, 87)->save($location_124);

                $image_5->move($destinationPath_5, $filename_5);

                array_push($names_6, $filename_5);
            }

            $images_6 = json_encode($names_6);

            $data ['medias_commerce'] = $images_6;
        }

        if($request->has('medias_bureau')) {
            foreach($request->file('medias_bureau') as $image_6)
            {
                $destinationPath_6 = public_path('development/files/neuf/images');

                $filename_6 = $image_6->getClientOriginalName();

                $location_429 = public_path('development/files/neuf/bureau/429/' .$filename_6);
                $location_400 = public_path('development/files/neuf/bureau/400/' .$filename_6);
                $location_124 = public_path('development/files/neuf/bureau/124/' .$filename_6);
                $location_878 = public_path('development/files/neuf/bureau/878/' .$filename_6);
                $location_204 = public_path('development/files/neuf/bureau/204/' .$filename_6);



                Image::make($image_6)
                    ->fit(878, 464)->save($location_878)
                    ->fit(429, 291)->save($location_429)
                    ->fit(400, 304)->save($location_400)
                    ->fit(204, 134)->save($location_204)
                    ->fit(124, 87)->save($location_124);

                $image_6->move($destinationPath_6, $filename_6);

                array_push($names_7, $filename_6);
            }

            $images_7 = json_encode($names_7);

            $data ['medias_bureau'] = $images_7;
        }

        if($request->has('medias_plateau')) {
            foreach($request->file('medias_plateau') as $image_7)
            {
                $destinationPath_7 = public_path('development/files/neuf/images');

                $filename_7 = $image_7->getClientOriginalName();

                $location_429 = public_path('development/files/neuf/plateau/429/' .$filename_7);
                $location_400 = public_path('development/files/neuf/plateau/400/' .$filename_7);
                $location_124 = public_path('development/files/neuf/plateau/124/' .$filename_7);
                $location_878 = public_path('development/files/neuf/plateau/878/' .$filename_7);
                $location_204 = public_path('development/files/neuf/plateau/204/' .$filename_7);



                Image::make($image_7)
                    ->fit(878, 464)->save($location_878)
                    ->fit(429, 291)->save($location_429)
                    ->fit(400, 304)->save($location_400)
                    ->fit(204, 134)->save($location_204)
                    ->fit(124, 87)->save($location_124);

                $image_7->move($destinationPath_7, $filename_7);

                array_push($names_8, $filename_7);
            }

            $images_8 = json_encode($names_8);

            $data ['medias_plateau'] = $images_8;
        }

        if($request->has('medias_residentiel')) {

            foreach($request->file('medias_residentiel') as $image_8)
            {
                $destinationPath_8 = public_path('development/files/neuf/images');

                $filename_8 = $image_8->getClientOriginalName();

                $location_429 = public_path('development/files/neuf/residentiel/429/' .$filename_8);
                $location_400 = public_path('development/files/neuf/residentiel/400/' .$filename_8);
                $location_124 = public_path('development/files/neuf/residentiel/124/' .$filename_8);
                $location_878 = public_path('development/files/neuf/residentiel/878/' .$filename_8);
                $location_204 = public_path('development/files/neuf/residentiel/204/' .$filename_8);



                Image::make($image_8)
                    ->fit(878, 464)->save($location_878)
                    ->fit(429, 291)->save($location_429)
                    ->fit(400, 304)->save($location_400)
                    ->fit(204, 134)->save($location_204)
                    ->fit(124, 87)->save($location_124);

                $image_8->move($destinationPath_8, $filename_8);

                array_push($names_9, $filename_8);
            }

            $images_9 = json_encode($names_9);

            $data ['medias_residentiel'] = $images_9;
        }

        if($request->has('medias_commercial')) {
            foreach($request->file('medias_commercial') as $image_9)
            {
                $destinationPath_9 = public_path('development/files/neuf/images');

                $filename_9 = $image_9->getClientOriginalName();

                $location_429 = public_path('development/files/neuf/commercial/429/' .$filename_9);
                $location_400 = public_path('development/files/neuf/commercial/400/' .$filename_9);
                $location_124 = public_path('development/files/neuf/commercial/124/' .$filename_9);
                $location_878 = public_path('development/files/neuf/commercial/878/' .$filename_9);
                $location_204 = public_path('development/files/neuf/commercial/204/' .$filename_9);



                Image::make($image_9)
                    ->fit(878, 464)->save($location_878)
                    ->fit(429, 291)->save($location_429)
                    ->fit(400, 304)->save($location_400)
                    ->fit(204, 134)->save($location_204)
                    ->fit(124, 87)->save($location_124);

                $image_9->move($destinationPath_9, $filename_9);

                array_push($names_10, $filename_9);
            }

            $images_10 = json_encode($names_10);

            $data ['medias_commercial'] = $images_10;
        }


        return $data;

    }



}
