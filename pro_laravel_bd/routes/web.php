<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/onebd', function () {return view('onebd');});

//route for the page home
Route::get('/home', function () {return view('home');});
//route for the page mesbd
// Route::get('/mesbd', function () {return view('mesbd');});
//route for the page mescollections
//Route::get('/mescollections', function () {return view('mescollections');});
//route for the page mesavis
Route::get('/mesavis', function () {return view('mesavis');}); 
//route for the page mesenvies
Route::get('/mesenvies', function () {return view('mesenvies');});



  //route to the page bd  from the function GetOneBd in the ControllerTable_BD
Route::get('/onebd/{id}', 'ControllerTable_BD@GetOneBd');
 
//route to the page mesbd  from the function GetBd in the ControllerTable_BD
 Route::get('/mesbd', 'ControllerTable_BD@GetBd');




 //route to the page mescollections  from the function GetCollections 
 Route::get('/mescollections', 'ControllerAvis@GetCollections');
 //route to the page mesavis  from the function GetAvis 
 Route::get('/mesavis', 'ControllerAvis@GetAvis');


  //route to the page mesenvies  from the function GetEnvies 
 Route::get('/mesenvies', 'ControllerAvis@GetEnvies');
 


   //route to the page onebd  from the function insertavis 
 Route::post('/onebd', 'ControllerAvis@insertavis');
 
