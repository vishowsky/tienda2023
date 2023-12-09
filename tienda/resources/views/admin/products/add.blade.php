@extends('admin.master')

@section('title','Agregar Producto')

@section('breadcrumb')
<li class="breadcrumb-item">
    <a href="{{url('/admin/products') }}"> Productos</a>
</li>
<li class="breadcrumb-item">
    <a href="{{url('/admin/product/add') }}"> Agregar Producto</a>
</li>
@endsection

@section('content')

<div class="container-fluid">
    <div class="container-fluid">
        <div class="panel shadow">
            <div class="header">
                <h2 class="title">
                   Agregar Productos
                </h2>
                <div class="inside">
                    {!! Form::open(['url' => '/admin/product/add']) !!}
                    <div class="row">

                        <div class="col-md-6">
                            <label for="name">Nombre del producto</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon">@</span>
                                </div>
                                {!! Form::text('name', null,['class' => 'form-control'])!!}
                            </div>
                        </div>
                            <div class="col-md-3">
                                <label for="name">Categoria</label>
                            </div>

                            <div class="col-md-3">
                                <label for="name">Imagen Destacada</label>
                                <div class="custom-file">
                                {!! Form::file('img',['class' => 'form-control','id' => 'customFile']) !!}
                                <label class="custom-file-label" for="customFile">Elige el archivo</label>
                                </div>
                            </div>
                            
                        </div>
                        {!! Form::close()!!}
                        <div class="row mt16">
                            <div class="col-md-3">
                                <label for="price">Precio</label>
                                {!! Form::number('price',null, ['class' => 'form-control' , 'min' =>'0' ]) !!}
                            </div>
                        </div>
    
                        <div class="row mt16">
                            <div class="col-md-12">
                                <label for="content" >Descripcion</label>
                                {!!Form::textarea('content', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                    </div>
                    
            </div>
        </div>
    </div>


@endsection