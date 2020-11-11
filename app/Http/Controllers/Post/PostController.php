<?php

namespace App\Http\Controllers\Post;

use App\Http\Requests\PostRequest;
use App\Repository\Blog\LeagueRepository;
use App\Repository\Blog\PostRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class PostController extends Controller
{
    /**
     * @var PostRepository
     */
    private $postRepository;
    /**
     * @var LeagueRepository
     */
    private $leagueRepository;
    /**
     * @var string
     */
    private $path;

    /**
     * PostController constructor.
     * @param PostRepository $postRepository
     * @param LeagueRepository $leagueRepository
     * @param string $path
     */
    public function __construct(PostRepository $postRepository, LeagueRepository $leagueRepository, string $path = 'post.index')
    {
        $this->middleware('auth');
        $this->postRepository = $postRepository;
        $this->leagueRepository = $leagueRepository;
        $this->path = $path;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('post.index', [
           'posts' => $this->postRepository->getPosts(),
           'leagues' => $this->leagueRepository->getAll()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('post.pages.add', [
            'leagues' => $this->leagueRepository->getAll()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param PostRequest $request
     * @return Response
     */
    public function store(PostRequest $request)
    {
        $response = $this->postRepository->storePost($request);

        if ($response === true) {
            putSessionMessage('success', __('blog/message.create'));
            return redirect()->route($this->path);
        }
        return abort(403);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $slug
     * @return Response
     */
    public function edit($slug)
    {
        return view('post.pages.edit', [
            'post' => $this->postRepository->getPostBySlug($slug),
            'leagues' => $this->leagueRepository->getAll()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param PostRequest $request
     * @param int $id
     * @return Response
     */
    public function update(PostRequest $request, $id)
    {
        $response = $this->postRepository->updatePost($id, $request);

        if ($response === true) {
            putSessionMessage('success', __('blog/message.update'));
            return redirect()->route($this->path);
        }
        return abort(403);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->postRepository->deletePost($id);
        putSessionMessage('success', __('blog/message.delete'));
        return redirect()->route($this->path);
    }
}
