@extends('admin.dashboard',['titre' => 'Modifier une index du facture J.I.R.A.M.A'])

@section('content')
    <div class="row">
        <div class="mx-auto col-lg-6 col-md-6 mt-2 pt-4 pl-4 pr-4 elevation-1 bg-white">
            <h3 class="text-muted text-center">Modifier un index</h3>
            <div class="line mb-4"><span></span></div>
            <hr>
            <form action="/TrouvezDernierIndexConsommer_edit" method="POST">
                @csrf
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label for="numero_porte" class="control-label sr-only">Numéro Porte</label>
                                <select name="numero_porte" class="form-control dernier_index_consommer rounded-0" id="numero_porte">
                                    @foreach($portes as $p)
                                           <option value="{{ $p->id }}" {{ ( ($num_porte != null) ? ( $num_porte == $p->id ? 'selected' : '' ) : ( ( ($index->portes_id ?? null) == $p->id ? 'selected':'') ) ) }}>{{ $p->numero_porte }}</option>
                                        @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label for="moisID" class="control-label sr-only">Mois</label>
                                <select name="moisID" class="form-control rounded-0" id="moisID">
                                    <option value="" disabled></option>
                                    @foreach($moisall as $m)
                                           <option value="{{ $m->id }}" {{ ( ($_mois != null ) ? ( $_mois == $m->id ? 'selected' : '' ) : ( ( ($index->mois_factures_id ?? null ) == $m->id ? 'selected':'') ) ) }}>{{ $m->mois }}</option>
                                        @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-primary rounded-0 ml-1">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                    </div>
            </form>
            <hr>
            <form action="{{ route('index.chargement',['index' => $index->id]) }}" method="POST">
            @csrf
            <input type="hidden" name="index" id="index" value="{{ $index->id }}">
            <div class="form-group">
                <label for="numero_porte" class="control-label sr-only">Numéro Porte</label>
                <select name="numero_porte" class="form-control dernier_index_consommer rounded-0" id="numero_porte">
                    @foreach($portes as $p)
                           <option value="{{ $p->id }}" {{ ( ($num_porte != null) ? ( $num_porte == $p->id ? 'selected' : '' ) : ( ( ($index->portes_id ?? null) == $p->id ? 'selected':'') ) ) }}>{{ $p->numero_porte }}</option>
                        @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="moisID" class="control-label sr-only">Mois</label>
                <select name="moisID" class="form-control rounded-0" id="moisID">
                    <option value="" disabled></option>
                    @foreach($moisall as $m)
                        <option value="{{ $m->id }}" {{ ( ($_mois != null ) ? ( $_mois == $m->id ? 'selected' : '' ) : ( ( ($index->mois_factures_id ?? null ) == $m->id ? 'selected':'') ) ) }}>{{ $m->mois }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="dernier_consommation" class="control-label sr-only">Dernière consommation</label>
                <input type="text" autofocus autocomplete="off"  value="{{ old('dernier_consommation') ?? (($laste_index_consommer != null) ? $laste_index_consommer : ($index->dernier_consommation ?? 0) ) }}" name="dernier_consommation" id="dernier_consommation" class="form-control rounded-0 @error('dernier_consommation') is-invalid @enderror" placeholder="Dernière consommation">
                @error('dernier_consommation')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="nouvel_consommation" class="control-label sr-only">Nouveau consommation</label>
                <input type="text" autofocus autocomplete="off"  value="{{ old('nouvel_consommation') ?? (($first_index_consommer != null ) ? $first_index_consommer : ($index->nouvel_consommation ?? 0) ) }}" name="nouvel_consommation" id="nouvel_consommation" class="form-control rounded-0 @error('nouvel_consommation') is-invalid @enderror" placeholder="Nouveau consommation">
                @error('nouvel_consommation')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="tranche" class="control-label sr-only">Tranche</label>
                <input type="text" autofocus autocomplete="off"  value="{{ old('tranche') ?? $tranche }}" name="tranche" id="tranche" class="form-control rounded-0 @error('tranche') is-invalid @enderror" placeholder="Tranche">
                @error('tranche')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        <hr>

        <div class="form-group d-flex justify-content-end">
            <input type="submit" value="Modifier" class="btn btn-primary rounded-0"  type="button">
            <a type="button" class="btn btn-danger ml-1 rounded-0" data-dismiss="modal" href="{{ route('index.index') }}" aria-label="Close">Annuler</a>
        </div>
            </form>
        </div>
    </div>
@endsection
