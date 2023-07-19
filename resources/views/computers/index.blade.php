@extends('layout')
@section('title', 'COMPUTERS')
@section('about')
                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-conter sm:ml-0">
                       <h1>COMPUTERS</h1>
                        <h2>THIS IS COMPUTERS APGE</h2>
                        <div class="ml-4">
                        @if (count($computers) >0 )
                        <ul>     
                        @foreach ($computers as $computer )
                              
                            <a href = "{{ route('computers.show' , ['computer' => $computer['id']] )}}" >   
                              <li> {{ $computer['name']}}  ( {{ $computer['origin'] }} ) </li>
                            </a>
                        @endforeach
                        </ul>
                        @else 
                        <p> There are no COMPUTERS to display</p>
                        @endif
                            </div>
                    </div>
@endsection

<style>
a:hover{
    text-decoration:underline ;    
}
li{
    list-style-type: none;
    border: 1px solide;
    borderborder-radius: 5px;
    background: antiquewhite;
    paddign: 10px;
    margin:5px;
}
li:hover{
    background:silver; 
}
</style>