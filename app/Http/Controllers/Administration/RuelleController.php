<?php

namespace App\Http\Controllers\Administration;

use App\Model\Administration\Ruelle;
use App\Repository\CalledRepository;
use App\Traits\AdministrationController;
use App\Traits\Controllable;
use App\Http\Controllers\Controller;

class RuelleController extends Controller
{
    use Controllable, AdministrationController;


    protected $view_index = 'administrations.ruelle.index';
    protected $view_edit = 'administrations.ruelle.pages.edit';
    protected $view_create = 'administrations.ruelle.pages.add';

    protected  $path = 'ruelle.index';
    protected  $variables = 'ruelles';
    protected  $variable = 'ruelle';

    protected  $getCreateLangPath = 'ruelle/message.created';
    protected  $getUpdateLangPath = 'ruelle/message.updated';
    protected  $getDeleteLangPath = 'ruelle/message.deleted';





    public function getRepository () {
        return new CalledRepository( new Ruelle() );
    }
}
