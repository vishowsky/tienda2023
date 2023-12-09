@extends('connect.master')

@section('title','Login')

@section('content')
<div class="box box-login shadow">
    <!-- Correo Electronico-->
    {!! Form::open(['url' => '/login']) !!}
    <label for="email">Correo Electronico</label>
    <div class="input-group">
        <div class="input-group-prepend">
            <div class="input-group-text"><i class="fa-solid fa-at fa-bounce"></i></div>
        </div>
        {!! Form::email('email',null,['class' => 'form-control'])!!}
    </div>

     <!-- Contraseña-->
     <label for="email" class="mt16" >Contraseña</label>
     <div class="input-group">
         <div class="input-group-prepend">
             <div class="input-group-text"><i class="fa-solid fa-lock fa-bounce"></i></div>
         </div>
         {!! Form::password('password', ['class' => 'form-control']) !!}
     </div>
    {!! Form::submit('Ingresar', ['class' => 'btn btn-success mt16']) !!}
    {!! Form::close() !!}
    <div class="footer mt16">
        <a href="{{ url('/register') }}">Crear cuenta</a>
        <a href="{{ url('/register') }}">Olvidaste tu contraseña?</a>
    </div>
    
    @if(Session::has('message'))
    <div class="container">
        <div class="mt16 alert alert-{{Session::get('typealert') }}" style="display:none;">
            {{ Session::get('message') }}
            @if ($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            @endif
            <script>
                $('.alert').slideDown();
                setTimeout(function(){ $('alert').slideUp(); },10000);
            </script>
        </div>
    </div>
    @endif
</div>

@stop