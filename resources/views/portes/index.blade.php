@extends('admin.dashboard',['titre' => 'Numéro porte'])

@section('content')
    <div class="row">
        <div class="col-lg-12 p-2 d-flex justify-content-between mt-2 mb-2 elevation-1 bg-white">
            <h3>Portes  </h3>
            <div class="btn-group" role="group">
                <a type="button" class="btn btn-info" title="Actualiser" href="#"><i class="fa fa-refresh text-white"></i></a>
                <a type="button" class="btn btn-warning" title="Export en PDF" href="#"><i class="fa fa-file-pdf-o"></i></a>
                <a type="button" class="btn btn-primary" title="Import en Excel" href="#"><i class="fa fa-file-excel-o"></i></a>
                <a type="button" class="btn btn-success" title="Créer une direction" href="{{ route('portes.ajouter') }}"><i class="fa fa-plus"></i></a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 p-2 mb-2 elevation-1 bg-white">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th class="text-left">Numéro</th>
                            <th class="text-right">Actions</th>
                        </tr>
                      <tbody>
                          @foreach($portes as $p)
                            <tr>
                                <td class="text-left">{{ $p->numero_porte }}</td>
                                <td class="text-right">
                                    <a href="{{ route('portes.modifier',['porte' => $p->id]) }}" class="btn btn-primary"><i class="nav-icon fas fa-edit"></i></a>
                                    <a href="{{ route('portes.supprimer',['porte' => $p->id]) }}" class="btn btn-danger"><i class="nav-icon fas fa-trash"></i></a>
                                </td>
                            </tr>
                          @endforeach
                      </tbody>
                </table>
            </div>
            <hr>
        </div>
    </div>

@endsection
