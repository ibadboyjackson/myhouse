<?php

namespace App\Http\Controllers\Administration;

use App\Http\Requests\AdministrationRequest;
use App\Repository\Administration\CountryRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class CountryController extends Controller
{
    /**
     * @var CountryRepository
     */
    private $countryRepository;
    /**
     * @var string
     */
    private $path;

    /**
     * CountryController constructor.
     * @param CountryRepository $countryRepository
     * @param string $path
     */
    public function __construct(CountryRepository $countryRepository, string $path = 'administration.index')
    {
        $this->middleware('auth');
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
        return view('administrations.country.index', [
            'countries' => $this->countryRepository->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('administrations.country.pages.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param AdministrationRequest $request
     * @return Response
     */
    public function store(AdministrationRequest $request)
    {
        $this->countryRepository->create($request);
        putSessionMessage('success', __('country/message.created'));
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
        return view('administrations.country.pages.edit', [
            'country' => $this->countryRepository->getById($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param AdministrationRequest $request
     * @param int $id
     * @return Response
     */
    public function update(AdministrationRequest $request, $id)
    {
        $this->countryRepository->update($id, $request);
        putSessionMessage('success', __('country/message.updated'));
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
        $this->countryRepository->delete($id);
        putSessionMessage('success', __('country/message.deleted'));
        return redirect()->route($this->path);
    }
}
