@if(Session::has('error'))
<div class="alert alert-danger border-danger">
  {{Session::get('error')}}
</div>
@elseif(session('Success'))
<div class="alert alert-success border-success">
  {{Session::get('Success')}}
</div>
@endif