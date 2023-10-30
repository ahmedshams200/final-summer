@extends('layouts.app')

@section('styles')
    <style>
      #outer{
        width: auto;
        text-align: center
      }
      .inner
      {
        display: inline-block;
      }
    </style>
@endsection


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    
                  <a class="btn btn-sm btn-success " href="{{route('todos.crate')}}"   >create new to do</a>
                   
                    <table class="table">
                      <thead>
                        <tr>
                          <th >TITLE</th>
                          <th >Description</th>
                          <th >completed</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                   
                       
                        @foreach ( $todos as $todo)
                        <tr>
                          <td>{{$todo->title}}</td>
                          <td>{{$todo->des}}</td>
                          <td>
                            @if ($todo->is_done==1)
                            <a class="btn btn-sm btn-success " href="">completed</a>
                                
                            @else
                            <a class="btn btn-sm btn-danger" href=""> in completed</a>  
                            @endif
                          </td>
                          <td id="outer">
                            <a class="inner btn btn-sm btn-success " href="{{route('todos.show' , $todo->id)}}">show</a>
                            <a class="inner btn btn-sm btn-success " href="{{route('todos.edit' , $todo->id)}}">edit</a>
                            <form method="POST" action="{{route('todos.delete')}}" class="inner">
                              @csrf
                              @method('DELETE')
                              <input type="hidden" name="todo_id" value="{{$todo->id}}">
                              <input type="submit" class="btn btn-sm btn-danger" value="delete">

                            </form>
                          
                          </td>
                        </tr>
                            
                        @endforeach
                       
                      </tbody>
                    </table>
                        
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
