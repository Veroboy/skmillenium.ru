<?php

namespace App\Http\Controllers\Admin\Post;

use App\Models\Post;
use Carbon\Carbon;

class IndexController extends BaseController {

    public function __invoke(Post $post) {

        $posts = Post::all();
        $dateCreate = Carbon::parse($post->created_at);

        return view('admin.post.index', compact('posts', 'dateCreate'));
    }

}
