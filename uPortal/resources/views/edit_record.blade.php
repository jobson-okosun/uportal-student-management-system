@extends('home')

@section ('dashcontent')

  <div class="dash-actual-content">
        <div class="view-title">
            <h3 class="text-center"> {{' Edit student Record'}}</h3>
        </div>
        <br>
        <div class="row">
            <div class="col-md-8 mx-auto">
                <form action = "{{route('createdata','mydata')}}" method ="POST">
                    @csrf
                    <div class="form-group">
                        <label for="address">Permanent Address:</label>
                        <textarea class="form-control" rows="2" id="address"
                            placeholder ="@foreach($personal_record as $record)
                                {{$record->address}}
                                @endforeach"
                                 name ="address"
                        ></textarea>
                    </div>
                    
                    <div class="form-group">
                            <label for="religion">religion:</label>
                            <select name ="religion" class="custom-select">
                                <option value="" disabled selected>
                                @foreach($personal_record as $record)
                                {{$record->religion}}
                                @endforeach
                                </option>
                                <option value="Christianity">Christianity</option>
                                <option value="Muslim">Muslim</option>
                                <option value="Others">Others</option>
                            </select>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone numbers:</label>
                        <textarea class="form-control" rows="2" id="phone"
                            placeholder ="@foreach($personal_record as $record)
                                {{$record->phone}}
                                @endforeach"
                         name="phone"></textarea>
                    </div>
                    <div class="form-group">
                            <label for="maritalstatus">Marital Status:</label>
                            <select name ="maritalstatus" class="custom-select">
                                <option value="" disabled selected>
                                @foreach($personal_record as $record)
                                {{$record->maritalstatus}}
                                @endforeach
                                </option>
                                <option value="Married">Married</option>
                                <option value="Engaged">Engaged</option>
                                <option value="Single">Single</option>
                                <option value="Others">Others not specified</option>
                            </select>
                    </div>

                    <div class="form-group">
                        <label for="nextofkin">Next of kin:</label>
                        <textarea class="form-control" rows="2" id="nextofkin"
                             placeholder ="@foreach($personal_record as $record)
                                {{$record->nextofKin}}
                                @endforeach"name="nextofkin">
                        </textarea>
                    </div>

                    <button class="mt-3 btn btn-primary">Save changes</button> 


                </form>
            </div>
        </div>
        
  </div>

@endsection