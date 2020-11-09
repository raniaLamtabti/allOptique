@extends('layouts.app')

@section('content')
<div class="container"style="marginTop:50px">
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Image Pricipale</th>
                <th>Image Un</th>
                <th>Image Deux</th>
                <th>Image trois</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Categorie</th>
                <th>Marque</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->id  }}</td>
                <td><img height="100px" src="{{ asset($product->image) }}"></td>
                <td><img height="100px" src="{{ asset($product->image_one) }}"></td>
                <td><img height="100px" src="{{ asset($product->image_two) }}"></td>
                <td><img height="100px" src="{{ asset($product->image_three) }}"></td>
                <td>{{ $product->name  }}</td>
                <td>{{ $product->description  }}</td>
                <td>{{ App\Categorie::find($product->categories_id)->name  }}</td>
                <td><img height="100px" src="{{ asset( App\Marque::find($product->marques_id)->image) }}"></td>
                <td>
                    <a href="{{ url('editProduct/'.$product->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                    <form action="{{ url('productDestroy/'.$product->id) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Id</th>
                <th>Image Pricipale</th>
                <th>Image Un</th>
                <th>Image Deux</th>
                <th>Image trois</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Categorie</th>
                <th>Marque</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
</div>
@endsection