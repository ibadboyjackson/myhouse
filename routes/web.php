<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
 * Home page
 */

Route::group(['middleware' => 'language'], function () {

    Route::get('/', 'Myhouse\Home\HomeController@index')->name('acceuil');

    Route::post('/lang', 'Myhouse\Home\HomeController@language')->name('lang');

    /*
     * Search Routes
     */

    Route::get('/recherche/{type}', 'Myhouse\Home\HomeController@recherche')->name('recherche');


    Route::get('test', function () {
       return view('test');
    });

    /*
     * Search Product
     */

    Route::get('/resultat/particuliers/{name}', 'Myhouse\Home\HomeController@resultat_particulier')->name('resultat.particulier');

    
    Route::get('/resultat/professionnels/{name}', 'Myhouse\Home\HomeController@resultat_professionnel')->name('resultat.professionnel');
    Route::get('/resultat/neufs/{name}', 'Myhouse\Home\HomeController@resultat_neuf')->name('resultat.neuf');


    Route::get('/resultat/neufs/{name}/{type}', 'Myhouse\Home\HomeController@type')->name('resultat.type');
    Route::get('/resultat/neufs/{name}/{type}/type/{bien}', 'Myhouse\Home\HomeController@bien')->name('resultat.bien');
    Route::get('/resultat/neufs/page/entreprise/{name}', 'Myhouse\Home\HomeController@entreprise')->name('profile.entreprise');

    Route::get('/resultat/professionnels/{name}/offre', 'Myhouse\Home\HomeController@professionnel_offre')->name('professionnel.offre');

    Route::get('/resultat/professionnels/entreprise/{id}', 'Myhouse\Home\HomeController@professionnel_entreprise')->name('professionnel.entreprise');





    Route::get('/resultat/appartements', 'Myhouse\Home\HomeController@appartement')->name('appartement');
    Route::get('/resultat/appartements/appartement', 'Myhouse\Home\HomeController@appartements')->name('appartements');


    Route::get('/resultat/villa', 'Myhouse\Home\HomeController@villa')->name('villa');
    Route::get('/resultat/commerce', 'Myhouse\Home\HomeController@commerce')->name('commerce');
    Route::get('/resultat/terrain', 'Myhouse\Home\HomeController@terrain')->name('terrain');




    /*
     * Blog
     */

    Route::get('blog', 'Myhouse\Blog\PostController@blog')->name('blog');
    Route::get('blog/single', 'Myhouse\Blog\PostController@single')->name('blog-single');



    /*
     * Register login
     */

    Route::get('connexion', 'Myhouse\Auth\LoginController@showLoginForm')->name('connexion');
    Route::post('connexion', 'Myhouse\Auth\LoginController@login')->name('connexion');
    Route::post('logout', 'Myhouse\Auth\LoginController@logout')->name('logout');

    Route::get('inscription', 'Myhouse\Auth\RegisterController@showRegistrationForm')->name('inscription');
    Route::post('inscription', 'Myhouse\Auth\RegisterController@register')->name('inscription');
    Route::get('forgot', 'Myhouse\Auth\ForgotPasswordController@showLinkRequestForm')->name('forgot');
    Route::post('forgot', 'Myhouse\Auth\ForgotPasswordController@showLinkRequestForm')->name('forgot');
    Route::post('forgot', 'Myhouse\Auth\ForgotPasswordController@sendResetLinkEmail')->name('forgot.email');
    Route::get('password/reset/{token}', 'Myhouse\Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'Myhouse\Auth\ResetPasswordController@reset')->name('password.update');
    Route::get('confirm/{email}', 'Myhouse\Auth\AuthController@confirm')->name('confirm')->middleware('guest');
    Route::get('email/{email}', 'Myhouse\Auth\RegisterController@email')->name('email');
    Route::get('connect/success', 'Myhouse\Auth\SuccessController@success')->name('success');
    Route::get('activate/{id}/{token}', 'Myhouse\Auth\RegisterController@confirm')->name('email.confirm');








    /*
     * Menu Routes
     */


    /*
     * Generique
     */

    Route::get('menu/profile/{user}', 'Myhouse\Menu\Generique\GeneriqueController@profile')->name('menu.profile');
    Route::post('menu/profile/{id}', 'Myhouse\Menu\Generique\GeneriqueController@updateUser')->name('user.update');


    Route::get('menu/messagerie/{user}', 'Myhouse\Menu\Generique\GeneriqueController@messagerie')->name('menu.messagerie');
    Route::get('menu/contact/{user}', 'Myhouse\Menu\Generique\GeneriqueController@contact')->name('menu.contact');
    Route::post('menu/contact/{user}', 'Myhouse\Menu\Generique\GeneriqueController@postContact')->name('menu.contact');

    Route::get('menu/faq/{user}', 'Myhouse\Menu\Generique\GeneriqueController@faq')->name('menu.faq');
    Route::get('menu/charte/{user}', 'Myhouse\Menu\Generique\GeneriqueController@charte')->name('menu.charte');
    Route::get('menu/facture/{user}', 'Myhouse\Menu\Generique\GeneriqueController@facture')->name('menu.facture');




    /*
     * Particulier
     */

    Route::get('menu/particulier/annonces', 'Myhouse\Menu\Particulier\ParticulierController@annonces')->name('particulier.menu.annonces');

    Route::get('menu/particulier/menu', 'Myhouse\Menu\Particulier\ParticulierController@menu')->name('menu');

    Route::get('menu/particulier/interesse', 'Myhouse\Menu\Particulier\ParticulierController@interesse')->name('particulier.menu.interesse');
    Route::get('menu/particulier/agenda', 'Myhouse\Menu\Particulier\ParticulierController@agenda')->name('particulier.menu.agenda');

    Route::get('menu/particulier/annonce/interesse/{particulier}', 'Myhouse\Menu\Particulier\ParticulierController@setinteresse')->name('particulier.annonce.interesse');
    Route::get('menu/particulier/annonce/uninteresse/{interesse}', 'Myhouse\Menu\Particulier\ParticulierController@unsetInteresse')->name('particulier.annonce.uninteresse');

    Route::get('menu/particulier/annonce/unagenda/{agenda}', 'Myhouse\Menu\Particulier\ParticulierController@unsetAgenda')->name('particulier.annonce.unagenda');



    /*
     * Professsionnel
     */

    Route::get('menu/professionnel/backoffice', 'Myhouse\Menu\Professionnel\ProfessionnelController@backoffice')->name('professionnel.menu.backoffice');

    Route::post('menu/professionnel/backoffice/user', 'Myhouse\Auth\RegisterCloneController@register')->name('professionnel.menu.user');
    Route::post('menu/professionnel/backoffice/promotion', 'Myhouse\Auth\RegisterCloneController@promotion')->name('professionnel.menu.promotion');


    Route::get('menu/professionnel/interesse/{user}', 'Myhouse\Menu\Professionnel\ProfessionnelController@interesse')->name('professionnel.menu.interesse');
    Route::get('menu/professionnel/agenda', 'Myhouse\Menu\Professionnel\ProfessionnelController@agenda')->name('professionnel.menu.agenda');
    Route::get('menu/professionnel/statistiques', 'Myhouse\Menu\Professionnel\ProfessionnelController@statistique')->name('professionnel.menu.statistique');


    Route::get('menu/professionnel/backoffice/campaign', 'Myhouse\Menu\Professionnel\ProfessionnelController@campaign')->name('professionnel.menu.campaign');
    Route::post('menu/professionnel/backoffice/campaign', 'Myhouse\Menu\Professionnel\ProfessionnelController@campaignPost')->name('professionnel.menu.campaign');

    Route::get('menu/professionnel/backoffice/entreprise', 'Myhouse\Menu\Professionnel\ProfessionnelController@entreprise')->name('professionnel.menu.entreprise');
    Route::post('menu/professionnel/backoffice/entreprise', 'Myhouse\Menu\Professionnel\ProfessionnelController@updateEntreprise')->name('professionnel.menu.entreprise');
    Route::get('menu/professionnel/backoffice/entreprise/{id}', 'Myhouse\Menu\Professionnel\ProfessionnelController@deleteEntreprise')->name('professionnel.menu.delete.entreprise');



    Route::get('menu/professionnel/backoffice/campaign/push', 'Myhouse\Menu\Professionnel\ProfessionnelController@push')->name('professionnel.menu.push');
    Route::get('menu/professionnel/backoffice/campaign/push/notification', 'Myhouse\Menu\Professionnel\ProfessionnelController@push_notification')->name('professionnel.menu.push.next');

    Route::get('menu/professionnel/backoffice/campaign/email', 'Myhouse\Menu\Professionnel\ProfessionnelController@email')->name('professionnel.menu.email');
    Route::get('menu/professionnel/backoffice/campaign/email/notification', 'Myhouse\Menu\Professionnel\ProfessionnelController@email_notification')->name('professionnel.menu.push.email');
    Route::get('menu/professionnel/backoffice/campaign/email/success', 'Myhouse\Menu\Professionnel\ProfessionnelController@email_success')->name('professionnel.menu.push.next.email');


    Route::get('menu/professionnel/backoffice/campaign/success', 'Myhouse\Menu\Professionnel\ProfessionnelController@campaign_success')->name('professionnel.menu.campaign.success');
    Route::get('menu/professionnel/backoffice/campaign/push/success', 'Myhouse\Menu\Professionnel\ProfessionnelController@push_success')->name('professionnel.menu.push.next.success');


    Route::get('menu/professionnel/annonce/interesse/{id}', 'Myhouse\Menu\Professionnel\ProfessionnelController@setinteresse')->name('professionnel.annonce.interesse');

    Route::get('menu/professionnel/annonce/uninteresse/{interesse}', 'Myhouse\Menu\Professionnel\ProfessionnelController@unsetInteresse')->name('professionnel.annonce.uninteresse');


    /*
     * Projets neufs
     */

    Route::get('menu/projets-neufs/backoffice', 'Myhouse\Menu\Neuf\NeufController@backoffice')->name('neuf.menu.backoffice');
    Route::get('menu/projets-neufs/agenda', 'Myhouse\Menu\Neuf\NeufController@agenda')->name('neuf.menu.agenda');
    Route::get('menu/projets-neufs/entreprise', 'Myhouse\Menu\Neuf\NeufController@entreprise')->name('neuf.menu.entreprise');


    Route::get('menu/projets-neufs/statistique', 'Myhouse\Menu\Neuf\NeufController@statistique')->name('neuf.menu.statistique');
    Route::get('menu/projets-neufs/evenement', 'Myhouse\Menu\Neuf\NeufController@evenement')->name('neuf.menu.evenement');
    Route::post('menu/projets-neufs/evenement', 'Myhouse\Menu\Neuf\NeufController@evenements')->name('neuf.menu.evenement');
    Route::get('menu/projets-neufs/evenement/plateform', 'Myhouse\Menu\Neuf\NeufController@plateform')->name('neuf.menu.plateform');
    Route::get('menu/projets-neufs/interesse/{user}', 'Myhouse\Menu\Neuf\NeufController@interesse')->name('neuf.menu.interesse');







    /*
     * Annonces Routes
     */

    Route::get('sujet/deposer/pricing/url', 'Myhouse\Annonces\Generique\PricingController@url')->name('particulier.pricing.url');
    Route::get('sujet/deposer/pricing', 'Myhouse\Annonces\Generique\PricingController@pricing')->name('pricing');

    /*
     * Particuliers
     */

    Route::get('sujet/deposer/particulier/services', 'Myhouse\Annonces\Particuliers\ParticulierController@service')->name('particulier.service');

    Route::get('sujet/deposer/particulier/url', 'Myhouse\Annonces\Particuliers\ParticulierController@url')->name('particulier.url');
    
    Route::get('sujet/deposer/particulier/backurl', 'Myhouse\Annonces\Particuliers\ParticulierController@backurl')->name('particulier.backurl');
    Route::get('sujet/deposer/particulier/beforeredirect', 'Myhouse\Annonces\Particuliers\ParticulierController@beforeredirect')->name('particulier.beforeredirect');



    Route::get('sujet/deposer/particulier/transaction', 'Myhouse\Annonces\Particuliers\ParticulierController@transaction')->name('particulier.transaction');
    Route::get('sujet/deposer/particulier/type', 'Myhouse\Annonces\Particuliers\ParticulierController@type')->name('particulier.type');

    Route::get('sujet/deposer/particulier/type/{id}', 'Myhouse\Annonces\Particuliers\ParticulierController@typage')->name('particulier.type.type');

    Route::get('sujet/deposer/particulier/description', 'Myhouse\Annonces\Particuliers\ParticulierController@description')->name('particulier.description');

    Route::get('sujet/deposer/particulier/critere', 'Myhouse\Annonces\Particuliers\ParticulierController@critere')->name('particulier.critere');


    Route::get('sujet/deposer/particulier/localisation', 'Myhouse\Annonces\Particuliers\ParticulierController@localisation')->name('particulier.localisation');
    Route::get('sujet/deposer/particulier/showlocalisation/{id}', 'Myhouse\Annonces\Particuliers\ParticulierController@showLocalisation')->name('particulier.localisation.localisation');

    Route::get('sujet/deposer/particulier/upload/{id}', 'Myhouse\Annonces\Particuliers\ParticulierController@upload')->name('particulier.upload');
    
    Route::get('sujet/deposer/particulier/postlocalisation', 'Myhouse\Annonces\Particuliers\ParticulierController@postlocalisation')->name('particulier.postlocalisation');

    
    Route::post('sujet/deposer/particulier/successfull', 'Myhouse\Annonces\Particuliers\ParticulierController@successfull')->name('particulier.successfull');
    Route::get('sujet/deposer/particulier/success', 'Myhouse\Annonces\Particuliers\ParticulierController@success')->name('particulier.success');



    Route::get('sujet/deposer/particulier/activeonline/{id}', 'Myhouse\Annonces\Particuliers\ParticulierController@activeOnline')->name('particulier.active.online');
    Route::get('sujet/deposer/particulier/deactiveonline/{id}', 'Myhouse\Annonces\Particuliers\ParticulierController@deactiveOnline')->name('particulier.deactive.online');

    Route::get('sujet/deposer/particulier/delete/{id}', 'Myhouse\Annonces\Particuliers\ParticulierController@delete')->name('particulier.delete');
    Route::get('sujet/deposer/particulier/edit/{id}', 'Myhouse\Annonces\Particuliers\ParticulierController@edit')->name('particulier.edit');
    Route::get('sujet/deposer/particulier/update/{id}', 'Myhouse\Annonces\Particuliers\ParticulierController@update')->name('particulier.update');



    /*
     * Professionnels
     */  


    Route::get('sujet/deposer/professionnel/url', 'Myhouse\Annonces\Professionnels\ProfessionnelController@url')->name('professionnel.url');

    Route::get('sujet/deposer/professionnel/services', 'Myhouse\Annonces\Professionnels\ProfessionnelController@service')->name('professionnel.service');

    Route::get('sujet/deposer/professionnel/abonnement', 'Myhouse\Annonces\Professionnels\ProfessionnelController@abonnement')->name('professionnel.subscription');

    Route::get('sujet/deposer/professionnel/enregistrement', 'Myhouse\Annonces\Professionnels\ProfessionnelController@enregistrement')->name('professionnel.enregistrement');
    Route::post('sujet/deposer/professionnel/enregistrement', 'Myhouse\Annonces\Professionnels\ProfessionnelController@storeEntreprise')->name('professionnel.enregistrement');






    Route::get('sujet/deposer/professionnel/transaction', 'Myhouse\Annonces\Professionnels\ProfessionnelController@transaction')->name('professionnel.transaction');

    Route::get('sujet/deposer/professionnel/type', 'Myhouse\Annonces\Professionnels\ProfessionnelController@type')->name('professionnel.types');

    Route::get('sujet/deposer/professionnel/type/{id}', 'Myhouse\Annonces\Professionnels\ProfessionnelController@typage')->name('professionnel.type.type');


    Route::get('sujet/deposer/professionnel/description', 'Myhouse\Annonces\Professionnels\ProfessionnelController@description')->name('professionnel.description');
    
    Route::get('sujet/deposer/professionnel/critere', 'Myhouse\Annonces\Professionnels\ProfessionnelController@critere')->name('professionnel.critere');
    
    
    Route::get('sujet/deposer/professionnel/annonce-{id}', 'Myhouse\Annonces\Professionnels\ProfessionnelController@annonce')->name('professionnel.annonce');


    Route::post('sujet/deposer/professionnel/storecritere', 'Myhouse\Annonces\Professionnels\ProfessionnelController@storeCritere')->name('professionnel.storecritere');


    Route::get('sujet/deposer/professionnel/media', 'Myhouse\Annonces\Professionnels\ProfessionnelController@media')->name('professionnel.media');

    Route::get('sujet/deposer/professionnel/localisation', 'Myhouse\Annonces\Professionnels\ProfessionnelController@localisation')->name('professionnel.localisation');

    Route::post('sujet/deposer/professionnel/upload', 'Myhouse\Annonces\Professionnels\ProfessionnelController@upload')->name('professionnel.upload');

    Route::get('sujet/deposer/professionnel/payement', 'Myhouse\Annonces\Professionnels\ProfessionnelController@payement')->name('professionnel.payement');

    Route::get('sujet/deposer/professionnel/succes', 'Myhouse\Annonces\Professionnels\ProfessionnelController@success')->name('professionnel.success');








/*
* Update routes professionnel
*
*/

    Route::get('sujet/deposer/professionnel/aciveonline/{id}', 'Myhouse\Annonces\Professionnels\ProfessionnelController@activeOnline')->name('professionnel.active.online');
    Route::get('sujet/deposer/professionnel/deaciveonline/{id}', 'Myhouse\Annonces\Professionnels\ProfessionnelController@deactiveOnline')->name('professionnel.deactive.online');

    Route::get('sujet/deposer/professionnel/delete/{id}', 'Myhouse\Annonces\Professionnels\ProfessionnelController@delete')->name('professionnel.delete');

    Route::get('sujet/deposer/professionnel/edit/{id}', 'Myhouse\Annonces\Professionnels\ProfessionnelController@edit')->name('professionnel.edit');
    Route::post('sujet/deposer/professionnel/edit/{id}', 'Myhouse\Annonces\Professionnels\ProfessionnelController@update')->name('professionnel.update');



    /*
     * Projets neufs
     */

    Route::get('sujet/deposer/projets-neufs/services', 'Myhouse\Annonces\Neufs\NeufController@service')->name('neuf.service');

    Route::get('sujet/deposer/projets-neufs/abonnement', 'Myhouse\Annonces\Neufs\NeufController@abonnement')->name('neuf.abonnement');
    Route::get('sujet/deposer/projets-neufs/enregistrement', 'Myhouse\Annonces\Neufs\NeufController@enregistrement')->name('neuf.enregistrement');
    Route::get('sujet/deposer/projets-neufs/description', 'Myhouse\Annonces\Neufs\NeufController@description')->name('neuf.description');
    Route::get('sujet/deposer/projets-neufs/criteres', 'Myhouse\Annonces\Neufs\NeufController@critere')->name('neuf.critere');
    Route::get('sujet/deposer/projets-neufs/annonce', 'Myhouse\Annonces\Neufs\NeufController@annonce')->name('neuf.annonce');
    Route::get('sujet/deposer/projets-neufs/upload', 'Myhouse\Annonces\Neufs\NeufController@upload')->name('neuf.upload');
    Route::get('sujet/deposer/projets-neufs/localisation', 'Myhouse\Annonces\Neufs\NeufController@localisation')->name('neuf.localisation');
    Route::get('sujet/deposer/projets-neufs/type', 'Myhouse\Annonces\Neufs\NeufController@type')->name('neuf.type');
    Route::get('sujet/deposer/projets-neufs/payement', 'Myhouse\Annonces\Neufs\NeufController@payement')->name('neuf.payment');



    Route::post('sujet/deposer/projets-neufs/enregistrement', 'Myhouse\Annonces\Neufs\NeufController@storeEntreprise')->name('neuf.entreprise');
    Route::post('sujet/deposer/projets-neufs/upload', 'Myhouse\Annonces\Neufs\NeufController@uploader')->name('neuf.uploader');
    Route::post('sujet/deposer/projets-neufs/type', 'Myhouse\Annonces\Neufs\NeufController@processFiles')->name('neuf.process');
    Route::get('sujet/deposer/projets-neufs/succes', 'Myhouse\Annonces\Neufs\NeufController@success')->name('neuf.success');

    Route::get('sujet/deposer/projets-neufs/activeonline/{id}', 'Myhouse\Annonces\Neufs\NeufController@activeOnline')->name('neuf.active.online');
    Route::get('sujet/deposer/projets-neufs/deactiveonline/{id}', 'Myhouse\Annonces\Neufs\NeufController@deactiveOnline')->name('neuf.deactive.online');

    Route::get('sujet/deposer/projets-neufs/delete/{id}', 'Myhouse\Annonces\Neufs\NeufController@delete')->name('neuf.delete');
    Route::get('sujet/deposer/projets-neufs/edit/{id}', 'Myhouse\Annonces\Neufs\NeufController@edit')->name('neuf.edit');
    Route::post('sujet/deposer/projets-neufs/update/{id}', 'Myhouse\Annonces\Neufs\NeufController@update')->name('neuf.update');


    Route::get('sujet/deposer/projets-neufs/backUrl', 'Myhouse\Annonces\Neufs\NeufController@backUrlHouse')->name('neuf.backUrl');

});


/*
 * BackOffice
 */

Route::get('admin/transaction', 'Myhouse\Back\Generique\GeneriqueController@transaction');
Route::get('admin/typeBien', 'Myhouse\Back\Generique\GeneriqueController@typeBien');



Route::get('map', function () {
   return view('world');
});
