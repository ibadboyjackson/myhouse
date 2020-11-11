<?php

namespace App\Repository\Blog;

use App\Model\Post;
use App\User;
use Illuminate\Support\Str;

class PostRepository {
    /**
     * @var Post
     */
    private $post;



    /**
     * PostRepository constructor.
     * @param Post $post
     */
    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    /**
     * Get posts order by created time descendant
     * @return mixed
     */
    public function getPosts () {
        return $this->post->orderBy('created_at', 'desc')->paginate(5);
    }

    /**
     * Get all Posts
     * @return mixed
     */
    public function getAllPosts () {
        return $this->post->get();
    }

    /**
     * Get post by id
     * @param int $id
     */
    public function getPostById (int $id) {

        $post = $this->post->findOrFail($id);

        if ($post) {
            return $post;
        }
        return abort(403);
    }

    public function getPostBySlug (string $slug) {

        $post = $this->post->findOrFail($slug);

        if ($post) {
            return $post;
        }
        return abort(403);
    }

    /**
     * create a post
     * @param $request
     * @return bool
     */
    public function storePost ($request) {

        $post = $this->post;
        $post->title = $request->title;
        $post->content = $request->content;

        $post->user_id = $request->user()->id;
        $post->league_id = $request->league_id;
        $post->slug = Str::slug($request->title);

        /*
         * Store a single image
        */

        if ($request->hasFile('image')) {

            $before = $request->file('image');
            $name = $before->getClientOriginalName();
            $before->move(public_path(). '/images/blog/', $name);
            $post->image = $name;
        }

        return $post->save();
    }

    /**
     * Update a post
     * @param int $id
     * @param $request
     * @return bool
     */
    public function updatePost (int $id, $request) {

        $post = $this->getPostById($id);

        if ($post) {
            $post->title = $request->title;
            $post->content = $request->content;

            $post->user_id = $request->user()->id;
            $post->league_id = $request->league_id;
            $post->slug = Str::slug($request->title);

            /*
             * Store a single image
            */

            if ($request->hasFile('image')) {

                $before = $request->file('image');
                $name = $before->getClientOriginalName();
                $before->move(public_path(). '/images/blog/', $name);
                $post->image = $name;
            }

            return $post->save();
        }
        return false;
    }

    /**
     * Delete a post
     * @param $id
     */
    public function deletePost ($id) {
        $post = $this->getPostById($id);

        if ($post) {
            return $post->delete();
        }
        return abort(403);
    }

    /**
     * Get username
     * @param $id
     * @param User $user
     * @return User|void
     */
    public function getUserName ($id, User $user) {

        $user = $user->findOrFail($id);

        if ($user) {
            return $user;
        }

        return abort(403);
    }
}
