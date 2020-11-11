<?php

namespace App\Http\Controllers\Administration;

use App\Http\Controllers\Controller;
use App\Model\Administration\Chemin;
use App\Repository\CalledRepository;
use App\Traits\AdministrationController;
use App\Traits\Controllable;

class CheminController extends Controller
{
    use Controllable, AdministrationController;


    protected $view_index = 'administrations.chemin.index';
    protected $view_edit = 'administrations.chemin.pages.edit';
    protected $view_create = 'administrations.chemin.pages.add';

    protected  $path = 'chemin.index';
    protected  $variables = 'chemins';
    protected  $variable = 'chemin';

    protected  $getCreateLangPath = 'chemin/message.created';
    protected  $getUpdateLangPath = 'chemin/message.updated';
    protected  $getDeleteLangPath = 'chemin/message.deleted';





    public function getRepository () {
        return new CalledRepository( new Chemin() );
    }
}
