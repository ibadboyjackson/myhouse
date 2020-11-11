<?php

namespace App\Http\Controllers\Administration;

use App\Http\Requests\TownRequest;
use App\Repository\Administration\CountryRepository;
use App\Repository\PrefectureRepository;
use App\Repository\RegionRepository;
use App\Repository\TownRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class TownController extends Controller
{

    /**
     * @var TownRepository
     */
    private $townRepository;
    /**
     * @var CountryRepository
     */
    private $countryRepository;
    /**
     * @var RegionRepository
     */
    private $regionRepository;
    /**
     * @var PrefectureRepository
     */
    private $prefectureRepository;
    /**
     * @var string
     */
    private $path;

    /**
     * TownController constructor.
     * @param TownRepository $townRepository
     * @param CountryRepository $countryRepository
     * @param RegionRepository $regionRepository
     * @param PrefectureRepository $prefectureRepository
     * @param string $path
     */
    public function __construct(TownRepository $townRepository, CountryRepository $countryRepository, RegionRepository $regionRepository, PrefectureRepository $prefectureRepository, string $path = 'town.index')
    {
        $this->middleware('auth');
        $this->townRepository = $townRepository;
        $this->countryRepository = $countryRepository;
        $this->regionRepository = $regionRepository;
        $this->prefectureRepository = $prefectureRepository;
        $this->path = $path;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('administrations.town.index', [
            'towns' => $this->townRepository->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('administrations.town.pages.add', [
           'countries' => $this->countryRepository->getAll(),
           'regions' => $this->regionRepository->getAll(),
           'prefectures' => $this->prefectureRepository->getAll(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param TownRequest $request
     * @return Response
     */
    public function store(TownRequest $request)
    {
        $this->townRepository->create($request);
        putSessionMessage('success', __('commune/message.created'));
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
        return view('administrations.town.pages.edit', [
            'town' => $this->townRepository->getById($id),
            'countries' => $this->countryRepository->getAll(),
            'regions' => $this->regionRepository->getAll(),
            'prefectures' => $this->prefectureRepository->getAll(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param TownRequest $request
     * @param int $id
     * @return Response
     */
    public function update(TownRequest $request, $id)
    {
        $this->townRepository->update($id, $request);
        putSessionMessage('success', __('commune/message.updated'));
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
        $this->townRepository->delete($id);
        putSessionMessage('success', __('commune/message.deleted'));
        return redirect()->route($this->path);
    }
}
