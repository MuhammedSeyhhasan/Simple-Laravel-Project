<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;
use Symfony\Component\Console\Descriptor\Descriptor;


 class ComputersController extends Controller
{
    
/*
private static function getdata()
{
    return [
        ['id' => 1, 'name' => 'LG', 'origin'=> 'Koria' ],
        ['id' => 2, 'name' => 'HP', 'origin'=> 'USA' ],
        ['id' => 3, 'name' => 'LONOVA', 'origin'=> 'France' ]
    ];
}
*/

    public function index()
    {
        return view('computers.index',[
        'computers' => computer::all()
     ]);  
    }

    
    
    public function create()
    {
        return view('computers.create');
    }



    
    public function store(Request $request)
    {
        $request->validate([
             'computer-name' => 'required'  ,
             'computer-origin' => 'required' ,  
             'computer-price' => ['required', 'integer' ]   
        ]);


        $computer =  new Computer();
        $computer->name = strip_tags ($request->input('computer-name')) ; 
        $computer->origin = strip_tags ($request->input('computer-origin')) ;
        $computer->price = strip_tags ($request->input('computer-price')) ;

        $computer->save();
        return redirect()->route('computers.index');
        

    }




    public function show($computer)
    {
      
        return view('computers.show', 
        [
             'computer' => computer::findorFail($computer)
        ]);   
    }



    public function edit($computer)
    {
        return view('computers\edit', 
        [
            'computer' => computer::findorfail($computer)
        ]);
        
    }



    public function update(Request $request, $computer)
    {
        $request->validate([ 
            'computer-name' => 'required'  ,
            'computer-origin' => 'required' ,  
            'computer-price' => ['required', 'integer' ]   
       ]);
          $to_update = Computer::findorfail($computer);
          $to_update->name = strip_tags ($request->input('computer-name')) ; 
          $to_update->origin = strip_tags ($request->input('computer-origin')) ;
          $to_update->price = strip_tags ($request->input('computer-price')) ;

          $to_update->save();
          return redirect()->route('computers.show' , $computer);        
    }

    


    public function destroy($computer)
    {
        $to_delete = Computer::findorfail($computer);
        $to_delete->delete();
        return redirect()->route('computers.index');
    }
}
