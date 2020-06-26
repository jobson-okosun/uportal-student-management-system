@extends('home')

@section ('dashcontent')

  <div class="dash-actual-content justify-content-center">
        <div class="view-title">
            <h3 class="text-center"> {{' Create student Record'}}</h3>
        </div>
        <br>
        <div class="row">
            <div class="col-md-8 mx-auto">
                <form action = "{{route('createdata')}}" method ="POSt">
                    @csrf
                    <div class="form-group">
                        <label for="address">Permanent Address:</label>
                        <textarea class="form-control" rows="2" id="address" value = "{{old('address')}}" name ="address"></textarea>
                    </div>

                    <div class="form-group">
                            <label for="religion">religion:</label>
                            <select name ="religion" class="custom-select">
                                <option value="Christianity">Christianity</option>
                                <option value="Muslim">Muslim</option>
                                <option value="Others">Others</option>
                            </select>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone numbers:</label>
                        <textarea class="form-control" rows="1" id="phone" name="phone"></textarea>
                    </div>
                    <div class="form-group">
                            <label for="maritalstatus">Marital Status:</label>
                            <select name ="maritalstatus" class="custom-select">
                                <option value="Married">Married</option>
                                <option value="Engaged">Engaged</option>
                                <option value="Single">Single</option>
                                <option value="Others">Others not specified</option>
                            </select>
                    </div>

                    <div class="form-group">
                        <label for="nextofkin">Next of kin:</label>
                        <textarea class="form-control" rows="1" id="nextofkin" name="nextofkin"></textarea>
                    </div>

                    <button class="mt-3 btn btn-primary">Save changes</button> 


                </form>
            </div>
        </div>
        
  </div>

@endsection