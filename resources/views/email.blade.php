@extends('layouts.app')
@section('title','Registrar')
@section('content')
            <div style="border-left: 20px solid #15dde0;" class="triangulo"></div>
            <div class="formu">
            <form class="form" method="POST" action="{{url('/mail_send')}}">
                <label>E-MAIL</label><br>
                <input class="inputone" type="text" placeholder="Mail" id="mail2" name="email" required/><br>
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <button type="submit" class="">Enviar</button>
            </form>
                </div>
@endsection
