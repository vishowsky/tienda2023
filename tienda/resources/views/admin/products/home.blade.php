@extends('admin.master')

@section('title','Usuarios')

@section('breadcrumb')
<li class="breadcrumb-item">
    <a href="{{url('/admin/products') }}"> Productos</a>
</li>
@endsection

@section('content')

<div class="container-fluid">
    <div class="container-fluid">
        <div class="panel shadow">
            <div class="header">
                <h2 class="title">
                    Productos
                </h2>
                <div class="inside">
                    <div class="btns">
                        <a href="{{ url('admin/product/add') }}">agregar</a>
                    </div>
                    <table class="table">
                        
                    </table>                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection