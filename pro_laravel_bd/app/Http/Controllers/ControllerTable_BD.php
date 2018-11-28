<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Table_BD; //  name of of model
use App\Avis; //  name of of model
use DB;    //data base
class ControllerTable_BD extends Controller
{
    //function to get data from the table Table_BD 
    public function GetBd()
    {
       //select data from the table Table_BD
       $Table_bd=Table_BD::all();
      // send data "Table_bd" to the page home.blade.php
       return view('mesbd', compact('Table_bd'));
    }


    //function to get data from the table Table_BD by id 
    public function GetOneBd($id)
    {
      // select from the table Table_BD by id
      $OneBd = Table_BD::where('table_BD_Id',$id)->first();
       // send data "OneBd" to the page bd.blade.php
      return view('onebd', compact('OneBd','id'));
    }

    
   
}
