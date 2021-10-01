@extends('admin.layouts.millenium_admin', ['title' => 'Редактирование партнера'])

@section('content')

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Статья: {{ $partner->title }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.partner.index') }}">Партнеры</a></li>
                            <li class="breadcrumb-item active"><b>Редактирование: </b>{{ $partner->title }}</li>
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
                                <h3 class="card-title">Информация</h3>
                            </div>
                            <form action="{{ route('admin.partner.update', $partner->id) }}" method="POST"
                                  enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Заголовок</label>
                                        <input type="text" class="form-control" name="title"
                                               placeholder="Название партнера" value="{{ $partner->title }}">
                                        @error('title')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Ссылка на сайт партнера</label>
                                        <input type="text" class="form-control" name="link"
                                               placeholder="Ссылка партнера" value="{{ $partner->link }}">
                                        @error('link')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Изображение</label>
                                        <div class="w-25 mb-2">
                                            <img src="{{ url('storage/' . $partner->partner_image) }}" alt="partner_image"
                                                 class="w-100">
                                        </div>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="partner_image">
                                                <label class="custom-file-label">Выбирите изображение</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Загрузка</span>
                                            </div>
                                        </div>
                                        @error('partner_image')
                                        <div class="text-danger">{{ $message }}</div>
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
