@extends('admin.dashboard',['titre' => 'Facture J.I.R.A.M.A'])

@section('content')
    <div class="row">
        <div class="col-lg-12 p-2 d-flex justify-content-between mt-2 mb-2 elevation-1 bg-white">
            <h3>J.I.R.A.M.A  </h3>
            <div class="btn-group" role="group">
                <a type="button" class="btn btn-info" title="Actualiser" href="#"><i class="fa fa-refresh text-white"></i></a>
                <a type="button" class="btn btn-warning" title="Export en PDF" href="#"><i class="fa fa-file-pdf-o"></i></a>
                <a type="button" class="btn btn-primary" title="Import en Excel" href="#"><i class="fa fa-file-excel-o"></i></a>
            </div>
        </div>
    </div>
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <?php $t = 0; ?>
            @foreach($mois as $mois_facture)
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$t}}" class="{{ $t == 0 ? 'active' : ''}}" aria-current="true" aria-label="Slide {{$t+1}}"></button>
                <?php $t++ ?>
            @endforeach
        </div>
        <div class="carousel-inner">
            <?php $t = 0; ?>
            @foreach($mois as $mois_facture)
                <div class="carousel-item {{ $t == 0 ? 'active':''}}">
                    <div class="row">
                        <div class="col-lg-12 p-2 mb-2 elevation-1 bg-white">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th colspan="10" class="text-center">{{ $mois_facture->mois }}</th>
                                        </tr>
                                        <tr>
                                            <th colspan="2">Ancien Index</th>
                                            <th colspan="2">Nouvel Index</th>
                                            <th colspan="3">Consommation Total</th>
                                            <th colspan="3">Consommation restant dans le compteur</th>
                                        </tr>
                                        <tr>
                                            <td colspan="2">{{ $mois_facture->ancien_index }}</td>
                                            <td colspan="2">{{ $mois_facture->nouvel_index }}</td>
                                            <td colspan="3">{{ $mois_facture->nouvel_index - $mois_facture->ancien_index }}</td>
                                            <td colspan="3">{{ $restant[$t] }}</td>
                                        </tr>
                                        <tr>
                                            <th class="text-center">N° Porte</th>
                                            <th class="text-center">Ancien</th>
                                            <th class="text-center">Récent</th>
                                            <th class="text-center">Consommé</th>
                                            <th class="text-center">Tranche</th>
                                            <th class="text-center">Tarif</th>
                                            <th class="text-center">Compteur</th>
                                            <th class="text-center">Tarif en Ar</th>
                                            <th class="text-center">Tarif en Fmg</th>
                                            <th class="text-center">Etat</th>
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
                                                <td>{{ round($consomme[$t] )}}</td>
                                                <td>{{ round( (($i->nouvel_consommation - $i->dernier_consommation) * ( $tranche[$t]) ) +  $consomme[$t]) }}</td>
                                                <td>{{ round( ((($i->nouvel_consommation - $i->dernier_consommation) * ( $tranche[$t]) ) +  $consomme[$t])*5 )}}</td>
                                                <td>
                                                    @if($i->status == 1)
                                                    <a href=""  class="btn btn-success ml-1 mr-1 disabled"><i class="fa fa-toggle-on"></i></a>
                                                @else
                                                    <a href=""  class="btn btn-secondary ml-1 disabled"><i class="fa fa-toggle-off"></i></a>
                                                @endif
                                                </td>
                                            </tr>
                                            @endif
                                        @endforeach
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
                    <?php $t++ ?>
                </div>
            @endforeach
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
@endsection
