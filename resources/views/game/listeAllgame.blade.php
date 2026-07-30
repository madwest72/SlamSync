@extends('header')

@section('title', 'Liste des matchs -SlamSync')

@section('content')


<div class="overflow-x-auto">
  <table class="table">
    <thead>
      <tr>
        <th>
          <label>
            <input type="checkbox" class="checkbox" />
          </label>
        </th>
        <th>Équipe Domicile</th>
        <th class="text-center">Score</th>
        <th>Équipe Extérieure</th>
        <th>Action</th>
      </tr>
    </thead>
    
    <tbody>
      @foreach ($listegames as $game)
      <tr>
        <th>
          <label>
            <input type="checkbox" class="checkbox" />
          </label>
        </th>
        
        <td>
          <div class="flex items-center gap-3">
            <div class="avatar">
                <div class="mask mask-squircle h-12 w-12 bg-white p-1">
                    <img
                    src="{{ $game->homeTeam?->logo }}"
                    alt="Logo {{ $game->homeTeam?->name ?? 'Inconnue' }}" 
                    onerror="this.onerror=null; this.src='https://cdn.nba.com/logos/leagues/logo-nba.svg';" />
                </div>
                </div>
                <div>
         
                <div class="font-bold">{{ $game->homeTeam?->name ?? 'Équipe Inconnue' }}</div>
                <div class="text-sm opacity-50">Conférence {{ $game->homeTeam?->conference ?? 'N/A' }}</div>
            </div>
          </div>
        </td>
        

        <td class="text-center"> 
          <div class="font-bold text-lg">{{ $game->homescore }} - {{ $game->awayscore }}</div>
          <span class="badge badge-ghost badge-sm mt-1">{{ $game->status }}</span>
        </td>
        
  
        <td>
          <div class="flex items-center gap-3">
            <div class="avatar">
                <div class="mask mask-squircle h-12 w-12 bg-white p-1">
                        <img
                        src="{{ $game->awayTeam?->logo }}"
                        alt="Logo {{ $game->awayTeam?->name ?? 'Inconnue' }}" 
                        onerror="this.onerror=null; this.src='https://cdn.nba.com/logos/leagues/logo-nba.svg';" />
                    </div>
                    </div>
                    <div>
                    <div class="font-bold">{{ $game->awayTeam?->name ?? 'Équipe Inconnue' }}</div>
                    <div class="text-sm opacity-50">Conférence {{ $game->awayTeam?->conference ?? 'N/A' }}</div>
                </div>
          </div>
        </td>

        <th>
          <button class="btn btn-ghost btn-xs">Détails</button>
        </th>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

<div class="mt-6 p-4 flex justify-center">
    {{ $listegames->links() }}
</div>

@endsection

