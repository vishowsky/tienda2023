@extends('connect.master')

@section('title','Login')

@section('content')
<div class="box box-register shadow">
    <!-- nombre-->
    {!! Form::open(['url' => '/register']) !!}
    <label for="name">Nombre</label>
    <div class="input-group">
        <div class="input-group-prepend">
            <!-- <div class="input-group-text"><i class="fa-solid fa-at fa-bounce"></i></div> -->
        </div>
        {!! Form::text('name',null,['class' => 'form-control','required'])!!}
    </div>
    <!-- apellido-->
    <label for="lastname" class="mt16">Apellido</label>
    <div class="input-group">
        <div class="input-group-prepend">
            <!-- <div class="input-group-text"><i class="fa-solid fa-at fa-bounce"></i></div> -->
        </div>
        {!! Form::text('lastname',null,['class' => 'form-control','required'])!!}
    </div>
    <!-- Correo Electronico-->
    <label for="email" class="mt16">Correo Electronico</label>
    <div class="input-group">
        <div class="input-group-prepend">
           <!-- <div class="input-group-text"><i class="fa-solid fa-at fa-bounce"></i></div> -->
        </div>
        {!! Form::email('email',null,['class' => 'form-control','required'])!!}
    </div>

     <!-- Contraseña-->
     <label for="password" class="mt16" >Contraseña</label>
     <div class="input-group">
         <div class="input-group-prepend">
             <!-- <div class="input-group-text"><i class="fa-solid fa-lock fa-bounce"></i></div> -->
         </div>
         {!! Form::password('password', ['class' => 'form-control','required']) !!}
     </div>
      <!-- repetir Contraseña-->
      <label for="cpassword" class="mt16" >Contraseña</label>
      <div class="input-group">
          <div class="input-group-prepend">
              <!-- <div class="input-group-text"><i class="fa-solid fa-lock fa-bounce"></i></div>-->
          </div>
          {!! Form::password('cpassword', ['class' => 'form-control','required']) !!}
      </div>
    {!! Form::submit('Crear Cuenta', ['class' => 'btn btn-success mt16']) !!}
    {!! Form::close() !!}


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
        
    <div class="footer mt16">
        <a href="{{ url('/login') }}">Ya tienes cuenta? Inicia sesion</a>
        
    </div>

    

</div>

@stop