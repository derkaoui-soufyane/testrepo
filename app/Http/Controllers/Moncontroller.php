<?php

namespace App\Http\Controllers;

use App\Models\Voiture;
use Illuminate\Http\Request;

class Moncontroller extends Controller
{
    public function index(){
        $voiture = Voiture::all();
        return view("index", ["table" => $voiture]);
    }

    public function store(Request $request){
        $table = $request->validate([
            "nom" => "required",
            "prenom" => "required",
        ]);

        Voiture::create($table);
        return redirect("/");
    }
}
