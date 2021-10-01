<?php

namespace App\Widgets;

use App\Models\Post;
use Arrilot\Widgets\AbstractWidget;
use Carbon\Carbon;

class RecentNews extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run(Post $post)
    {

        $recentPosts = Post::orderBy('id', 'DESC')->Limit(3)->get();

        $dateCreate = Carbon::parse($post->created_at);

        return view('widgets.recent_news', [
            'config' => $this->config,
        ], compact('recentPosts', 'dateCreate'));
    }
}
