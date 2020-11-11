<?php

namespace App\Http\Controllers\Administration;

use App\Http\Controllers\Controller;
use App\Model\Administration\Route;
use App\Repository\CalledRepository;
use App\Traits\AdministrationController;
use App\Traits\Controllable;

class RouteController extends Controller
{
    use Controllable, AdministrationController;


    protected $view_index = 'administrations.route.index';
    protected $view_edit = 'administrations.route.pages.edit';
    protected $view_create = 'administrations.route.pages.add';

    protected  $path = 'route.index';
    protected  $variables = 'routes';
    protected  $variable = 'route';

    protected  $getCreateLangPath = 'route/message.created';
    protected  $getUpdateLangPath = 'route/message.updated';
    protected  $getDeleteLangPath = 'route/message.deleted';





    public function getRepository () {
        return new CalledRepository( new Route() );
    }
}
