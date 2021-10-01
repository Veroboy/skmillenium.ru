


<div class="col-md-3 col-xs-12">
    <h3>ПОСЛЕДНИЕ СТАТЬИ</h3>
    @foreach($recentPosts as $recentPost)
    <div class="recent">
        <a href="{{ route('post.show', $recentPost->id) }}">
            <div class="date">
                <div class="month">
                    <span class="date-month">{{ $dateCreate->translatedFormat('d') }}</span> <span
                        class="name-month">{{ $dateCreate->translatedFormat('M') }}</span>
                </div>
            </div>
            <div class="news">
                {{ $recentPost->title }}
            </div>
        </a>
    </div>
    @endforeach
</div>
