@extends('personal.layouts.millenium_admin')

@section('title', 'Понравившиеся посты')

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
                            <li class="breadcrumb-item"><a href="{{ route('personal.main.index') }}">Главная</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">



                    <div class="row pt-3">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Все посты</h3>
                                </div>
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover text-nowrap">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Заголовок</th>
                                            <th>Действия</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($posts as $post)
                                            <tr>
                                                <td>{{$post->id}}</td>
                                                <td>{{$post->title}}</td>
                                                <td class="d-flex">
                                                    <a href="{{route('admin.post.show', $post->id)}}" class="mr-2"><i
                                                            class="far fa-eye" title="Просмотреть"></i></a>
                                                    <form action="{{route('personal.liked.delete', $post->id)}}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="border-0 bg-transparent"
                                                                title="Удалить">
                                                            <i class="far fa-trash-alt text-danger" role="button"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>

@endsection
