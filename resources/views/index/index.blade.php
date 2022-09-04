@extends('admin.dashboard',['titre' => 'Index du facture J.I.R.A.M.A'])

@section('content')
    <div class="row">
        <div class="col-lg-12 p-2 d-flex justify-content-between mt-2 mb-2 elevation-1 bg-white">
            <h3>J.I.R.A.M.A  </h3>
            <div class="btn-group" role="group">
                <a type="button" class="btn btn-info" title="Actualiser" href="#"><i class="fa fa-refresh text-white"></i></a>
                <a type="button" class="btn btn-warning" title="Export en PDF" href="#"><i class="fa fa-file-pdf-o"></i></a>
                <a type="button" class="btn btn-primary" title="Import en Excel" href="#"><i class="fa fa-file-excel-o"></i></a>
                <a type="button" class="btn btn-success" title="Créer une direction" href="{{ route('index.ajouter') }}"><i class="fa fa-plus"></i></a>
            </div>
        </div>
    </div>

    <?php $t = 0; ?>
    @foreach($mois as $mois_facture)
    <div class="row">
        <div class="col-lg-12 p-2 mb-2 elevation-1 bg-white">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th colspan="10">{{ $mois_facture->mois }}</th>
                        </tr>
                        <tr>
                            <th class="text-center">N° Porte</th>
                            <th class="text-center">Ancien</th>
                            <th class="text-center">Recent</th>
                            <th class="text-center">Consommé</th>
                            <th class="text-center">Tranche</th>
                            <th class="text-center">Tarif</th>
                            <th class="text-center">Compteur</th>
                            <th class="text-center">Tarif</th>
                            <th class="text-center">Prix en FMG</th>
                            <th class="text-center">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($index as $i)
                            @if($i->mois_factures_id == $mois_facture->id)
                            <tr>
                                <td>{{ $i->portes_id }}</td>
                                <td>{{ $i->dernier_consommation }}</td>
                                <td>{{ $i->nouvel_consommation }}</td>
                                <td>{{ ($i->nouvel_consommation - $i->dernier_consommation) }}</td>
                                <td>{{ $tranche[$t] }}</td>
                                <td>{{ ($i->nouvel_consommation - $i->dernier_consommation) * ( $tranche[$t])  }}</td>
                                <td>{{ round($consomme[$t]) }}</td>
                                <td>{{ round( (($i->nouvel_consommation - $i->dernier_consommation) * ( $tranche[$t] ) ) +  $consomme[$t] ) }}</td>
                                <td>{{ round((($i->nouvel_consommation - $i->dernier_consommation) * ( $tranche[$t] ) ) +  $consomme[$t])*5 }}</td>
                                <td>
                                    @if($i->status == 1)
                                        <a href="{{ route('index.payer',['index' => $i->id ]) }}" class="btn btn-success ml-1 mr-1"><i class="fa fa-toggle-on"></i></a>
                                    @else
                                        <a href="{{ route('index.payer',['index' => $i->id ]) }}" class="btn btn-secondary ml-1"><i class="fa fa-toggle-off"></i></a>
                                    @endif
                                    <a href="{{ route('index.modifier',['index' => $i->id ]) }}" class="btn btn-primary"><span class="fa fa-edit"></span></a>
                                    <a href="{{ route('index.supprimer',['index' => $i->id ]) }}" id="delete" class="btn btn-danger ml-1" ><i class="nav-icon fas fa-trash"></i></a>
                                </td>
                            </span>
                            </tr>
                            @endif
                        @endforeach
                      </tbody>
                      <tfoot>
                          <th colspan="3">TOTAL</th>
                          <th class="text-center">{{ $som[$t] }}</th>
                          <th class="text-center">{{ $tranche[$t] }}</th>
                          <th class="text-center">{{ $som[$t] * $tranche[$t] }}</th>
                          <th class="text-center">{{ $consommer[$t] }}</th>
                          <th class="text-center">{{  ($som[$t] * $tranche[$t]) + $consommer[$t] }}</th>
                          <th class="text-center">{{ (($som[$t] * $tranche[$t]) + $consommer[$t])*5 }}</th>
                      </tfoot>
                </table>
            </div>
            <hr>
        </div>
    </div>

    <script>
        $(document).on("click", "#delete", function(e){
        e.preventDefault();
        var link = $(this).attr("href");
        bootbox.confirm("Voulez-vous vraiment supprimer cet élément ?", function(confirmed){
          if (confirmed){
              window.location.href = link;
            };
          });
        });
      </script>
      <!-- page script -->
      <script>
        $(function () {
          $("#example1").DataTable({
            "responsive": true,
            "autoWidth": false,
          });
          $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
          });
        });
      </script>

    <?php $t++ ?>
    @endforeach
@endsection

