<?php

namespace App\Http\Controllers\Post;

use App\Repository\Blog\LeagueRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class LeagueController extends Controller
{
    /**
     * @var LeagueRepository
     */
    private $leagueRepository;
    /**
     * @var string
     */
    private $path;

    /**
     * LeagueController constructor.
     * @param LeagueRepository $leagueRepository
     * @param string $path
     */
    public function __construct(LeagueRepository $leagueRepository, $path = 'league.index')
    {
        $this->leagueRepository = $leagueRepository;
        $this->path = $path;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('league.index', [
            'leagues' => $this->leagueRepository->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('league.pages.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->leagueRepository->create($request);
        putSessionMessage('success', __('blog/message.categoryCreated'));
        return redirect()->route($this->path);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        return view('league.pages.edit', [
           'league' => $this->leagueRepository->getById($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $this->leagueRepository->update($id, $request);
        putSessionMessage('success', __('blog/message.categoryUpdated'));
        return redirect()->route($this->path);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->leagueRepository->delete($id);
        putSessionMessage('success', __('blog/message.categoryDeleted'));
        return redirect()->route($this->path);
    }
}
