@extends('layouts.app')
@section('title','Registrar')
@section('content')
            <div style="border-left: 20px solid #15DDE0;" class="triangulo"></div>
            <div class="formu">
            <form class="form" method="POST" action="{{url('new_link')}}">
                <label>CUÁL URL DESEAS PARA TU EQUIPO</label><br>
                <input name="link" class="inputone" type="text" style="text-align: right; padding-right: 19px;" placeholder=".kaikoi.com" id="company_name" required/><br>
                <p style="margin-top: 8px; color: #8c8c8c; font-size: 13px;">Lorem ipsum dolor sit amet, consectetuer adipiscing <br> elit, sed diam nonummy nibh euismod tincidunt laoreet</p>
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <button type="submit" style="margin-top: 5px;">SIGUIENTE</button>
            </form>
                </div>
@endsection
