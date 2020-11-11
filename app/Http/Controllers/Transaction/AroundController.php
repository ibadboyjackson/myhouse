<?php

namespace App\Http\Controllers\Transaction;

use App\Http\Requests\AroundRequest;
use App\Repository\Transaction\AroundRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class AroundController extends Controller
{
    /**
     * @var AroundRepository
     */
    private $aroundRepository;
    /**
     * @var string
     */
    private $path;

    /**
     * AroundController constructor.
     * @param AroundRepository $aroundRepository
     * @param string $path
     */
    public function __construct(AroundRepository $aroundRepository, $path = 'around.index')
    {
        $this->middleware('auth');
        $this->aroundRepository = $aroundRepository;
        $this->path = $path;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('around.index', [
           'arounds' => $this->aroundRepository->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('around.pages.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param AroundRequest $request
     * @return Response
     */
    public function store(AroundRequest $request)
    {
        $this->aroundRepository->create($request);
        putSessionMessage('success', 'around/message.created');
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
        return view('around.pages.edit', [
            'around' => $this->aroundRepository->getById($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param AroundRequest $request
     * @param int $id
     * @return void
     */
    public function update(AroundRequest $request, $id)
    {
        $this->aroundRepository->update($id, $request);
        putSessionMessage('success', 'around/message.updated');
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
        $this->aroundRepository->delete($id);
        putSessionMessage('success', 'around/message.deleted');
        return redirect()->route($this->path);
    }
}
