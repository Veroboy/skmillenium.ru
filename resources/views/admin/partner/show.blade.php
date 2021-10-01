@extends('admin.layouts.millenium_admin', ['title' => $partner->title])

@section('content')

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 d-flex align-items-center">
                        <h1 class="m-0 mr-3">Пост: {{ $partner->title }}</h1>
                        <a href="{{ route('admin.post.edit', $partner->id) }}" class="text-success mr-2"
                           title="Редактировать"><i class="fas fa-edit"></i></a>
                        <form action="{{ route('admin.post.delete', $partner->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="border-0 bg-transparent" title="Удалить">
                                <i class="far fa-trash-alt text-danger" role="button"></i>
                            </button>
                        </form>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.partner.index') }}">Посты</a></li>
                            <li class="breadcrumb-item active">{{ $partner->title }}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">

                <div class="row pt-3">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Информация</h3>
                            </div>

                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <tbody>
                                    <tr>
                                        <td>ID</td>
                                        <td>{{ $partner->id }}</td>
                                    </tr>
                                    <tr>
                                        <td>Название</td>
                                        <td>{{ $partner->title }}</td>
                                    </tr>
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
