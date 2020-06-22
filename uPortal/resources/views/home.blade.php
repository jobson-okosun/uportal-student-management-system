@extends('layouts.app')

@section('content')
<div id="container">
    @include ('header')
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-md-3 dash-bg">
                <div class="card border-0">
                    <div class="card-body">
                    <img src="{{asset('images/avater.png')}}" class="mx-auto d-block" alt="Profile Image" width="130px" height ="130px">
                    
                        <h3 class="font-weight-bold text-center mt-3 mb-0">{{ $auth->surname}}, {{ Auth::user()->middlename}} {{ Auth::user()->firstname}}</h3>
                        <p class="text-center">{{'Mat No: '}} {{Auth::user()->matno}}</p>


                        <div class="alert alert-success">{{'You are log in'}}</div>
                    </div>
                </div>

                <div class="list-group list-group-flush">
                    <a href="{{route('mydata', 'mydata')}}" class="list-group-item list-group-item-action">
                        <i class="fas fa-user-graduate"></i>  
                         &nbsp;&nbsp;{{__('  My Data')}}
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <i class="fas fa-award"></i>
                         &nbsp;&nbsp;{{__('  Grades')}}
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <i class="fas fa-file-download"></i>
                        &nbsp;&nbsp;{{__('  Download Document')}}
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <i class="fas fa-sign-out-alt"></i>
                        &nbsp;&nbsp;{{__('  Logout')}}
                    </a>
                </div>

            </div>

            <div class="col-md-9 dash-bg dash-content">
                <div class="dash-content-backlink-border">
                    <span>
                        <a href ="{{route('home')}} backlink-item">HOME</a> \
                        <a href ="{{''}} backlink-item">STUDENTS</a> \
                        <a href ="{{route('home')}} backlink-item">{{Auth::user()->matno}}</a>   
                    </span>
                </div>

                @yield('dashcontent')

            </div>
        </div>
    </div>
</div>
@endsection
