<?php

namespace App\Http\Controllers\Administration;

use App\Http\Controllers\Controller;
use App\Model\Administration\Avenue;
use App\Repository\CalledRepository;
use App\Traits\AdministrationController;
use App\Traits\Controllable;

class AvenueController extends Controller
{
    use Controllable, AdministrationController;


    protected $view_index = 'administrations.avenue.index';
    protected $view_edit = 'administrations.avenue.pages.edit';
    protected $view_create = 'administrations.avenue.pages.add';

    protected  $path = 'avenue.index';
    protected  $variables = 'avenues';
    protected  $variable = 'avenue';

    protected  $getCreateLangPath = 'avenue/message.created';
    protected  $getUpdateLangPath = 'avenue/message.updated';
    protected  $getDeleteLangPath = 'avenue/message.deleted';



    public function getRepository () {
        return new CalledRepository( new Avenue() );
    }
}
