<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Tag;
use Carbon\Carbon;

class ShowController extends Controller {

    public function __invoke(Post $post) {

        $tags = Tag::all();
        $postsRecent = Post::orderBy('id', 'DESC')->Limit(3)->get();
        $dateCreate = Carbon::parse($post->created_at);
        return view('post.show', compact('postsRecent','dateCreate', 'post', 'tags'));

    }

}
