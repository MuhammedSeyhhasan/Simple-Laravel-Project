@extends('layout')
@section('title', 'Show COMPUTERS')
@section('about')
            <div class="ml-4 text-center text-sm text-gray-500 sm:text-conter sm:ml-0">
                <h1>COMPUTERS</h1>
                <h2>THIS IS COMPUTERS APGE</h2>
                    <div class="ml-4">
                        <h4 class= "h4" >more info about this computer</h4>
                        <h3>
                             {{ $computer['name'] }} is from  ( {{ $computer['origin'] }} ) - <strong> {{ $computer['price'] }} $ </strong>
                        </h3> 
                    </div>

                    <a href = " {{ route('computers.edit' , $computer->id ) }}" >Edit Info </a>

                    <form action="{{ route('computers.destroy' , $computer->id ) }}" method="POST">
                      @csrf
                      @method('DELETE')
                    <input class= "delete" type="submit" value="delete">
    
                    </form>
            </div>
@endsection


<style>
.h4{
 color:crimson;
}
a:hover{
    text-decoration:underline ;    
}

.delete{
color:red;
}
</style>