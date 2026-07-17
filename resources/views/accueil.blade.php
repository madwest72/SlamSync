@extends("header")

@section('title', "Accueil")

@section('content')

<div class="hero bg-base-200 min-h-screen">
  <div class="hero-content text-center">
    <div class="max-w-md">
      <h1 class="text-5xl font-bold">SlamSync</h1>
      
      <p class="py-6">
        Gérez vos équipes, suivez les résultats des matchs en temps réel et prouvez que vous êtes le meilleur avec vos pronostics. Rejoignez l'arène.
      </p>
      

      <div class="flex justify-center gap-4">
          <a href="{{ route('SignUp') }}" class="btn btn-primary">Inscription</a>
          
          <a href="{{ route('SignIn') }}" class="btn btn-outline btn-primary">Se connecter</a>
      </div>

    </div>
  </div>
</div>

@endsection