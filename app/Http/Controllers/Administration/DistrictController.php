<?php

namespace App\Http\Controllers\Administration;

use App\Http\Requests\DistrictRequest;
use App\Repository\Administration\CountryRepository;
use App\Repository\DistrictRepository;
use App\Repository\PrefectureRepository;
use App\Repository\RegionRepository;
use App\Repository\TownRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class DistrictController extends Controller
{
    /**
     * @var DistrictRepository
     */
    private $districtRepository;
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
     * @var string
     */
    private $path;

    /**
     * DistrictController constructor.
     * @param DistrictRepository $districtRepository
     * @param CountryRepository $countryRepository
     * @param RegionRepository $regionRepository
     * @param PrefectureRepository $prefectureRepository
     * @param TownRepository $townRepository
     * @param string $path
     */
    public function __construct(DistrictRepository $districtRepository, CountryRepository $countryRepository, RegionRepository $regionRepository, PrefectureRepository $prefectureRepository, TownRepository $townRepository, string $path = 'district.index')
    {
        $this->middleware('auth');
        $this->districtRepository = $districtRepository;
        $this->countryRepository = $countryRepository;
        $this->regionRepository = $regionRepository;
        $this->prefectureRepository = $prefectureRepository;
        $this->townRepository = $townRepository;
        $this->path = $path;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('administrations.district.index', [

            'districts' => $this->districtRepository->get(),
            'countries' => $this->countryRepository->getAll(),
            'regions' => $this->regionRepository->getAll(),
            'prefectures' => $this->prefectureRepository->getAll(),
            'towns' => $this->townRepository->getAll(),

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('administrations.district.pages.add', [

            'countries' => $this->countryRepository->getAll(),
            'regions' => $this->regionRepository->getAll(),
            'prefectures' => $this->prefectureRepository->getAll(),
            'towns' => $this->townRepository->getAll(),

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param DistrictRequest $request
     * @return void
     */
    public function store(DistrictRequest $request)
    {
        $this->districtRepository->create($request);
        putSessionMessage('success', __('district/message.created'));
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
        return view('administrations.district.pages.edit', [

            'district' => $this->districtRepository->getById($id),
            'countries' => $this->countryRepository->getAll(),
            'regions' => $this->regionRepository->getAll(),
            'prefectures' => $this->prefectureRepository->getAll(),
            'towns' => $this->townRepository->getAll(),

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param DistrictRequest $request
     * @param int $id
     * @return void
     */
    public function update(DistrictRequest $request, $id)
    {
        $this->districtRepository->update($id, $request);
        putSessionMessage('success', __('district/message.updated'));
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
        $this->districtRepository->delete($id);
        putSessionMessage('success', __('district/message.deleted'));
        return redirect()->route($this->path);
    }
}
