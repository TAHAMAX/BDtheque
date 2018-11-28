<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Avis; // name of of model
use App\Table_BD; // name of of model
use DB;    //data base
class ControllerAvis extends Controller
{
    //function to get mes collections from the table avis  
    public function GetCollections()
    {
       //select data from the table Avis
       $collections=Avis::all();
       // send data "collections" to the page mescollections.blade.php
       return view('mescollections', 
        [
            'collections' => $collections
        ]);
    }
    //function to get mes avis from the table avis  
    public function  GetAvis()
    {
       //select data from the table Avis
       $avis=Avis::all();
       // send data "avis" to the page mesavis.blade.php
       return view('mesavis', 
        [
            'avis' => $avis
        ]);
    }
    //function to get mes envies from the table avis  
    public function  GetEnvies()
    {
       //select data from the table Avis
       $envies=Avis::all();
       // send data "avis" to the page mesenvies.blade.php
       return view('mesenvies', 
        [
            'envies' => $envies
        ]);
    }
    ///function INSERT   Reviews TO the table avis  
    public function insertavis(Request $r)
    {        
              $Avis = new Avis;
              $Avis->avis_Avis =$r->input('Reviews');
              $Avis->save(); 
    }

}
