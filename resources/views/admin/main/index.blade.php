@extends('admin.layouts.millenium_admin', ['title' => 'Главная'])

@section('content')

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Общая информация</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin">Главная</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>{{ $data['usersCount'] }}</h3>
                                <p>Пользователи</p>
                            </div>
                            <div class="icon">
                                <i class="nav-icon fas fa-users"></i>
                            </div>
                            <a href="{{ route('admin.user.index') }}" class="small-box-footer">Просмотреть <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>{{ $data['postsCount'] }}</h3>
                                <p>Посты</p>
                            </div>
                            <div class="icon">
                                <i class="nav-icon fas fa-clipboard-list"></i>
                            </div>
                            <a href="{{ route('admin.post.index') }}" class="small-box-footer">Просмотреть <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>{{ $data['categoriesCount'] }}</h3>
                                <p>Категории</p>
                            </div>
                            <div class="icon">
                                <i class="nav-icon fas fa-th-list"></i>
                            </div>
                            <a href="{{ route('admin.category.index') }}" class="small-box-footer">Просмотреть <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>{{ $data['tagsCount'] }}</h3>
                                <p>Теги</p>
                            </div>
                            <div class="icon">
                                <i class="nav-icon fas fa-tags"></i>
                            </div>
                            <a href="{{ route('admin.tag.index') }}" class="small-box-footer">Просмотреть <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>

@endsection
