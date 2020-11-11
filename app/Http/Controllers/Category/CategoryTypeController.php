<?php

namespace App\Http\Controllers\Category;

use App\Http\Requests\CategoryTypeRequest;
use App\Repository\Transaction\CategoryTypeRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class CategoryTypeController extends Controller
{
    /**
     * @var CategoryTypeRepository
     */
    private $categoryTypeRepository;
    /**
     * @var string
     */
    private $path;

    /**
     * CategoryTypeController constructor.
     * @param CategoryTypeRepository $categoryTypeRepository
     * @param string $path
     */
    public function __construct(CategoryTypeRepository $categoryTypeRepository, $path = 'categoryType.index')
    {
        $this->middleware('auth');
        $this->categoryTypeRepository = $categoryTypeRepository;
        $this->path = $path;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('categoryType.index', [
            'categoryTypes' => $this->categoryTypeRepository->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('categoryType.pages.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CategoryTypeRequest $request
     * @return void
     */
    public function store(CategoryTypeRequest $request)
    {
        $this->categoryTypeRepository->create($request);
        putSessionMessage('success', __('category/message.created'));
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
        return view('categoryType.pages.edit', [
           'categoryType' => $this->categoryTypeRepository->getById($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CategoryTypeRequest $request
     * @param int $id
     * @return Response
     */
    public function update(CategoryTypeRequest $request, $id)
    {
        $this->categoryTypeRepository->update($id, $request);
        putSessionMessage('success', __('category/message.updated'));
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
        $this->categoryTypeRepository->delete($id);
        putSessionMessage('success', __('category/message.deleted'));
        return redirect()->route($this->path);
    }
}
