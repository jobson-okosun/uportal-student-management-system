 
@extends('home')

@section ('dashcontent')
    
    <div class="dash-actual-content justify-content-center">
        <div class="view-title">
            <h5 class="text-center"> Student information</h5>
        </div>
        <table class="table table-striped table-hover">
            <tr>
                <th class="transform ml">{{'Surname'}}</th>
                <td class="transform">{{$auth->surname}}</td>
            </tr>
            <tr>
                <th class="transform ml">{{' Middle Name'}}</th>
                <td class="transform">{{$auth->middlename}}</td>
            </tr>
            <tr>
                <th class="transform ml">{{'First Name'}}</th>
                <td class="transform">{{$auth->firstname}}</td>
            </tr>
            <tr>
                <th class="transform ml">{{'Department'}}</th>
                <td class="transform">{{$auth->department}}</td>
            </tr>
            <tr>
                <th class="transform ml">{{'Faculty'}}</th>
                <td class="transform">{{$auth->faculty}}</td>
            </tr>
            <tr>
                <th class="transform ml">{{'level of Study'}}</th>
                <td class="transform">{{$auth->level}}</td>
            </tr>
            <tr>
                <th class="transform ml">{{'Matriculation ID'}}</th>
                <td class="transform">{{$auth->matno}}</td>
            </tr>
           
        </table>

        <div class="view-title">
            <h5 class="text-center"> Personal information</h5>
        </div>

        <table class="table table-striped table-hover">
           
            <tr>
                <th class="transform ml">{{'Permanent Address'}}</th>
                <td class="transform">
                    @foreach($personal_record as $record)
                        {{$record->address}}
                    @endforeach
                </td>
            </tr>
            <tr>
                <th class="transform ml">{{'Phone lines'}}</th>
                <td class="transform">
                    @foreach($personal_record as $record)
                        {{$record->phone}}
                    @endforeach
                </td>
            </tr>
           <tr>
                <th class="transform ml">{{'Religion'}}</th>
                <td class="transform">
                    @foreach($personal_record as $record)
                        {{$record->religion}}
                    @endforeach
                </td>
            </tr>
                <tr>
                <th class="transform ml">{{'marital status'}}</th>
                <td class="transform">
                    @foreach($personal_record as $record)
                        {{$record->maritalstatus}}
                    @endforeach
                </td>
            </tr>
            
            <tr>
                <th class="transform ml">{{'next Of Kin'}}</th>
                <td class="transform">
                    @foreach($personal_record as $record)
                        {{$record->nextofKin}}
                    @endforeach
                </td>
            </tr>
        </table>
        
        
    </div >

    
@endsection