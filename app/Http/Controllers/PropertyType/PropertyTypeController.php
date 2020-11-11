<?php

namespace App\Http\Controllers\PropertyType;

use App\Http\Requests\PropertyRequest;
use App\Repository\PropertyTypeRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class PropertyTypeController extends Controller
{
    /**
     * @var PropertyTypeRepository
     */
    private $propertyRepository;
    /**
     * @var string
     */
    private $path;

    /**
     * PropertyTypeController constructor.
     * @param PropertyTypeRepository $propertyRepository
     * @param string $path
     */
    public function __construct(PropertyTypeRepository $propertyRepository, string $path = 'property.index')
    {
        $this->middleware('auth');
        $this->propertyRepository = $propertyRepository;
        $this->path = $path;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('propertyType.index', [
           'properties' => $this->propertyRepository->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('propertyType.pages.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param PropertyRequest $request
     * @return Response
     */
    public function store(PropertyRequest $request)
    {
        $this->propertyRepository->create($request);
        putSessionMessage('success', __('property/message.created'));
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
        return view('propertyType.pages.edit', [
            'property' => $this->propertyRepository->getById($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param PropertyRequest $request
     * @param int $id
     * @return Response
     */
    public function update(PropertyRequest $request, $id)
    {
        $this->propertyRepository->update($id, $request);
        putSessionMessage('success', __('property/message.updated'));
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
        $this->propertyRepository->delete($id);
        putSessionMessage('success', __('property/message.deleted'));
        return redirect()->route($this->path);
    }
}
