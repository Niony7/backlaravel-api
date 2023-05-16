<?php

namespace App\Http\Controllers;
use App\Visiteur;
use Illuminate\Http\Request;



class VisiteurController extends Controller
{
    public function index()
    {
          $visiteurs = Visiteur::all();
         return response()->json($visiteurs);
        // return response()->json('tay eee');
    
    }

    public function store(Request $request)
    {
        Visiteur::create([
            'nom' =>$request->nom,
            'NbJours' =>$request->NbJours,
            'NumVisiteur'=>$request->NumVisiteur,
            'TarifJournalier'=>$request->TarifJournalier,
           ]);
        //    livewire solony validator
    }

    public function show($id)
    {
        $visiteur = Visiteur::find($id);
        return response()->json($visiteur);
    }

    public function update(Request $request, $id)
    {
        $visiteur = Visiteur::find($id);
        $visiteur->nom = $request->nom;
        $visiteur->NbJours = $request->NbJours;
        $visiteur->TarifJournalier = $request->TarifJournalier;
        $visiteur->save();

        return response()->json($visiteur);
    }
    public function destroy($id)
    {
        $visiteur = Visiteur::find($id);
        $visiteur->delete();

        return response()->json('Visiteur supprimé avec succès');
    }
    
}
