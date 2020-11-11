<?php

namespace App\Http\Controllers\Faq;

use App\Repository\Faq\FaqCategoryRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;

class FaqCategoryController extends Controller
{
    /**
     * @var FaqCategoryRepository
     */
    private $categoryRepository;
    /**
     * @var string
     */
    private $path;

    /**
     * FaqCategoryController constructor.
     * @param FaqCategoryRepository $categoryRepository
     * @param string $path
     */
    public function __construct(FaqCategoryRepository $categoryRepository, string $path = 'faqCategory.index')
    {
        $this->middleware('auth');
        $this->categoryRepository = $categoryRepository;
        $this->path = $path;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('faq.faqType.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('faq.faqType.pages.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     * @throws ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, ['name' => 'required|string|min:2', 'slug' => 'required']);
        return redirect()->route($this->path);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
