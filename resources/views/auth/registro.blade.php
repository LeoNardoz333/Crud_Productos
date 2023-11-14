@extends('layouts.app_principal')
@section('container')
<h1 class="text-center">Registro</h1>
<div class="container w-75">
    <form action="{{route('RegistroStore')}}" method="post">
        @csrf
        <div class="from-group">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" name="name" id="name" class="form-control"
            value="{{old('name')}}" placeholder="Escribe tu nombre">
            @error('name')
                <div style="color:red">{{$message}}</div>
            @enderror
        </div>
        <div class="from-group">
            <label for="username" class="form-label">Usuario</label>
            <input type="text" name="username" id="username" class="form-control"
            value="{{old('username')}}" placeholder="Crear un usuario">
            @error('username')
                <div style="color:red">{{$message}}</div>
            @enderror
        </div>
        <div class="from-group">
            <label for="email" class="form-label">Correo electrónico</label>
            <input type="text" name="email" id="email" class="form-control"
            value="{{old('emai')}}" placeholder="Escribe tu correo">
            @error('email')
                <div style="color:red">{{$message}}</div>
            @enderror
        </div>
        <div class="from-group">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" name="password" id="password" class="form-control"
            placeholder="Escribe tu contraseña">
        </div>
        <div class="from-group">
            <label for="password_confirmation" class="form-label">Confirma la contraseña</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control"
            placeholder="Confirma tu contraseña">
            @error('password')
                <div style="color:red">{{$message}}</div>
            @enderror
        </div>
        <div class="from-group mt-2">
            <button for="submit" class="btn btn-primary">Guardar</button>
            <a href="{{route('Dashboard')}}" class="btn btn-danger">Cancelar</a>
        </div>
    </form>
</div>
@endsection