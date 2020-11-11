<?php

namespace App\Providers;

use App\Model\Generique\AnnonceUrl;
use App\Model\Generique\Url\ConnectUrl;
use App\Model\Generique\Url\MenuUrl;
use App\Repository\Back\Menu\Url\UrlRepository;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        View::composer( $this->view() , function ($view) {
            $view->with('url', MenuUrl::all()->last()->url);
        });

        View::composer($this->viewConnect(), function ($view) {
           $view->with('url', ConnectUrl::all()->last()->url);
        });

        View::composer($this->viewAnnonce(), function ($view) {
           $view->with('url', AnnonceUrl::where('user_id', auth()->user()->id)->get()->last()->url);
        });









    }


    /**
     * @return array
     * view array from menu to get previous url
     */
    private function view () {
        return [

            'myhouse.back.menu.particulier.annonce',
            'myhouse.back.menu.particulier.agenda',
            'myhouse.back.menu.particulier.interesse',
            'myhouse.back.includes.generique.profile',
            'myhouse.back.includes.generique.contact',
            'myhouse.back.includes.generique.charte',
            'myhouse.back.includes.generique.faq',
            'myhouse.back.includes.generique.facture',
            'myhouse.back.includes.generique.message'
        ];
    }

    private function viewConnect () {
        return [
            'myhouse.front.pages.auth.connexion',
            'myhouse.front.pages.auth.inscription',
            'myhouse.front.pages.auth.oublie',
            'myhouse.front.pages.auth.confirm',
            'myhouse.front.pages.auth.password',
            'myhouse.front.pages.auth.success'
        ];
    }

    private function viewAnnonce () {
        return [
            'myhouse.back.annonces.particuliers.service',
            'myhouse.back.annonces.particuliers.transaction',
            'myhouse.back.annonces.particuliers.type',
            'myhouse.back.annonces.particuliers.description',
            'myhouse.back.annonces.particuliers.critere',
            'myhouse.back.annonces.particuliers.localisation',
            'myhouse.back.annonces.particuliers.upload',
            'myhouse.back.annonces.particuliers.success',



            #professionnel

            'myhouse.back.annonces.professionnels.service',
            'myhouse.back.annonces.professionnels.abonnement',
            'myhouse.back.annonces.professionnels.enregistrement',
            'myhouse.back.annonces.professionnels.transaction',
            'myhouse.back.annonces.professionnels.type',
            'myhouse.back.annonces.professionnels.description',
            'myhouse.back.annonces.professionnels.critere',

            'myhouse.back.annonces.professionnels.annonce',
            'myhouse.back.annonces.professionnels.media',
            'myhouse.back.annonces.professionnels.localisation',
            'myhouse.back.annonces.professionnels.success',


        ];
    }

}
