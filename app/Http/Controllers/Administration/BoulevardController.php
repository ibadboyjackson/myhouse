<?php

namespace App\Http\Controllers\Administration;

use App\Http\Controllers\Controller;
use App\Model\Administration\Boulevard;
use App\Repository\CalledRepository;
use App\Traits\AdministrationController;
use App\Traits\Controllable;

class BoulevardController extends Controller
{
    use Controllable, AdministrationController;


    protected $view_index = 'administrations.boulevard.index';
    protected $view_edit = 'administrations.boulevard.pages.edit';
    protected $view_create = 'administrations.boulevard.pages.add';

    protected  $path = 'boulevard.index';
    protected  $variables = 'boulevards';
    protected  $variable = 'boulevard';

    protected  $getCreateLangPath = 'boulevard/message.created';
    protected  $getUpdateLangPath = 'boulevard/message.updated';
    protected  $getDeleteLangPath = 'boulevard/message.deleted';





    public function getRepository () {
        return new CalledRepository( new Boulevard() );
    }
}
