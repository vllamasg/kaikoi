@extends('layouts.app')
@section('title','Login')
@section('content')
            <div class="formu">
            <form class="form" method="post" action="{{url('/validar')}}">
                <label>INICIAR SESIÓN</label><br>
                <input name="email" class="inputone" type="text" placeholder="Mail" id="mail" required/><br>
                <input name="password" class="inputwo" type="password" placeholder="Contraseña" id="pass" required/><br>
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <button type="submit">ENTRAR</button>
            </form>
                </div>
@endsection
