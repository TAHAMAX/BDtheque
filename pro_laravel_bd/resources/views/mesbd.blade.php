<!-- add to  index.blade.php -->
@extends('template')
<!--add section mesbd.slide to index.blade.php-->
@section('title')
    Page Mes Bd
@endsection
<!--section page name   -->
@section('showPageName')
    Mes Bd
@endsection
@section('MesBd') 
        <!--  data from the ControllerAvis function GetAvis and the model  Avis -->
  @foreach ($Table_bd as $Table_bd)
      <div class="col-md-4" >
          <div class="">
            <img class="card-img-top" src="{{ $Table_bd->table_BD_Img }}" alt="Card image cap">
            <div class="card-body   text-center">
              <p class="card-text quote-text">
                  <!--  print table_BD_Editeur from the table Table_bd   -->
                  Editeur : {{ $Table_bd->table_BD_Editeur }} 
              </p>
              <p class="card-text quote-text">
                  <!--  print table_BD_Isbn from the table Table_bd   -->
                  ISBN : {{ $Table_bd->table_BD_Isbn }} 
              </p>
              <!--  get id and send to http bd/id !!!!   -->
              <a href="/onebd/{{$Table_bd->table_BD_Id}}">
                  Read more
              </a>
            </div>
          </div>
      </div>
  @endforeach 
  
@endsection('MesBd')