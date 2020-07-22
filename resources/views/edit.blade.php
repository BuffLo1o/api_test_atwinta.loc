@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Date</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h3> Name: <input id="name" type="name"></label></h3>
                    
                    <h3> Email: <input id="Email" type="Email"></label></h3>
                    
                    <h3> GitHub: <input id="GitHub" type="GitHub"></label></h3>
                    
                    <h3> Birthday: <input id="Birthday" type="Bubirtday"></label></h3>
                    
                    <h3> Phone: +7 <input id="Phone" type="Phone"></label></h3>
                    
                    <button type="submit" class="btn btn-primary">
                    <a href="{{Route('subEdit')}}" type="submit" class="btn btn-primary">Enter</a>
                </button> 

                </div>
                 
            </div>
        </div>
    </div>
</div>
@endsection