@extends('admin.layouts.millenium_admin', ['title' => 'Список партнеров'])

@section('content')

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Все партнеры</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Главная</a></li>
                            <li class="breadcrumb-item active">Партнеры</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-2">
                        <a href="{{ route('admin.partner.create') }}" class="btn btn-block btn-primary">Добавить</a>
                    </div>
                </div>
                <div class="row pt-3">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Информация</h3>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Превью</th>
                                        <th>Заголовок</th>
                                        <th>Ссылка</th>
                                        <th>Опубликовано</th>
                                        <th>Действия</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($partners as $partner)
                                        <tr>
                                            <td>{{ $partner->id }}</td>
                                            <td><img width="50px" src="{{ asset('storage/' . $partner->partner_image) }}"></td>
                                            <td>{{ $partner->title }}</td>
                                            <td>{{ $partner->link }}</td>
                                            <td>{{ $dateCreate->translatedFormat('d.m.Y') }}</td>
                                            <td class="d-flex">
                                                @if($partner->link)
                                                <a href="{{ $partner->link }}" class="mr-2" title="Перейти" target="_blank"><i
                                                        class="far fa-eye"></i></a>
                                                @endif
                                                <a href="{{ route('admin.partner.edit', $partner->id) }}"
                                                   class="text-success mr-2" title="Редактировать"><i
                                                        class="fas fa-edit"></i></a>
                                                <form action="{{ route('admin.partner.delete', $partner->id) }}" method="POST">
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
        </section>
    </div>
@endsection
