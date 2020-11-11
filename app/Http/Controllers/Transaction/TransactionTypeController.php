<?php

namespace App\Http\Controllers\Transaction;

use App\Http\Requests\TransactionTypeRequest;
use App\Repository\TransactionRepository;
use App\Repository\TransactionTypeRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class TransactionTypeController extends Controller
{
    /**
     * @var TransactionTypeRepository
     */
    private $transactionTypeRepository;
    /**
     * @var TransactionRepository
     */
    private $transactionRepository;

    /**
     * TransactionTypeController constructor.
     * @param TransactionTypeRepository $transactionTypeRepository
     * @param TransactionRepository $transactionRepository
     */
    public function __construct(TransactionTypeRepository $transactionTypeRepository, TransactionRepository $transactionRepository)
    {
        $this->middleware('auth');
        $this->transactionTypeRepository = $transactionTypeRepository;
        $this->transactionRepository = $transactionRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('transactionType.index', [
            'transactionTypes' => $this->transactionTypeRepository->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('transactionType.pages.add', [
            'transactions' => $this->transactionRepository->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param TransactionTypeRequest $request
     * @return Response
     */
    public function store(TransactionTypeRequest $request)
    {
        $this->transactionTypeRepository->create($request);
        putSessionMessage('success', __('message/message.transactionTypeCreate'));
        return redirect()->route('transactionType.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        return view('transactionType.pages.edit', [
           'transactionType' => $this->transactionTypeRepository->getById($id),
           'transactions' => $this->transactionRepository->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param TransactionTypeRequest $request
     * @param int $id
     * @return Response
     */
    public function update(TransactionTypeRequest $request, $id)
    {
        $this->transactionTypeRepository->update($id, $request);
        putSessionMessage('success', __('message/message.transactionTypeUpdate'));
        return redirect()->route('transactionType.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->transactionTypeRepository->delete($id);
        putSessionMessage('success', __('message/message.transactionTypeDelete'));
        return redirect()->route('transactionType.index');
    }
}
