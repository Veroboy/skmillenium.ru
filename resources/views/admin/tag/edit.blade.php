@extends('admin.layouts.millenium_admin', ['title' => 'Редактирование тега'])

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Тег: {{$tag->title}}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.main.index') }}">Главная</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.tag.index') }}">Теги</a>
                            </li>
                            <li class="breadcrumb-item active"><b>Редактирование:</b> {{$tag->title}}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Редактирование тега</h3>
                            </div>
                            <form action="{{route('admin.tag.update', $tag->id)}}" method="POST">
                                @csrf
                                @method('PATCH')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Заголовок</label></label>
                                        <input type="text" class="form-control" name="title" placeholder="Название тега"
                                               value="{{$tag->title}}">
                                        @error('title')
                                        <div class="text-danger">Поле обязательно для заполнения.</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <input type="submit" class="btn btn-primary" value="Обновить">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
