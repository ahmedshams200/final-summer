@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">TO DO LIST</div>

                <div class="card-body">
                    
                    <form method="POST " action="{{route('todos.store')}}">
                     @csrf
                        <div class="mb-3">
                          <label  class="form-label">TITLE</label>
                          <input type="text" name = "title" class="form-control" >
                     
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Description</label>
                        <textarea name="Description" class="form-control" cols="5" rows="5">

                        </textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
