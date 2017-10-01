@extends('layouts.app')

@section('content')
            <div class="triangulo"></div>
            <div class="formu">
            <form class="form" method="POST" action="{{ url('/insertar')}}">
                <label>¡HOLA!</label><br>
                <label style="font-size: 15px; letter-spacing:0px;" class="subtitle">Solo completa esta breve información</label><br>
                <input name="name" class="inputone" type="text" placeholder="Nombre Completo" id="name"/><br>
                <div class="labels">
                <label style=" float:right; font-size: 14px; letter-spacing:0px;">Correo</label><br>
                <label style="margin-top: 20px; float: right; font-size: 14px; letter-spacing:0px;">Contraseña</label>
                <label style="margin-top: 20px; float: right; font-size: 14px; letter-spacing:0px;">Empresa</label>
                </div>
                  @foreach($email as $correo)
                <input name="email_" style=" float: left; width: 270px;" class="inputone" type="text" id="user" value="{{$correo->email}}" readonly/><br> 
                  @endforeach
                <input name="password" style=" float: left; width: 270px;" class="inputone" type="text" id="password"/><br>
                <select class="company" style=" float: left; width: 270px;" name="company">
                  <option value="0">Seleccionar</option>
                  @foreach($companies as $company)
                  <option value="{{$company->id}}">{{$company->name}}</option>
                  @endforeach
                </select>
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <button type="submit">SIGUIENTE</button>
            </form>
                </div>
@endsection
