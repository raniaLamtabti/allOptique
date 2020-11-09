@extends('layouts.app')

@section('content')
<div class="container"style="marginTop:50px">
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Modifier</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($categories as $categorie)
            <tr>
                <td>{{ $categorie->id  }}</td>
                <td>{{ $categorie->name  }}</td>
                <td>
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal3{{$categorie->id}}"><i class="fas fa-edit"></i></button>
                    <div class="modal fade" id="myModal3{{$categorie->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header text-center">
                                    <h4 class="modal-title">Modifier le nom du categorie</h4>
                                </div>
                                <form action="{{ url('categorieUpdate',$categorie->id)}}" method="post" class="form-horizontal">
                                    <input type="hidden" name="_method" value="PUT">
                                    {{ csrf_field() }}
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label class="control-label">Nom</label>
                                            <input type="text" class="form-control" name="name" value="{{$categorie->name}}">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light"
                                            data-dismiss="modal">Fermer</button>
                                        <button type="submit" class="btn btn-success">Modifier</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Modifier</th>
            </tr>
        </tfoot>
    </table>
</div>
@endsection