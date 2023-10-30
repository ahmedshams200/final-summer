@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">TO DO LIST</div>

                <div class="card-body">
                    <h3>EDIT</h3>
                    <form method="POST" action="{{route('todos.update')}}">
                      @csrf
                      @method('put')
                      <input type="hidden" name="todo_id" value=" {{$todos->id}}">
                        <div class="mb-3">
                          <label  class="form-label">TITLE</label>
                          <input type="text" name = "title" class="form-control" value=" {{$todos->title}}">
                     
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Description</label>
                        <textarea name="Description" class="form-control" cols="5" rows="5">
                          {{$todos->des}}
                        </textarea>
                        </div>
                        <div class="mb-3"> 
                          <label for="">status</label>
                          <select name="is_done" class="form-control">
                            <option disabled selected>select </option>
                            <option value="1">completed</option>
                            <option value="0">in completed</option>
                            
                          </select>
                        </div>
                        <button type="submit" class="btn btn-primary">UPDATE</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
