<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap-grid.css.map') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css.map') }}">
    <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"
      ></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ URL::asset('css/waitMe.css') }}">
    <title>SIMEC</title>
</head>
<body>
    
<!-- Section: Design Block -->
<section class="text-center" id="hola">
    <!-- Background image -->
    <div class="p-5 bg-image" style="
          background-image: url('https://mdbootstrap.com/img/new/textures/full/171.jpg');
          height: 300px;
          "></div>
    <!-- Background image -->
  
    <div class="card mx-4 mx-md-5 shadow-5-strong" style="
          margin-top: -100px;
          background: hsla(0, 0%, 100%, 0.8);
          backdrop-filter: blur(30px);
          ">
      <div class="card-body py-5 px-md-5">
  
        <div class="row d-flex justify-content-center">
          <div class="col-lg-8">
            <h2 class="fw-bold mb-5">Iniciar Sesión</h2>
            {!! Form::open(['id' => 'FormLogin']) !!}
              <!-- Email input -->
              <div class="form-outline mb-4">
                {!! Form::text('Usuario',null, ["class"=>"form-control", "id"=>"Usuario"]) !!}
                {!! Form::label('Usuario','Correo') !!}
              </div>
  
              <!-- Password input -->
              <div class="form-outline mb-4">
                {!! Form::text('Pass',null, ["class"=>"form-control", "id"=>"Pass"]) !!}
                {!! Form::label('Usuario','Contraseña') !!}
              </div>
  
              <!-- Submit button -->
              {{-- <button type="button" onclick="Login()" class="btn btn-primary btn-block mb-4">
                Iniciar Sesión
              </button> --}}
              <a class="btn btn-primary btn-block mb-4" href="{{ url('Login/ValidateUser') }}"><i class="fas fa-cog" aria-hidden="true"></i>Login</a>
              {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section: Design Block -->
  {!! Form::hidden('', url('/Login/ValidateUser'),['id'=>'ValidateUser']) !!}
  <script type="text/javascript" src="{!! asset('js/bootstrap.min.js') !!}"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> {{--sweetalert2 --}}
  {!! Html::script('js/waitMe.js') !!}
  {!! Html::script('js/Login/CtrlLogin.js') !!}
</body>
</html>
