<?php

namespace App\Http\Controllers\Post;

use App\Http\Requests\CommentRequest;
use App\Http\Controllers\Controller;
use App\Repository\CommentRepository;
use Illuminate\Http\Response;

class CommentController extends Controller
{
    /**
     * @var CommentRepository
     */
    private $commentRepository;

    /**
     * CommentController constructor.
     * @param CommentRepository $commentRepository
     */
    public function __construct(CommentRepository $commentRepository)
    {
        $this->commentRepository = $commentRepository;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CommentRequest $request
     * @return void
     */
    public function store(CommentRequest $request)
    {
        $this->commentRepository->create($request);
        putSessionMessage('success', __('comment/message.created'));
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CommentRequest $request
     * @param int $id
     * @return void
     */
    public function update(CommentRequest $request, $id)
    {
        $this->commentRepository->update($id, $request);
        putSessionMessage('success', __('comment/message.updated'));
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
        $this->commentRepository->delete($id);
        putSessionMessage('success', __('comment/message.deleted'));
        return redirect()->back();
    }
}
