<?php

namespace App\Http\Controllers\Administration;

use App\Http\Requests\PrefectureRequest;
use App\Repository\Administration\CountryRepository;
use App\Repository\PrefectureRepository;
use App\Repository\RegionRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class PrefectureController extends Controller
{

    /**
     * @var PrefectureRepository
     */
    private $prefectureRepository;
    /**
     * @var RegionRepository
     */
    private $regionRepository;
    /**
     * @var CountryRepository
     */
    private $countryRepository;
    /**
     * @var string
     */
    private $path;

    /**
     * PrefectureController constructor.
     * @param PrefectureRepository $prefectureRepository
     * @param RegionRepository $regionRepository
     * @param CountryRepository $countryRepository
     * @param string $path
     */
    public function __construct(PrefectureRepository $prefectureRepository, RegionRepository $regionRepository, CountryRepository $countryRepository, string $path = 'prefecture.index')
    {
        $this->middleware('auth');
        $this->prefectureRepository = $prefectureRepository;
        $this->regionRepository = $regionRepository;
        $this->countryRepository = $countryRepository;
        $this->path = $path;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('administrations.prefecture.index', [
           'prefectures' => $this->prefectureRepository->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('administrations.prefecture.pages.add', [
            'countries' => $this->countryRepository->getAll(),
            'regions' => $this->regionRepository->getAll()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param PrefectureRequest $request
     * @return Response
     */
    public function store(PrefectureRequest $request)
    {
        $this->prefectureRepository->create($request);
        putSessionMessage('success', __('prefecture/message.created'));
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
        return view('administrations.prefecture.pages.edit', [
           'prefecture' => $this->prefectureRepository->getById($id),
           'countries' => $this->countryRepository->getAll(),
           'regions' => $this->regionRepository->getAll()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param PrefectureRequest $request
     * @param int $id
     * @return Response
     */
    public function update(PrefectureRequest $request, $id)
    {
        $this->prefectureRepository->update($id, $request);
        putSessionMessage('success', __('prefecture/message.updated'));
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
        $this->prefectureRepository->delete($id);
        putSessionMessage('success', __('prefecture/message.deleted'));
        return redirect()->route($this->path);
    }
}
