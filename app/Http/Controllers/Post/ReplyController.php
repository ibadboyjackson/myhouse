<?php

namespace App\Http\Controllers\Post;

use App\Http\Requests\ReplyRequest;
use App\Repository\ReplyRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class ReplyController extends Controller
{
    /**
     * @var ReplyRepository
     */
    private $replyRepository;

    /**
     * ReplyController constructor.
     * @param ReplyRepository $replyRepository
     */
    public function __construct(ReplyRepository $replyRepository)
    {
        $this->replyRepository = $replyRepository;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ReplyRequest $request
     * @return Response
     */
    public function store(ReplyRequest $request)
    {
        $this->replyRepository->create($request);
        putSessionMessage('success', __('reply/message.created'));
        return redirect()->back();
    }


    /**
     * Update the specified resource in storage.
     *
     * @param ReplyRequest $request
     * @param int $id
     * @return Response
     */
    public function update(ReplyRequest $request, $id)
    {
        $this->replyRepository->update($id, $request);
        putSessionMessage('success', __('reply/message.updated'));
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->replyRepository->delete($id);
        putSessionMessage('success', __('reply/message.deleted'));
        return redirect()->back();
    }
}
