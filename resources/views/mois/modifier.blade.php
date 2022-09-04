@extends('admin.dashboard',['titre' => 'Modifier le mois du Facture J.I.R.A.M.A'])

@section('content')
    <div class="row">
        <div class="mx-auto col-lg-6 col-md-6 mt-2 pt-4 pl-4 pr-4 elevation-1 bg-white">
            <h3 class="text-muted text-center">Modifier le mois</h3>
            <div class="line mb-4"><span></span></div>
            <form action="{{ route('mois.chargement',['mois' => $mois->id]) }}" method="POST">
                @csrf
                @include('mois.form',['submitButtonText' => 'Modifier'])
            </form>
        </div>
    </div>
@endsection
