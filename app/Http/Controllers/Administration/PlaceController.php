<?php

namespace App\Http\Controllers\Administration;

use App\Model\Administration\Place;
use App\Repository\CalledRepository;
use App\Traits\AdministrationController;
use App\Traits\Controllable;
use App\Http\Controllers\Controller;

class PlaceController extends Controller
{
    use Controllable, AdministrationController;


    protected $view_index = 'administrations.place.index';
    protected $view_edit = 'administrations.place.pages.edit';
    protected $view_create = 'administrations.place.pages.add';

    protected  $path = 'place.index';
    protected  $variables = 'places';
    protected  $variable = 'place';

    protected  $getCreateLangPath = 'place/message.created';
    protected  $getUpdateLangPath = 'place/message.updated';
    protected  $getDeleteLangPath = 'place/message.deleted';





    public function getRepository () {
        return new CalledRepository( new Place() );
    }
}
