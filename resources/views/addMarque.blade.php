@extends('layouts.app')

@section('content')
<div class="container"style="marginTop:50px">
  <form action="{{ url('marqueStore')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group" >
      <label for="name">Nom du marque</label>
      <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="form-group">
      <label class="control-label">Image</label>
      <input type="file" name="image" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Ajouter</button>
  </form>
</div>
@endsection