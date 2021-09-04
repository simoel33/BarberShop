<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Forfait;
use App\Models\Service;
use App\Models\Message;
use App\Models\Collection;

class FrontController extends Controller
{

    public function allServies()
    {

        // $services  = Service::all();
        $services  = Service::orderByDesc('prix')->get();
        $forfaits = Forfait::all();
        $collections = Collection::all();
        return view('tarifs', compact('services', 'forfaits', 'collections'));
    }

    public function tarif()
    {

        return redirect('/nostarifs');
    }


    public function Mesage(Request $request)
    {

        $validated = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);
        $message = new Message();
        $message->nom = $request->nom;
        $message->prenom = $request->prenom;
        $message->phone = $request->phone;
        $message->email = $request->email;
        $message->message = $request->message;
        $message->save();
        return redirect('/')->with('message', 'Votre Message a bien Envoyer');
    }
}
