@extends('admin.dashboard',['titre' => 'Facture J.I.R.A.M.A'])

@section('content')
    <div class="row">
        <div class="col-lg-12 p-2 d-flex justify-content-between mt-2 mb-2 elevation-1 bg-white">
            <h3>J.I.R.A.M.A  </h3>
            <div class="btn-group" role="group">
                <a type="button" class="btn btn-info" title="Actualiser" href="#"><i class="fa fa-refresh text-white"></i></a>
                <a type="button" class="btn btn-warning" title="Export en PDF" href="#"><i class="fa fa-file-pdf-o"></i></a>
                <a type="button" class="btn btn-primary" title="Import en Excel" href="#"><i class="fa fa-file-excel-o"></i></a>
                <a type="button" class="btn btn-success" title="Créer une direction" href="{{ route('mois.ajouter') }}"><i class="fa fa-plus"></i></a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 p-2 mb-2 elevation-1 bg-white">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Mois</th>
                            <th>Ancien Index</th>
                            <th>Nouvel Index</th>
                            <th>Consommation Total</th>
                            <th>Actions</th>
                        </tr>
                      <tbody>
                          @foreach($mois as $m)
                            <tr>
                                <td>{{ $m->date_index }}</td>
                                <td>{{ $m->mois }}</td>
                                <td>{{ $m->ancien_index }}</td>
                                <td>{{ $m->nouvel_index }}</td>
                                <td>{{ ($m->nouvel_index - $m->ancien_index ) }}</td>
                                <td>
                                    <a href="{{ route('mois.modifier',['mois' => $m->id]) }}" class="btn btn-primary"><i class="nav-icon fas fa-edit"></i></a>
                                    <a href="{{ route('mois.supprimer',['mois' => $m->id]) }}" class="btn btn-danger"><i class="nav-icon fas fa-trash"></i></a>
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
