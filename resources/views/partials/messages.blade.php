@if(count($errors)>0)
    <div class="alert alert-warning" role='alert'>
      <strong>Errores:</strong>
      <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
          @endforeach
      </ul>
    </div>
@endif
@if(Session::has('enviar'))
<div class="alert alert-success" role='alert'>
  <strong>{{Session::get('enviar')}}</strong>
</div>
@endif
<!--@foreach($errors->all() as $error)
<script type="text/javascript">
    swal("{{$error}}");
</script>
@endforeach-->
