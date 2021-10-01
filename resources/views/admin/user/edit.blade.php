@extends('admin.layouts.millenium_admin', ['title' => 'Редактирование пользователя'])

@section('content')

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Пользователь: {{ $user->name }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.user.index') }}">Пользователи</a></li>
                            <li class="breadcrumb-item active"><b>Редактирование: </b>{{ $user->name }}</li>
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
                            <form action="{{ route('admin.user.update', $user->id) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <div class="card-body">

                                    <div class="form-group">
                                        <label>Имя</label>
                                        <input type="text" class="form-control" name="name"
                                               placeholder="Имя пользователя" value="{{ $user->name }}">
                                        @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control" name="email" placeholder="Email"
                                               value="{{ $user->email }}">
                                        @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Выбрать роль</label>
                                        <select name="role" class="form-control">
                                            @foreach ($roles as $id => $role)
                                                <option value="{{ $id }}"
                                                    {{ $id == $user->$role ? ' selected' : '' }}
                                                >{{ $role }}</option>
                                            @endforeach
                                        </select>
                                        @error('role')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <input type="hidden" name="user_id" value="{{ $user->id }}">
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
