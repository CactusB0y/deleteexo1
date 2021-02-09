<?php

namespace App\Http\Controllers;

use App\Models\Membre;
use Illuminate\Http\Request;

class MembreController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $store = new Membre;
        $store->nom = $request->nom;
        $store->age = $request->age;
        $store->genre = $request->genre;
        $store->save();
        return redirect()->back();
    }

    public function destroy($id)
    {
        $destroy = Membre::find($id);
        $destroy->delete();
        return redirect()->back();
    }
}
