<?php

namespace App\Http\Controllers\Administration;

use App\Http\Controllers\Controller;
use App\Model\Administration\Allee;
use App\Repository\CalledRepository;
use App\Traits\AdministrationController;
use App\Traits\Controllable;

class AlleeController extends Controller
{
    use Controllable, AdministrationController;


    protected $view_index = 'administrations.allee.index';
    protected $view_edit = 'administrations.allee.pages.edit';
    protected $view_create = 'administrations.allee.pages.add';

    protected  $path = 'allee.index';
    protected  $variables = 'allees';
    protected  $variable = 'allee';

    protected  $getCreateLangPath = 'allee/message.created';
    protected  $getUpdateLangPath = 'allee/message.updated';
    protected  $getDeleteLangPath = 'allee/message.deleted';



    public function getRepository () {
        return new CalledRepository( new Allee() );
    }
}
