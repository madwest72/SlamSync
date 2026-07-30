@extends('header')

@section('title', 'Liste des equipes -SlamSync')

@section('content')


<!-- Un conteneur pour aligner toutes les cartes proprement -->
<div class="flex flex-wrap gap-4 justify-center p-4">

    @foreach($listeEquipes as $equipe)
        <div class="card bg-base-100 w-96 shadow-sm">
            <figure class="px-10 pt-10">

                <img src="{{ $equipe->logo }}" class="rounded-xl object-contain h-32 w-32" alt="Logo {{ $equipe->name }}"onerror="this.onerror=null; this.src='https://cdn.nba.com/logos/leagues/logo-nba.svg';"/>
            </figure>
            
            <div class="card-body items-center text-center">
                <h2 class="card-title">{{ $equipe->name }}</h2>
                <p>Conférence : {{ $equipe->conference }}</p>
                <div class="card-actions">
                    <button class="btn btn-primary">Détails</button>
                </div>
            </div>
        </div>
    @endforeach

</div>






























@endsection