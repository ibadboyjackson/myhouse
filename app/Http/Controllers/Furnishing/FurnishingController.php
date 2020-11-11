<?php

namespace App\Http\Controllers\Furnishing;

use App\Http\Requests\FurnishingRequest;
use App\Repository\FurnishingRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class FurnishingController extends Controller
{
    /**
     * @var FurnishingRepository
     */
    private $furnishingRepository;
    /**
     * @var string
     */
    private $path;

    /**
     * FurnishingController constructor.
     * @param FurnishingRepository $furnishingRepository
     * @param string $path
     */
    public function __construct(FurnishingRepository $furnishingRepository, string $path = 'furnishing.index')
    {
        $this->middleware('auth');
        $this->furnishingRepository = $furnishingRepository;
        $this->path = $path;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('furnishing.index', [
            'furnishings' => $this->furnishingRepository->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('furnishing.pages.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param FurnishingRequest $request
     * @return Response
     */
    public function store(FurnishingRequest $request)
    {
        $this->furnishingRepository->create($request);
        putSessionMessage('success', __('ameublement/message.created'));
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
        return view('furnishing.pages.edit', [
           'furnishing' => $this->furnishingRepository->getById($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param FurnishingRequest $request
     * @param int $id
     * @return Response
     */
    public function update(FurnishingRequest $request, $id)
    {
        $this->furnishingRepository->update($id, $request);
        putSessionMessage('success', __('ameublement/message.updated'));
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
        $this->furnishingRepository->delete($id);
        putSessionMessage('success', __('ameublement/message.deleted'));
        return redirect()->route($this->path);
    }
}
