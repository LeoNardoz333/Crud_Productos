@extends('layouts.app_principal')
@section('container')
<h1 class="text-center">Registro</h1>
<div class="container w-75">
    <form action="{{route('LoginStore')}}" method="post">
        @csrf
        @error('mensaje')
            <div style="color:red">{{$message}}</div>
        @enderror
        <div class="from-group">
            <label for="username" class="form-label">Usuario</label>
            <input type="text" name="username" id="username" class="form-control"
            value="{{old('username')}}" placeholder="Crear un usuario">
            @error('username')
                <div style="color:red">{{$message}}</div>
            @enderror
        </div>
        <div class="from-group">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" name="password" id="password" class="form-control"
            placeholder="Escribe tu contraseña">
            @error('password')
                <div style="color:red">{{$message}}</div>
            @enderror
        </div>
        <div class="from-group mt-2">
            <button for="submit" class="btn btn-primary">Iniciar sesión</button>
            <a href="{{route('Dashboard')}}" class="btn btn-danger">Cancelar</a>
        </div>
    </form>
</div>
@endsection