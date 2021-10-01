<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Tag;
use Carbon\Carbon;

class IndexController extends Controller {

    public function __invoke(Post $post) {

        $tags = Tag::all();
        $postsRecent = Post::orderBy('id', 'DESC')->Limit(3)->get();
        $dateCreate = Carbon::parse($post->created_at);

        $posts = Post::paginate(3);
        $likedPosts = Post::withCount('likedUsers')->orderBy('liked_users_count', 'DESC')->get()->take(4);

        //dd($likedPosts);
        return view('post.index', compact('postsRecent','dateCreate', 'posts', 'tags', 'likedPosts'));
    }

}
