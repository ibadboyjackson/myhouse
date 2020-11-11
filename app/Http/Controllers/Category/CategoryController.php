<?php

namespace App\Http\Controllers\Category;

use App\Http\Requests\CategoryRequest;
use App\Repository\CategoryRepository;
use App\Repository\ProjectRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class CategoryController extends Controller
{
    /**
     * @var CategoryRepository
     */
    private $categoryRepository;

    /**
     * @var ProjectRepository
     */
    private $projectRepository;

    /**
     * CategoryController constructor.
     * @param CategoryRepository $categoryRepository
     * @param ProjectRepository $projectRepository
     */
    public function __construct(CategoryRepository $categoryRepository, ProjectRepository $projectRepository)
    {
        $this->middleware('auth');
        $this->categoryRepository = $categoryRepository;
        $this->projectRepository = $projectRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('category.index', [
           'categories' => $this->categoryRepository->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('category.pages.add', [
            'projects' => $this->projectRepository->getAllProjects()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CategoryRequest $request
     * @return Response
     */
    public function store(CategoryRequest $request)
    {
        $this->categoryRepository->create($request);
        putSessionMessage('success', __('message/message.CategoryCreate'));
        return redirect()->route('category.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        return view('category.pages.edit', [
           'category' => $this->categoryRepository->getById($id),
           'projects' => $this->projectRepository->getProjects()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CategoryRequest $request
     * @param int $id
     * @return Response
     */
    public function update(CategoryRequest $request, $id)
    {
        $this->categoryRepository->update($id, $request);
        putSessionMessage('success', __('message/message.CategoryUpdate'));
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->categoryRepository->delete($id);
        putSessionMessage('success', __('message/message.CategoryDelete'));
        return redirect()->route('category.index');
    }
}
