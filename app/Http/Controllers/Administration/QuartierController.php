<?php

namespace App\Http\Controllers\Administration;

use App\Http\Requests\QuartierRequest;
use App\Repository\Administration\CountryRepository;
use App\Repository\DistrictRepository;
use App\Repository\PrefectureRepository;
use App\Repository\QuartierRepository;
use App\Repository\RegionRepository;
use App\Repository\TownRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class QuartierController extends Controller
{

    /**
     * @var QuartierRepository
     */
    private $quartierRepository;
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
     * @var TownRepository
     */
    private $townRepository;
    /**
     * @var DistrictRepository
     */
    private $districtRepository;
    /**
     * @var string
     */
    private $path;

    public function __construct(QuartierRepository $quartierRepository, CountryRepository $countryRepository, RegionRepository $regionRepository, PrefectureRepository $prefectureRepository, TownRepository $townRepository, DistrictRepository $districtRepository, string $path = 'quartier.index')
    {
        $this->middleware('auth');
        $this->quartierRepository = $quartierRepository;
        $this->countryRepository = $countryRepository;
        $this->regionRepository = $regionRepository;
        $this->prefectureRepository = $prefectureRepository;
        $this->townRepository = $townRepository;
        $this->districtRepository = $districtRepository;
        $this->path = $path;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('administrations.quartier.index', [

            'quartiers' => $this->quartierRepository->get(),
            'countries' => $this->countryRepository->getAll(),
            'regions' => $this->regionRepository->getAll(),
            'prefectures' => $this->prefectureRepository->getAll(),
            'towns' => $this->townRepository->getAll(),
            'districts' => $this->districtRepository->getAll(),

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return  view('administrations.quartier.pages.add', [

            'countries' => $this->countryRepository->getAll(),
            'regions' => $this->regionRepository->getAll(),
            'prefectures' => $this->prefectureRepository->getAll(),
            'towns' => $this->townRepository->getAll(),
            'districts' => $this->districtRepository->getAll(),

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param QuartierRequest $request
     * @return Response
     */
    public function store(QuartierRequest $request)
    {
        $this->quartierRepository->create($request);
        putSessionMessage('success', __('quartier/message.created'));
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
        return  view('administrations.quartier.pages.edit', [

            'quartier' => $this->quartierRepository->getById($id),
            'countries' => $this->countryRepository->getAll(),
            'regions' => $this->regionRepository->getAll(),
            'prefectures' => $this->prefectureRepository->getAll(),
            'towns' => $this->townRepository->getAll(),
            'districts' => $this->districtRepository->getAll(),

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param QuartierRequest $request
     * @param int $id
     * @return Response
     */
    public function update(QuartierRequest $request, $id)
    {
        $this->quartierRepository->update($id, $request);
        putSessionMessage('success', __('quartier/message.updated'));
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
        $this->quartierRepository->delete($id);
        putSessionMessage('success', __('quartier/message.deleted'));
        return redirect()->route($this->path);
    }
}
