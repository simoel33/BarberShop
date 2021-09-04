<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function allCollections()
    {
        $collections  = Collection::all();

        return view('admin.collection.allcollection', compact('collections'));
    }


    public function AjouterCollection()
    {
        return view('admin.collection.AjouterCollection');
    }


    public function AjouterCollectionfromPost(Request $request)
    {
        $collection = new Collection();
        $collection->nom = $request->nom;
        $collection->prix = $request->prix;
        $collection->option1 = $request->option1 != null ? $request->option1 : "";
        $collection->option2 = $request->option2 != null ? $request->option2 : "";
        $collection->option3 = $request->option3 != null ? $request->option3 : "";
        $collection->option4 = $request->option4 != null ? $request->option4 : "";
        $collection->option5 = $request->option5 != null ? $request->option5 : "";
        $collection->save();


        return redirect('/allCollections')->with('message', 'Forfait Ajouter Avec Succes');
    }

    public function modifiercollection($id)
    {

        $collections  = Collection::find($id);

        return view('admin.collection.modifiercollection', compact('collections'));
    }

    public function ModifierCollectiontfromPost(Request $request)
    {

        $forfait  = Collection::find($request->id);
        $forfait->nom = $request->nom;
        $forfait->prix = $request->prix;
        $forfait->option1 = $request->option1 != null ? $request->option1 : "";
        $forfait->option2 = $request->option2 != null ? $request->option2 : "";
        $forfait->option3 = $request->option3 != null ? $request->option3 : "";
        $forfait->option4 = $request->option4 != null ? $request->option4 : "";
        $forfait->option5 = $request->option5 != null ? $request->option5 : "";
        $forfait->save();

        return redirect('/allCollections')->with('message', 'Forfait Modifier Avec Succes');
    }





    public function supprimercollection($id)
    {

        Collection::where('id', $id)->delete();

        return redirect('/allCollections')->with('message', 'Forfait supprimer Avec Succes');
    }
}
