@extends('layouts.millenium', ['title' => $post->title])

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
                        <li>
                            <a href="{{ route('post.index') }}">Статьи</a>
                        </li>

                        <li class="sep">/
                        </li>

                        <li>{{ $post->title }}
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

                        <!-- article -->
                        <article>
                            <div class="blog-simple">
                                <img class="img-responsive" src="{{ asset('storage/' . $post->preview_image) }}" alt="">
                                <div class="blog-text">
                                    <h3>{{ $post->title }}</h3>
                                    <span class="user-post">
                                        <i class="ti-view-list-alt"></i>
                                        {{ $post->category->title }}
                                    </span>
                                    <span class="date-post">
                                        <i class="ti-calendar"></i>
                                        {{ $dateCreate->translatedFormat('M') }}. {{ $dateCreate->format('d') }}
                                    </span>
                                    <span class="comment">
                                        <a href="">
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
                                        </form>
                                    </span>

                                    {!! $post->content !!}
                                </div>
                            </div>
                        </article>
                        <!-- article end -->

                        <!-- comment blog -->
                        <div id="blog-comment">
                            <h5><span>Комментариев ({{ $post->comments->count() }})</span></h5>

                            @foreach($post->comments as $comment)
                                <ul>
                                    <li>
                                        <div class="comment-info">
                                            <span class="c-name">{{ $comment->user->name }}</span>
                                            <span class="c-date"><i class="ti-calendar"></i>{{ $comment->dateAsCarbon->diffForHumans() }}</span>
                                            <span class="c-reply"><a class="link" href="#">Reply</a></span>
                                        </div>
                                        <div class="comment">
                                            {{ $comment->message }}
                                        </div>
                                    </li>
                                </ul>
                            @endforeach
                            <div id="comment-form-wrapper">
                                <h6>Оставить комментарий</h6>
                                @auth()
                                    <form action="{{ route('post.comment.store', $post->id) }}" method="post">
                                        @csrf
                                        <textarea cols="10" rows="10" name="message" id="message"
                                                  placeholder="Сообщение"></textarea>

                                        <div id="mail_success" class="success"> Thanks for your comment</div>
                                        <div id="mail_failed" class="error">Error, comment failed</div>

                                        <button id="sendcomment" class="btn" type="submit">Комментировать</button>
                                    </form>
                                @endauth
                            </div>
                        </div>
                        <!-- comment blog end -->

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
                                        <button type="submit"><span class="icon"><i class="fa fa-search"></i></span>
                                        </button>
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
                                    <div>
                                        <img alt="#" class="pull-left" width="100px"
                                             src="{{ asset('storage/' . $post->preview_image) }}">
                                        <h6>
                                            <a href="#">111</a>
                                        </h6>

                                        <p>
                                            2222
                                        </p>
                                    </div>
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
                                Proin hendrerit eget tellus sit amet vestibulum. Nullam a tincidunt leo. Sed eget sem
                                scelerisque, malesuada lectus sed, facilisis sapien. Pellentesque quis ullamcorper est,
                                vitae
                                condimentum enim. Phasellus suscipit eu lacus finibus rhoncus. Maecenas sed lacus
                                aliquam, vehicula sapien ac, cursus erat. Aenean vel erat a urna efficitur varius.
                            </p>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>

@endsection
