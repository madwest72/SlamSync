<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;

class GameController extends Controller
{
    public function index()
    {
        $listegames = Game::with(['homeTeam', 'awayTeam'])->paginate(25);
        return view('game.listeAllgame', compact('listegames'));
    }
    public function syncApiGame()
    {
        
        $response = Http::withHeaders([
            'x-apisports-key' => config('services.api_basket.key')
        ])->get(config('services.api_basket.url') . 'games', [
            'season' => '2024' 
        ]);

        if ($response->successful()) {
            $data = $response->json();
            $listegames = $data['response'] ?? [];


            foreach ($listegames as $game) {
                $homeTeam = \App\Models\Team::where('api_id', $game['teams']['home']['id'])->first();
                $awayTeam = \App\Models\Team::where('api_id', $game['teams']['visitors']['id'])->first();
                if (!$homeTeam || !$awayTeam) {
                    continue; 
                }
                Game::updateOrCreate(
                    ['api_id' => $game['id']],
                    [
                        'hometeam_id' => $homeTeam->id, 
                        'awayteam_id' => $awayTeam->id,
                        'start_date'  => \Carbon\Carbon::parse($game['date']['start'])->format('Y-m-d H:i:s'),
                        'homescore'   => $game['scores']['home']['points'],
                        'awayscore'   => $game['scores']['visitors']['points'],
                        'status'      => $game['status']['long'],
                    ]
                );
            }
        }

        return "L'importation des matchs est terminée !";
    }
}