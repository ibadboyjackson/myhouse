<?php

namespace App\Http\Controllers\Transaction;

use App\Http\Requests\TransactionRequest;
use App\Repository\TransactionRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class TransactionController extends Controller
{
    /**
     * @var TransactionRepository
     */
    private $transactionRepository;

    public function __construct(TransactionRepository $transactionRepository)
    {
        $this->middleware('auth');
        $this->transactionRepository = $transactionRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('transaction.index', [
            'transactions' => $this->transactionRepository->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('transaction.pages.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param TransactionRequest $request
     * @return Response
     */
    public function store(TransactionRequest $request)
    {
        $this->transactionRepository->create($request);
        putSessionMessage('success', __('message/message.transactionCreate'));
        return redirect()->route('transaction.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        return view('transaction.pages.edit', [
           'transaction' => $this->transactionRepository->getById($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param TransactionRequest $request
     * @param int $id
     * @return Response
     */
    public function update(TransactionRequest $request, $id)
    {
        $this->transactionRepository->update($id, $request);
        putSessionMessage('success', __('message/message.transactionUpdate'));
        return redirect()->route('transaction.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->transactionRepository->delete($id);
        putSessionMessage('success', __('message/message.transactionDelete'));
        return redirect()->route('transaction.index');
    }
}
