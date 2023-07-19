@extends('layout')
@section('title', 'Create Computer')
@section('about')
            <div class="ml-4 text-center text-sm text-gray-500 sm:text-conter sm:ml-0">
                <h1>COMPUTERS</h1>
                    <div class="ml-4">
                        <h1>Edit computer</h1>
                    </div>
                    <div class="ml-4">

                        
                        <form action= "{{ route('computers.update' , ['computer' => $computer->id]) }}" method="POST" class="form" > 
                            @csrf
                            @method('PUT')
                            
                        <div>
                            <label for="computer-name">Computer Name</label>
                            <input id="computer-name" name="computer-name" value="{{ $computer->name}}" type="text" >
                            @error('computer-name')
                            <div class = "form-error">
                            {{ $message }}
                            </div>
                            @enderror
                        </div>
                                

                        <div>
                            <label for="computer-origin">Computer Origin</label>
                            <input id="computer-origin" name="computer-origin" value="{{ $computer->origin }}" type="text">
                            @error('computer-origin')
                            <div class = "form-error">
                            {{ $message }}
                            </div>
                            @enderror
                        </div>
                        

                        <div>
                            <label for="computer-price">Computer Price</label>
                            <input id="computer-price" name="computer-price"  value="{{ $computer->price }}"type="text">
                            @error('computer-price')
                            <div class = "form-error">
                            {{ $message }}
                            </div>
                            @enderror
                        </div>


                        <div> <br>
                            <button type="submit">Submit</button>
                        </div>

                        </form>
                    </div>
             </div>
@endsection


<style>
.h4{
 color:crimson;
}
</style>

<style>
    .form {
        background-color: white;
        padding: 6px;
        border: 1px solid;
        max-width: 300px;
        margin: 0 auto;

    }

    .form div {
        margin-bottom: 10px;
    }

    .form label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .form input[type="text"] {
        width: 100%;
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .form button[type="submit"] {
        padding: 10px 20px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .form button[type="submit"]:hover {
        background-color: #45a049;
    }

    .form-error{
       font-size: .8rem;
        color: red;
    }
    
</style>
