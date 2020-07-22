@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">User</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <img src="url(auth()->user()->Roles" width="200" height="300" alt="{{auth()->user()->name}}">
                <p><h3> Name: {{auth()->user()->name}}  </h3></p>
                <p> <h3> Email: {{auth()->user()->email}}  </h3> </p>
                <p> <h3> Birthday: {{auth()->user()->birthday}} </h3> </p>
                <p> <h3> Phone: {{auth()->user()->Phone}} </h3> </p>
                <p> <h3> GitHub: <a href="{{url(auth()->user()->GitHub)}}">{{auth()->user()->GitHub}}</a> </h3> </p>
                <p> <button type="submit" class="btn btn-primary">
                                    <a href="{{Route('Edit')}}" type="submit" class="btn btn-primary">Edit</a>
                                </button> </p>
                </div>
                 
            </div>
        </div>
    </div>
</div>
@endsection