@extends('template')

@section('title')
	Page Mes Avis
@endsection


<!--section page name   -->
@section('showPageName')
	Mes Avis
@endsection




 
@section('MesAvis')
   @foreach ($avis as $a)
		@if (!empty($a->avis_Avis))
			<div  class="row  s ">
				<div class=" md-2">
					<img class="card-img-top text-center " src="{{ $a->bd->table_BD_Img }}" alt="Card image cap">
				</div>
 				<div class="col-md-4">
						<h3>Serie : {{ $a->bd->table_BD_Serie }} </h3> 
				</div>
				<div class="col-md-4">
						<h3>Editeur : {{ $a->bd->table_BD_Editeur  }}</h3>
						<h3>Avis : {{ $a->avis_Avis }}</h3>  
				</div>
	 
			</div> 
		@endif 
  @endforeach 
 @endsection('MesAvis')