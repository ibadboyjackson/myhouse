<?php

namespace App\Http\Middleware;

use App\Repository\Back\Annonces\Particulier\ParticulierRepository;
use Closure;
use Illuminate\Http\Request;

class CheckAddNumber
{

    /**
     * @var ParticulierRepository
     */
    private $particulierRepository;

    public function __construct(ParticulierRepository $particulierRepository)
    {
        $this->particulierRepository = $particulierRepository;
    }

    /**
     * Handle an incoming request.
     *
     * @param  Request  $request
     * @param Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $number = auth()->user()->particulier->where('images','!=', null)->count() + auth()->user()->particulier->where('page','!=', null)->count();

            if ($number < 40) {

                return $next($request);
            
            }

        putSessionMessage('exceed', __('myhouse/back/annonces/particulier/success.ai'));
        return redirect()->route('particulier.service');
    }
}
