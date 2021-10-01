@extends('admin.layouts.millenium_admin', ['title' => 'Добавление меню'])

@section('content')

<div class="content-wrapper">

   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0">Создание нового меню</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                   <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Главная</a></li>
                   <li class="breadcrumb-item"><a href="{{ route('admin.menu.index') }}">Меню</a></li>
                   <li class="breadcrumb-item active">Добавление меню</li>
               </ol>
            </div>
         </div>
      </div>
   </div>

   <section class="content">
      <div class="container-fluid">
         <div class="row">
            <div class="col-12">
               <div class="card card-primary">
                  <div class="card-header">
                     <h3 class="card-title">Информация</h3>
                  </div>
                  <form action="{{route('admin.menu.store')}}" method="POST" >
                     @csrf
                      <div class="row">
                          <div class="col-6">
                             <div class="card-body">
                                 <div class="form-group">
                                    <label>Заголовок</label>
                                    <input type="text" class="form-control" name="title" placeholder="Название меню">
                                    @error('title')
                                       <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                 </div>
                             </div>
                          </div>
                          <div class="col-6">
                              <div class="card-body">
                                  <div class="form-group">
                                      <label>Ссылка</label>
                                      <input type="text" class="form-control" name="alias" placeholder="Ссылка">
                                      @error('title')
                                      <div class="text-danger">{{ $message }}</div>
                                      @enderror
                                  </div>
                              </div>
                          </div>
                      </div>
                     <div class="card-footer">
                        <input type="submit" class="btn btn-primary" value="Добавить">
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </section>
</div>

@endsection
