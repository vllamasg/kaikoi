@extends('layouts.app')
@section('title','Listo')
@section('content')
<div style="border-left: 20px solid #8259FF;" class="triangulo"></div>
            <div class="formu">
            <form class="form">
                <label>¡LISTO!</label><br>
                <p style="margin-top: 8px; color: #8c8c8c; font-size: 13px;">Lorem ipsum dolor sit amet, consectetuer adipiscing <br> elit, sed diam nonummy nibh euismod tincidunt laoreet</p>
                <button style=" width: 220px; margin-top: 5px;">ENVIAR NUEVAMENTE</button>
            </form>
                </div>
<script type="text/javascript">
    $('#save').click(function(event){
      document.location.href = "{{ url('confirm_email') }}";
    });
</script>
@endsection
