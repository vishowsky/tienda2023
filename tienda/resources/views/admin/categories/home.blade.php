@extends('admin.master')

@section('title', 'Categorias')

@section('breadcrumb')
<li class="breadcrumb-item">
    <a href="{{ url('/admin/categories')}}">Categorias</a>
</li>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <div class="panel shadow">
                <div class="header">
                    <h2 class="title">Crear Categoria</h2>
                </div>
                <div class="inside">
                    {!! Form::open(['url' => '/admin/category/add']) !!}

                    <label for="name" class="">Nombre de la categoria</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="far fa-keyboard"></i>
                            </span>
                        </div>
                        {!! Form::text('name', null,['class' => 'form-control']) !!}
                    </div>

                    <label for="module" class="mt16">Modulo</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="far fa-keyboard"></i>
                            </span>
                        </div>
                        {!! Form::select('module', getModulesArray(), 0, ['class' => 'custom-select'])!!}
                    </div>

                    <label for="icon" class="mt16">Icono</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="far fa-keyboard"></i>
                            </span>
                        </div>
                        {!! Form::text('icon', null,['class' => 'form-control']) !!}
                    </div>
                    {!! Form::submit('Guardar',['class'=> 'btn btn-success mt16']) !!}


                    {!! Form::close() !!}
                </div>
            </div>
        </div>

        <div class="col-md-9">
            <div class="panel shadow">
                <div class="header">
                    <h2 class="title">Categorias</h2>
                </div>

                <div class="inside">
                    <nav class="nav nav-pills nav-fill">
                        @foreach(getModulesArray() as $m =>$k)
                        <a class="nav-link" href="{{ url('/admin/categories/'.$m) }}" >{{ $k }}</a>
                        @endforeach
                    </nav>
                   <table class="table mt16">
                    <thead>
                        <tr>
                            <td width="32"></td>
                            <td>Nombre</td>
                            <td width="0">opciones</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cats as $cat)
                        <tr>
                            <td>{!! htmlspecialchars_decode($cat->icono) !!}</td>
                            <td>{{ $cat->name }}</td>
                            <td>
                                <div class="opts">
                                    <a href="{{ url('/admin/category/'.$cat->id.'/edit') }}">
                                    editar</a>
                                    <a href="{{ url('/admin/category/'.$cat->id.'/delete') }}">
                                    eliminar</a>

                                </div>
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

@endsection