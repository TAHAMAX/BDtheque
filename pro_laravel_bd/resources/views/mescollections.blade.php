@extends('template')

@section('title')
	Page Mes Collections
@endsection

<!--section page name   -->
@section('showPageName')
	Mes Collections
@endsection

@section('MesCollections')
   @foreach ($collections as $a)
		@if ($a->avis_Collection == 1)
			<div  class="row text-center ">
			<div class=" md-2">
				<img class="card-img-top text-center " src="{{ $a->bd->table_BD_Img }}" alt="Card image cap">
			</div>
			<div class="col-md-4">
 				<h3>Serie : {{ $a->bd->table_BD_Serie }} </h3> 
			</div>
			<div class="col-md-4">
 				<h3>Editeur : {{ $a->bd->table_BD_Editeur  }}</h3> 
 			</div>
			</div> 
		@endif 
  @endforeach 
  
@endsection('MesCollections')