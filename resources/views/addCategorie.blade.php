@extends('layouts.app')

@section('content')
<div class="container"style="marginTop:50px">
  <form action="{{ url('categorieStore')}}" method="post">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="name">Nom du categorie</label>
      <input type="text" class="form-control" id="name" name="name">
    </div>
    <button type="submit" class="btn btn-primary">Ajouter</button>
  </form>
</div>
@endsection