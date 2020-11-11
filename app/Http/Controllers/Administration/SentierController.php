<?php

namespace App\Http\Controllers\Administration;

use App\Model\Administration\Sentier;
use App\Repository\CalledRepository;
use App\Traits\AdministrationController;
use App\Traits\Controllable;
use App\Http\Controllers\Controller;

class SentierController extends Controller
{
    use Controllable, AdministrationController;


    protected $view_index = 'administrations.sentier.index';
    protected $view_edit = 'administrations.sentier.pages.edit';
    protected $view_create = 'administrations.sentier.pages.add';

    protected  $path = 'sentier.index';
    protected  $variables = 'sentiers';
    protected  $variable = 'sentier';

    protected  $getCreateLangPath = 'sentier/message.created';
    protected  $getUpdateLangPath = 'sentier/message.updated';
    protected  $getDeleteLangPath = 'sentier/message.deleted';





    public function getRepository () {
        return new CalledRepository( new Sentier() );
    }
}
