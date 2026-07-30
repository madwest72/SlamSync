<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listeEquipes=Team::all();
        return view('equipe.listeAll', ['listeEquipes' => $listeEquipes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function syncApi()
    {
        $response = Http::withHeaders([
            'x-apisports-key' => config('services.api_basket.key')
        ])->get(config('services.api_basket.url') . 'teams');

        if ($response->successful()) {
            $data = $response->json();
            $listeEquipes = $data['response'] ?? [];

            foreach ($listeEquipes as $equipe) {

     
                if ($equipe['nbaFranchise'] === true) {

                    Team::updateOrCreate(
                        ['api_id' => $equipe['id']],
                        [
                            'name'       => $equipe['name'],
                            'logo'       => $equipe['logo'],
                            'conference' => $equipe['leagues']['standard']['conference'] ?? null
                        ]
                    );
                }
            }
        }
        return "L'importation des équipes est terminée !";
    }
}