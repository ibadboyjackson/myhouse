<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DeposerController extends Controller
{
    /*
     * Pricing
     */
    public function pricing () {
        return view('development.deposer.pricing');
    }

    /*
     * Service particulier
     */
    public function p_service() {
        return view('development.deposer.p-service');
    }

    /*
     * Service professionnel
     */
    public function po_service() {
        return view('development.deposer.po-service');
    }

    /*
     * Service projet neuf
     */
    public function n_service() {
        return view('development.deposer.n-service');
    }

    /*
     * Deposer parcour particulier
     */

    public function transaction () {
        return view('development.deposer.particulier.transaction');
    }

    public function type () {
        return view('development.deposer.particulier.type');
    }

    public function description () {
        return view('development.deposer.particulier.description');
    }

    public function localisation () {
        return view('development.deposer.particulier.localisation');
    }

    public function upload () {
        return view('development.deposer.particulier.upload');
    }

    public function success () {
        return view('development.deposer.particulier.success');
    }

    /*
     * Deposer parcour particulier
    */

    public function subscription () {
        return view('development.deposer.professionnel.subscription');
    }

    public function enregistrement () {
        return view('development.deposer.professionnel.enregistrement');
    }

    public function transactions () {
        return view('development.deposer.professionnel.transaction');
    }

    public function types () {
        return view('development.deposer.professionnel.type');
    }

    public function descriptions () {
        return view('development.deposer.professionnel.description');
    }

    public function annonce () {
        return view('development.deposer.professionnel.annonce');
    }

    public function media () {
        return view('development.deposer.professionnel.media');
    }


    public function localisations () {
        return view('development.deposer.professionnel.localisation');
    }

    public function payement () {
        return view('development.deposer.professionnel.payement');
    }

    public function payement_success () {
        return view('development.deposer.professionnel.success');
    }









}
