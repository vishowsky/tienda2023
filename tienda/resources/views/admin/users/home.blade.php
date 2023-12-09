@extends('admin.master')

@section('title','Usuarios')

@section('breadcrumb')
<li class="breadcrumb-item">
    <a href="{{url('/admin/users') }}"> Usuarios</a>
</li>
@endsection

@section('content')
<div class="container-fluid">
    <div class="container-fluid">
        <div class="panel shadow">
            <div class="header">
                <h2 class="title">
                    Usuarios
                </h2>
                <div class="inside">
                    <table class="table">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Nombre</td>
                                <td>Apellido</td>
                                <td>Correo</td>
                                <td></td>
                            </tr>
                        </thead> 
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->lastname }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <div>
                                    <a href="{{ url('/admin/user'.$user->id.'/edit') }}">editar</a>
                                
                                    <a href="{{ url('/admin/user'.$user->id.'/delete') }}">borrar</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach   
                    </table>                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection