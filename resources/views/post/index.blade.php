@extends('layouts.millenium', ['title' => 'Статьи'])


@section('content')


    <!-- subheader -->
    <section id="subheader">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>
                        СТАТЬИ
                    </h1>
                </div>

                <!-- devider -->
                <div class="col-md-12">
                    <div class="devider-page">
                        <div class="devider-img-right">
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <ul class="subdetail">
                        <li>
                            <a href="{{ route('main.index') }}">Главная</a>
                        </li>

                        <li class="sep">/
                        </li>

                        <li>СТАТЬИ
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- subheader end -->

    <!-- section -->
    <section aria-label="section-blog" id="content">
        <div class="container">
            <div class="row">

                <!-- left content -->
                <div class="col-md-8">
                    <div class="onStep" data-animation="fadeInUp" data-time="300">
                        @foreach($posts as $post)
                            <div class="blog-simple">
                                <a href="{{ route('post.show', $post->id) }}"><img class="img-responsive" src="{{ asset('storage/' . $post->preview_image) }}" alt=""></a>
                                <div class="blog-text">
                                    <h3><a href="{{ route('post.show', $post->id) }}">{{ $post->title }}</a></h3>
                                    <span class="user-post">
                                        <i class="ti-view-list-alt"></i>
                                        {{ $post->category->title }}
                                    </span>
                                    <span class="date-post">
                                        <i class="ti-calendar"></i>
                                        {{ $dateCreate->translatedFormat('M') }}. {{ $dateCreate->format('d') }}
                                    </span>
                                    <span class="comment">
                                        <a href="{{ route('post.show', $post->id) }}">
                                            <i class="ti-comment"></i>
                                            {{ $post->comments->count() }}
                                        </a>
                                    </span>
                                    <span class="date-post">
                                        <form action="{{ route('post.like.store', $post->id) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="border-0" style="background: transparent">
                                                @auth()
                                                    <i class="fa{{ auth()->user()->LikedPosts->contains($post->id) ? 's': 'r' }} fa-heart"></i>
                                                @endauth
                                            </button>
                                            {{ $post->liked_users_count }}
                                        </form>
                                    </span>
                                    {!! $post->content !!}
                                    <a class="btn-blog" href="{{ route('post.show', $post->id) }}">Подробнее</a>
                                </div>
                            </div>
                        @endforeach

                        <!-- Smaller pagination -->
                            {{ $posts->links() }}

                    </div>
                </div>
                <!-- left content end -->

                <!-- right content -->
                <div class="col-md-4">
                    <aside class="onStep" data-animation="fadeInUp" data-time="600">

                        <!-- widget -->
                        <div class="widget">
                            <form role="search">
                                <div class="input-group">
                                    <input type="text" id="search1" class="form-control" placeholder="ПОИСК">
                                    <div class="input-group-btn">
                                        <button type="submit"><span class="icon"><i class="fa fa-search"></i></span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- widget end -->

                        <!-- widget -->
                        <div class="widget">
                            <h5>
                                Последние посты
                            </h5>

                            <div class="devider-widget">
                            </div>

                            <div class="recent">
                                @foreach($likedPosts as $likedPost)
                                    <div>
                                    <img alt="{{ route('post.show', $likedPost->id) }}" class="pull-left" width="100px" src="{{ 'storage/' . $likedPost->preview_image }}">
                                    <h6>
                                        <a href="{{ route('post.show', $likedPost->id) }}">{{ $likedPost->title }}</a>
                                    </h6>

                                    <p>
                                        {!! $likedPost->content !!}
                                    </p>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- widget end -->

                        <!-- widget -->
                        <div class="widget">
                            <h5>
                                Теги
                            </h5>

                            <div class="devider-widget">
                            </div>

                            <div class="tags">
                                @foreach($tags as $tag)
                                <div>
                                    <a href="#">{{ $tag->title }}</a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- widget end -->

                        <!-- widget -->
                        <div class="widget">
                            <h5>
                                About Us
                            </h5>

                            <div class="devider-widget">
                            </div>

                            <p>
                                Proin hendrerit eget tellus sit amet vestibulum. Nullam a tincidunt leo. Sed eget sem scelerisque, malesuada lectus sed, facilisis sapien. Pellentesque quis ullamcorper est, vitae
                                condimentum enim. Phasellus suscipit eu lacus finibus rhoncus. Maecenas sed lacus aliquam, vehicula sapien ac, cursus erat. Aenean vel erat a urna efficitur varius.
                            </p>
                        </div>
                        <!-- widget end -->
                    </aside>
                </div>
                <!-- right content end -->
            </div>
        </div>
    </section>
    <!-- section end -->


@endsection
