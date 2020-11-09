@extends('layouts.app')

@section('content')
<div class="container"style="marginTop:50px">
  <form action="{{ url('productUpdate',$product->id) }}" method="post" enctype="multipart/form-data">
    <input type="hidden" name="_method" value="PUT">
    {{ csrf_field() }}
    <div class="form-row">
      <div class="col" >
        <label for="name">Nom du produit</label>
        <input value="{{ $product->name }}" type="text" class="form-control" id="name" name="name">
      </div>
      <div class="col" >
        <label for="price">Prix du produit</label>
        <input value="{{ $product->price }}" type="text" class="form-control" id="price" name="price">
      </div>
    </div>
    <div class="form-group">
      <label for="description">Example textarea</label>
      <textarea class="form-control" id="description" name="description" rows="3">{{ $product->description }}</textarea>
    </div>
    <img height="100px" src="{{ asset($product->image) }}">
    <img height="100px" src="{{ asset($product->image_one) }}">
    <img height="100px" src="{{ asset($product->image_two) }}">
    <img height="100px" src="{{ asset($product->image_three) }}">
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
            <option value="{{ $categorie->id }}" @if($product->categories_id==$categorie->id) selected @endif>{{ $categorie->name }}</option>
          @endforeach
        </select>
      </div>
      <div class="col">
        <label class="my-1 mr-2" for="marques_id">Marque</label>
        <select class="custom-select my-1 mr-sm-2" id="marques_id" name="marques_id">
          <option selected>Choisire...</option>
          @foreach ($marques = App\Marque::all() as $marque)
            <option value="{{ $marque->id }}" @if($product->marques_id==$marque->id) selected @endif>{{ $marque->name }}</option>
          @endforeach
        </select>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Modifier</button>
  </form>
</div>
@endsection