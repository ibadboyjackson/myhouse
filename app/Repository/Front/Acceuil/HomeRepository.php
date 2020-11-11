<?php


namespace App\Repository\Front\Acceuil;


use App\Model\Generique\Banniere;
use App\Model\Generique\Entreprise;
use App\Model\Neuf\Neuf;
use App\Model\Particulier\Particulier;
use App\Model\Professionnel\Professionnel;

class HomeRepository {


    public function getAllBanniere () {
        return Banniere::orderBy('created_at', 'desc')->limit(3)->get();
    }

    public function getParticulier(string $type)
    {
        $top = preg_match_all('!\d+!', $type, $matches);
       $id = implode(' ', $matches[0]);
        return $this->findParticulierRecord($id);
    }




    public function getProfessionnel(string $type)
    {
        $top = preg_match_all('!\d+!', $type, $matches);
        $id = implode(' ', $matches[0]);
        return $this->findProfessionnelRecord($id);
    }

    public function getNeuf(string $name)
    {

        $top = preg_match_all('!\d+!', $name, $matches);
        $id = implode(' ', $matches[0]);

        $neuf = $this->findNeuf($id);

        if ($neuf) {
            return $neuf;
        }

        return abort(404);
    }












    private function findParticulierRecord ($id) {
        return Particulier::find($id);
    }

    private function findProfessionnelRecord ($id) {
        return Professionnel::find($id);
    }

    private function findNeuf ($id) {
        return Neuf::find($id);
    }

    public function getEntreprise($id)
    {
       $entreprise = Entreprise::find($id);

       if ($entreprise) {
           return $entreprise;
       }

       return abort(404);
    }




}
