<?php

namespace App\Http\Controllers\Favorite;

use App\Repository\FavoriteRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class FavoriteController extends Controller
{
    /**
     * @var FavoriteRepository
     */
    private $favoriteRepository;

    /**
     * FavoriteController constructor.
     * @param FavoriteRepository $favoriteRepository
     */
    public function __construct(FavoriteRepository $favoriteRepository)
    {
        $this->middleware('auth');
        $this->favoriteRepository = $favoriteRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('favorite.index', [
            'favorites' => $this->favoriteRepository->getUserFavorites(auth()->user()->id)
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        $entity = $this->favoriteRepository->createFavorite($request, $request->get('field'));

        if ($entity === true) {
            putSessionMessage('error',  ucfirst($request->get('table')) . ' déja dans vos favoris');
            return redirect()->back();
        }

        putSessionMessage('success',  ucfirst($request->get('table')) .' ajouté dans vos favoris');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @param Request $request
     * @return Response
     */
    public function destroy($id, Request $request)
    {
        $response = $this->favoriteRepository->deleteFavorite($id);

        if ($response === true) {
            putSessionMessage('success',  ucfirst($request->get('table')). (' supprimé de vos favoris'));
            return redirect()->back();
        }
        return redirect()->back()->with('error', 'Erreur');
    }
}
