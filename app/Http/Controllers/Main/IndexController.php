<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Widgets\RecentNews;
use Carbon\Carbon;

class IndexController extends Controller {

    public function __invoke(Post $post, RecentNews $recentNews) {

        $postsRecent = Post::orderBy('id', 'DESC')->Limit(3)->get();
        $dateCreate = Carbon::parse($post->created_at);
        return view('main.index', compact('postsRecent','dateCreate', 'recentNews'));
    }

}
