<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;


class ServiceController extends Controller
{
    


    public function AddService(){

        return view('admin.addService');
    }


    

    public function allServies(){

      $services  = Service::all();

      return view('admin.allservices',compact('services'));
  }

    public function AjouterService(){

      return view('admin.AjouterService');
    }

    public function AjouterServicefromPost(Request $request){


      $service = new Service();
      $service->nom = $request->nom;
        $service->prix = $request->prix;
        $service->option1 = $request->option1 != null ? $request->option1 : "";
        $service->option2 = $request->option2 != null ? $request->option2 : "";
        $service->option3 = $request->option3 != null ? $request->option3 : "";
        $service->option4 = $request->option4 != null ? $request->option4 : "";
        $service->option5 = $request->option5 != null ? $request->option5 : "";
        $service->save();

      return redirect('/allServies')->with('message', 'Service Ajouter Avec Succes');

    }


    public function ModifierService($id){

      $services  = Service::find($id);
      return view('admin.modifierservice',compact('services'));
    }

    public function ModifierServicefromPost(Request $request){

      $services  = Service::find($request->id);
      $services->nom = $request->nom;
      $services->prix = $request->prix;
      $services->option1 = $request->option1 != null ? $request->option1 : "";
      $services->option2 = $request->option2 != null ? $request->option2 : "";
      $services->option3 = $request->option3 != null ? $request->option3 : "";
      $services->option4 = $request->option4 != null ? $request->option4 : "";
      $services->option5 = $request->option5 != null ? $request->option5 : "";
      $services->save();

      return redirect('/allServies')->with('message', 'Service Modifier Avec Succes');
    }
    
    public function deleteata($id){
 
      Service::where('id', $id)->delete();

      return redirect('/allServies')->with('message', 'Service supprimer Avec Succes');

    }
   
}
