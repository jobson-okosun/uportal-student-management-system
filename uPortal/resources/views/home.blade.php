@extends('layouts.app')

@section('content')
<div id="container">
    @include ('header')
    <div class="container-fluid row-bg ">
        <div class="row">
            <div class="col-md-3 mt-3 profile">
                <div class="dash-shadow mb-0">
                    <div class="card border-0">
                        <div class="card-body home-card-body">
                            <img src="{{asset('images/avater.png')}}" class="mx-auto d-block" alt="Profile Image" width="130px" height ="130px">
                        
                            <h4 class="font-weight-bold text-center mt-3 mb-0">{{ $auth->surname}}, {{ Auth::user()->middlename}} {{ Auth::user()->firstname}}</h4>
                            <p class="text-center">{{'Mat No: '}} {{Auth::user()->matno}}</p>
               
                        </div>
                    </div>
                
                    <div class="alert alert-success mb-0">{{'you logged in'}}</div>

                    <button class="btn responsive-info" data-toggle="collapse"  data-target="#info">
                        <i class="fas fa-bars"></i>
                       &nbsp;&nbsp; {{'Information'}}
                    </button>    

                    <div class="list-group list-group-flush" id ="info">
                        <a href="{{route('home')}}" id ="item-1"  class="list-group-item list-group-item-action"  onclick='document.getElementById("item-1").classList.add("list-active")'>
                            <i class="fas fa-user-graduate"></i>  
                            &nbsp;&nbsp;{{__('  My Data')}}
                        </a>
                        <a href="#" class="list-group-item list-group-item-action" > 
                        
                            <i class="fas fa-award"></i>
                            &nbsp;&nbsp;{{__('  Grades')}}
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <i class="fas fa-file-download"></i>
                            &nbsp;&nbsp;{{__('  Download Document')}}
                        </a>
                        
                        <a href ="{{route('editdetails')}}"class="list-group-item           list-group-item-action">
                            <i class="fas fa-file-download"></i>
                            &nbsp;&nbsp;{{__('  Edit information')}}
                        </a>
        
                        <a href="#" class="list-group-item list-group-item-action">
                            <i class="fas fa-sign-out-alt"></i>
                            &nbsp;&nbsp;{{__('  Logout')}}
                        </a>
                    </div>
                </div>
                

            </div>

            <div class="col-md-7 dash-bg dash-content mt-3">
                <div class="dash-content-backlink-border">
                    <span>
                        <a href ="{{route('home')}}" class=" backlink-item">HOME</a> \
                        <a href ="{{''}}" class=" backlink-item">STUDENTS</a> \
                        <a href ="{{route('home')}}"class=" backlink-item">{{Auth::user()->matno}}</a>   
                    </span>
                </div>

                @yield('dashcontent')

            </div>

            <div class="col-md-2 more ">
                <div class="more-content ">

                    <div class="list-group list-group-flush dash-shadow ">
                    <a href="{{route('home')}}" class="list-group-item list-group-item-action list-active">
                        <i class="fas fa-user-graduate"></i>  
                         &nbsp;&nbsp;{{__('  Configurations')}}
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <i class="fas fa-award"></i>
                         &nbsp;&nbsp;{{__('  Panel control')}}
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <i class="fas fa-file-download"></i>
                        &nbsp;&nbsp;{{__('  School Profile')}}
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <i class="fas fa-sign-out-alt"></i>
                        &nbsp;&nbsp;{{__('  Staff profile')}}
                    </a>
                    
                    <a href="{{route('home')}}" class="list-group-item list-group-item-action">
                        <i class="fas fa-user-graduate"></i>  
                         &nbsp;&nbsp;{{__('  Student profile')}}
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <i class="fas fa-award"></i>
                         &nbsp;&nbsp;{{__('  School fees')}}
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <i class="fas fa-file-download"></i>
                        &nbsp;&nbsp;{{__('  Admission')}}
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <i class="fas fa-sign-out-alt"></i>
                        &nbsp;&nbsp;{{__('  School map')}}
                    </a>

                    <a href="#" class="list-group-item list-group-item-action">
                        <i class="fas fa-sign-out-alt"></i>
                        &nbsp;&nbsp;{{__('  Library')}}
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <i class="fas fa-file-download"></i>
                        &nbsp;&nbsp;{{__('  Department')}}
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <i class="fas fa-sign-out-alt"></i>
                        &nbsp;&nbsp;{{__('  All courses')}}
                    </a>

                    <a href="#" class="list-group-item list-group-item-action">
                        <i class="fas fa-sign-out-alt"></i>
                        &nbsp;&nbsp;{{__('  Payment history')}}
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <i class="fas fa-sign-out-alt"></i>
                        &nbsp;&nbsp;{{__('  Course registration')}}
                    </a>
              
                </div>

            </div>
            </div>
        </div> 

        
            
    </div>
    <div class ="footer-wrap">
            @include('footer')
    </div>
</div>



@endsection
