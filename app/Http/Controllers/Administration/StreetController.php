<?php

namespace App\Http\Controllers\Administration;

use App\Http\Controllers\Controller;
use App\Model\Administration\Street;
use App\Repository\CalledRepository;
use App\Traits\AdministrationController;
use App\Traits\Controllable;


class StreetController extends Controller
{
    use Controllable, AdministrationController;


    protected $view_index = 'administrations.street.index';
    protected $view_edit = 'administrations.street.pages.edit';
    protected $view_create = 'administrations.street.pages.add';

    protected  $path = 'street.index';
    protected  $variables = 'streets';
    protected  $variable = 'street';

    protected  $getCreateLangPath = 'street/message.created';
    protected  $getUpdateLangPath = 'street/message.updated';
    protected  $getDeleteLangPath = 'street/message.deleted';





    public function getRepository () {
        return new CalledRepository( new Street() );
    }
}
