<?php

namespace App\Http\Controllers\Administration;

use App\Model\Administration\Impasse;
use App\Repository\CalledRepository;
use App\Traits\AdministrationController;
use App\Traits\Controllable;
use App\Http\Controllers\Controller;

class ImpasseController extends Controller
{
    use Controllable, AdministrationController;


    protected $view_index = 'administrations.impasse.index';
    protected $view_edit = 'administrations.impasse.pages.edit';
    protected $view_create = 'administrations.impasse.pages.add';

    protected  $path = 'impasse.index';
    protected  $variables = 'impasses';
    protected  $variable = 'impasse';

    protected  $getCreateLangPath = 'impasse/message.created';
    protected  $getUpdateLangPath = 'impasse/message.updated';
    protected  $getDeleteLangPath = 'impasse/message.deleted';





    public function getRepository () {
        return new CalledRepository( new Impasse() );
    }
}
