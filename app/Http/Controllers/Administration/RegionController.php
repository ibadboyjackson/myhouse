<?php

namespace App\Http\Controllers\Administration;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegionRequest;
use App\Repository\Administration\CountryRepository;
use App\Repository\RegionRepository;
use Illuminate\Http\Response;

class RegionController extends Controller
{
    /**
     * @var RegionRepository
     */
    private $regionRepository;
    /**
     * @var string
     */
    private $path;
    /**
     * @var CountryRepository
     */
    private $countryRepository;

    /**
     * RegionController constructor.
     * @param RegionRepository $regionRepository
     * @param string $path
     * @param CountryRepository $countryRepository
     */
    public function __construct(RegionRepository $regionRepository, CountryRepository $countryRepository, string $path = 'region.index')
    {
        $this->middleware('auth');
        $this->regionRepository = $regionRepository;
        $this->path = $path;
        $this->countryRepository = $countryRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('administrations.region.index', [
           'regions' => $this->regionRepository->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('administrations.region.pages.add', [
           'countries' => $this->countryRepository->getAll()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param RegionRequest $request
     * @return void
     */
    public function store(RegionRequest $request)
    {
        $this->regionRepository->create($request);
        putSessionMessage('success', __('region/message.created'));
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
        return view('administrations.region.pages.edit', [
           'region' => $this->regionRepository->getById($id),
           'countries' => $this->countryRepository->getAll()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param RegionRequest $request
     * @param int $id
     * @return void
     */
    public function update(RegionRequest $request, $id)
    {
        $this->regionRepository->update($id, $request);
        putSessionMessage('success', __('region/message.updated'));
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
        $this->regionRepository->delete($id);
        putSessionMessage('success', __('region/message.deleted'));
        return redirect()->route($this->path);
    }
}
