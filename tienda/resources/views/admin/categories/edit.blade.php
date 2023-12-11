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
                    {!! Form::open(['url' => '/admin/category/'.$cat->id.'/edit']) !!}

                    <label for="name" class="">Nombre de la categoria</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="far fa-keyboard"></i>
                            </span>
                        </div>
                        {!! Form::text('name', $cat->name,['class' => 'form-control']) !!}
                    </div>

                    <label for="module" class="mt16">Modulo</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="far fa-keyboard"></i>
                            </span>
                        </div>
                        {!! Form::select('module', getModulesArray(), $cat->module, ['class' => 'custom-select'])!!}
                    </div>

                    <label for="icon" class="mt16">Icono</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="far fa-keyboard"></i>
                            </span>
                        </div>
                        {!! Form::text('icon', $cat->icono,['class' => 'form-control']) !!}
                    </div>
                    {!! Form::submit('Guardar',['class'=> 'btn btn-success mt16']) !!}


                    {!! Form::close() !!}
                </div>
            </div>
        </div>

      

    </div>
</div>

@endsection