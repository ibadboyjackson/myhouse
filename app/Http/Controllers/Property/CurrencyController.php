<?php

namespace App\Http\Controllers\Property;

use App\Http\Requests\Admin\CurrencyRequest;
use App\Repository\Currency\CurrencyRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class CurrencyController extends Controller
{
    /**
     * @var CurrencyRepository
     */
    private $currencyRepository;
    /**
     * @var string
     */
    private $path;

    /**
     * CurrencyController constructor.
     * @param CurrencyRepository $currencyRepository
     * @param string $path
     */
    public function __construct(CurrencyRepository $currencyRepository, $path = 'currency.index')
    {
        $this->middleware('auth');
        $this->currencyRepository = $currencyRepository;
        $this->path = $path;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('currency.index', [
           'currencies' => $this->currencyRepository->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('currency.pages.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CurrencyRequest $request
     * @param Str $str
     * @return Response
     */
    public function store(CurrencyRequest $request, Str $str)
    {
        $slug = [ 'slug' => $str->slug($request->get('name')) ];
        $request->merge($slug);

        $this->currencyRepository->create($request);
        putSessionMessage('success', __('currency/message.created'));
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
        return view('currency.pages.edit', [
            'currency' => $this->currencyRepository->getById($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CurrencyRequest $request
     * @param int $id
     * @return Response
     */
    public function update(CurrencyRequest $request, $id)
    {
        $this->currencyRepository->update($id, $request);
        putSessionMessage('success', __('currency/message.updated'));
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
        $this->currencyRepository->delete($id);
        putSessionMessage('success', __('currency/message.deleted'));
        return redirect()->route($this->path);
    }
}
