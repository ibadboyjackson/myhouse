<?php

namespace App\Http\Controllers\Faq;

use App\Repository\Faq\FaqTypeRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;

class FaqTypeController extends Controller
{
    /**
     * @var FaqTypeRepository
     */
    private $faqTypeRepository;
    /**
     * @var string
     */
    private $path;

    /**
     * FaqTypeController constructor.
     * @param FaqTypeRepository $faqTypeRepository
     * @param string $path
     */
    public function __construct(FaqTypeRepository $faqTypeRepository, string $path = 'faq.index')
    {
        $this->middleware('auth');
        $this->faqTypeRepository = $faqTypeRepository;
        $this->path = $path;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('faq.faq.index', [
            'faqs' => $this->faqTypeRepository->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('faq.faq.pages.add');
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

        $this->validate($request, ['name' => 'required|string|min:2', 'user_id' => 'required']);
        $this->faqTypeRepository->create($request);
        putSessionMessage('success', __('faq/faq/message.created'));
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
        return view('faq.faq.pages.edit', [
           'faq' => $this->faqTypeRepository->getById($id)
        ]);
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
        $this->faqTypeRepository->update($id, $request);
        putSessionMessage('success', __('faq/faq/message.updated'));
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
        $this->faqTypeRepository->delete($id);
        putSessionMessage('success', __('faq/faq/message.deleted'));
        return redirect()->route($this->path);
    }
}
