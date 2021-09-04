<?php

namespace App\Http\Controllers;

use App\Models\Forfait;
use Illuminate\Http\Request;
use App\Models\Message;

class ForfaitController extends Controller
{
    
    public function allForfaits(){
        $forfaits  = Forfait::all();

        return view('admin.forfaits.allForfaits',compact('forfaits'));
    }

    public function AjouterForfait(){

        return view('admin.forfaits.ajouterForfaits');
    }

    public function AjouterforfaitfromPost(Request $request){
        $forfait = new Forfait();
        $forfait->nom = $request->nom;
        $forfait->prix = $request->prix;
        $forfait->option1 = $request->option1 != null ? $request->option1 : "";
        $forfait->option2 = $request->option2 != null ? $request->option2 : "";
        $forfait->option3 = $request->option3 != null ? $request->option3 : "";
        $forfait->option4 = $request->option4 != null ? $request->option4 : "";
        $forfait->option5 = $request->option5 != null ? $request->option5 : "";
        $forfait->save();
        
        
        return redirect('/allForfaits')->with('message', 'Forfait Ajouter Avec Succes');
        
    }
  
    public function ModifierForfait($id){

        $forfaits  = Forfait::find($id);

        return view('admin.forfaits.modifieforfait',compact('forfaits'));
      }


      public function ModifierForfaitfromPost(Request $request){

        $forfait  = Forfait::find($request->id);
        $forfait->nom = $request->nom;
        $forfait->prix = $request->prix;
        $forfait->option1 = $request->option1 != null ? $request->option1 : "";
        $forfait->option2 = $request->option2 != null ? $request->option2 : "";
        $forfait->option3 = $request->option3 != null ? $request->option3 : "";
        $forfait->option4 = $request->option4 != null ? $request->option4 : "";
        $forfait->option5 = $request->option5 != null ? $request->option5 : "";
        $forfait->save();

       return redirect('allForfaits')->with('message', 'Forfait Modifier Avec Succes');
      }
      

      public function deletforfait($id){
 
        Forfait::where('id', $id)->delete();
  
        return redirect('/allForfaits')->with('message', 'Forfait supprimer Avec Succes');  
      }

      
      public function Showmessages ()
      {

        $messages = Message::all();

        return view('admin.Showmessages',compact('messages'));
        
      }

      public function SupprimerMessage ($id)
      {

    Message::where('id', $id)->delete();

    return redirect('/showmessages')->with('message', 'Message supprimer Avec Succes'); 
        
      }
      
    
}
