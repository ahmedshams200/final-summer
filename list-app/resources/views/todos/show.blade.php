@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                          <div class="card">
                            <div class="card-body">
                              <h2 class="card-title">task title</h2>
                              <h5 class="cardtitle">{{$todos->title}}</h5>
                             
                              
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="card">
                            <div class="card-body">
                              <h2 class="card-des" >task Description</h2>
                              <h5 class="carddes">{{$todos->des}}</h5>
                             
                            </div>
                            
                          </div>
                          
                        </div>
                      </div>
                      
                        </div>
                        <a class="btn btn-primary  " href="{{route('todos.edit' , $todos->id)}}">edit</a>
                        <a class=" btn btn-sm btn-success   " href="{{route('todos.index' )}}">back to index</a>
                      </div>
                     
                </div>
               
            </div>
        </div>
    </div>
</div>
@endsection
