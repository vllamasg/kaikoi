@extends('layouts.app')
@section('title','Registrar Empresa')
@section('content')
            <div style="border-left: 20px solid #ff6868;" class="triangulo"></div>
            <div class="formu">
            <form class="form" method="POST" action="{{url('/new_company')}}">
                <label>NOMBRE DE LA EMPRESA</label><br>
                <p style="color: #8c8c8c; font-size: 13px;">Lorem ipsum dolor sit amet, consectetuer adipiscing <br> elit, sed diam nonummy nibh euismod tincidunt laoreet</p>
                <input id="company" class="inputone" type="text" id="company_name" name="company" required/><br>
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <button type="submit" id="enviar">SIGUIENTE</button>
            </form>
          </div>

<script type="text/javascript">
  $("#enviar").click(function(){
    var company = $("#company").val();
    var token = $("input['_token']").val();

    var route="{{url('new_company')}}";
    var dataString = "company="+company;

    $.ajax({
      url:route,
      headers:{'X-CSRF-TOKEN':token},
      type:'POST',
      datatype:'json',
      data:dataString,
      success:function(data)
      {

      },
      error:function(data)
      {
        console.log(data.resposeJSON.name)
        $("error").html(data.resposeJSON.name);
        $("message-error").fadeIn();
      }
    });
  });
</script>


@endsection
