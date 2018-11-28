<!-- add to  index.blade.php -->
@extends('template')
<!-- section img_full_page  to bd.blade.php--> 
@section('title')
   Page ONE BD
@endsection
<!--section page name   -->
@section('showPageName')
 ONE BD
@endsection

@section('OneBd') <!--page get data from the user--> 
<div class="row ">        
    <div class="">
        <img class="card-img-top col-md-4 " src="{{ $OneBd->table_BD_Img }}"  >
    </div>
    <div class="row">
        <div class="col-md-4">
            <p><p class=" ">Editeur : {{ $OneBd->table_BD_Editeur }} </p></p>
            <p><p class=" ">ISBN : {{ $OneBd->table_BD_Isbn }} </p></p>
            <p><p class=" ">ISBN : {{ $OneBd->table_BD_Isbn }} </p></p>
        </div>
        <form  method="post" >
            @csrf   {{-- // importan to validate the request  --}}
            <div class="col-md-4">
                <input name="Reviews" type="Reviews" placeholder="Reviews"  >
                <button  name="submit"  class="btn btn-info" type="submit">Add Reviews</button>  
            </div>
        </form> 
        <div class="col-md-4">
            <a name="collection" class="btn btn-primary" type="submit">Add to my collection</a>
        </div>
        <div class="col-md-4">
            <a name="Wishlist" class="btn btn-info" type="submit">Add to my Wishlist</a>
        </div>    
        <div class="col-md-4">
            <div class="btn btn-info ">
            <span name="Like" class="glyphicon glyphicon-heart" type="submit"></span>Like {{ $id}}
            </div>
        </div>    
    </div>
    </div>
</div>
 @endsection('OneBd')





