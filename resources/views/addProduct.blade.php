@extends('layouts.app')

@section('content')
<div class="container"style="marginTop:50px">
  <form action="{{ url('productStore')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-row">
      <div class="col" >
        <label for="name">Nom du produit</label>
        <input type="text" class="form-control" id="name" name="name">
      </div>
      <div class="col" >
        <label for="price">Prix du produit</label>
        <input type="text" class="form-control" id="price" name="price">
      </div>
    </div>
    <div class="form-group">
      <label for="description">Example textarea</label>
      <textarea class="form-control" id="description" name="description" rows="3"></textarea>
    </div>
    <div class="form-group">
      <label class="control-label">Image principale</label>
      <input type="file" name="image" class="form-control">
    </div>
    <div class="form-group">
      <label class="control-label">Image Un</label>
      <input type="file" name="image_one" class="form-control">
    </div>
    <div class="form-group">
      <label class="control-label">Image Deux</label>
      <input type="file" name="image_two" class="form-control">
    </div>
    <div class="form-group">
      <label class="control-label">Image Troi</label>
      <input type="file" name="image_three" class="form-control">
    </div>
    <div class="form-row">
      <div class="col">
        <label class="my-1 mr-2" for="categories_id">Categorie</label>
        <select class="custom-select my-1 mr-sm-2" id="categories_id" name="categories_id">
          <option selected>Choisire...</option>
          @foreach ($categories = App\Categorie::all() as $categorie)
            <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
          @endforeach
        </select>
      </div>
      <div class="col">
        <label class="my-1 mr-2" for="marques_id">Marque</label>
        <select class="custom-select my-1 mr-sm-2" id="marques_id" name="marques_id">
          <option selected>Choisire...</option>
          @foreach ($marques = App\Marque::all() as $marque)
            <option value="{{ $marque->id }}">{{ $marque->name }}</option>
          @endforeach
        </select>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Ajouter</button>
  </form>
</div>
@endsection