@extends('admin.dashboard',['titre' => 'Modifier numéro porte'])

@section('content')
    <div class="row">
        <div class="mx-auto col-lg-6 col-md-6 mt-2 pt-4 pl-4 pr-4 elevation-1 bg-white">
            <h3 class="text-muted text-center">Numéro porte</h3>
            <div class="line mb-4"><span></span></div>
            <form action="{{ route('portes.chargement',['porte' => $porte->id]) }}" method="POST">
                @csrf
                @include('portes.form',['submitButtonText' => 'Modifier'])
            </form>
        </div>
    </div>
@endsection
