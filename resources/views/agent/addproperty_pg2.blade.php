@extends('layouts.agent')

@section('agentcontent')
<section class="section">
          <div class="row">
            <div class="container-fluid">
              <div class="block-header">
                  <h3 class="my-3">{{ $property->caption }}</h3>
              </div>
              <form action="{{ route('addproperty2') }}" method="POST">
                  @csrf
                <div class="row clearfix">
                    <ul class="text-danger">
                        @foreach ($errors->all() as $error)
                        <li >{{$error}}</li>
                        @endforeach
                    </ul>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        
                        <div class="card p-3 rounded">
                            <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <h5 class="card-inside-title">Additional Information</h5>
                                    <div class="demo-radio-button my-4">
                                        <input name="tag" type="radio" id="radio_1" checked="" class="radio-col-light-blue" value="For Rent">
                                        <label for="radio_1">For Rent</label>
                                        <input name="tag" type="radio" id="radio_2" class="radio-col-light-blue" value="For Sale">
                                        <input name="property_id" type="text" hidden="true" id="propertyid" value="{{ $property->property_id }}">
                                        <label for="radio_2">For Sale</label>
                                    </div>
                                </div>

                                <div class="col-md-6 my-2 mt-3">
                                    <div class="demo-radio-button">
                                        <label for="radio_1">Select Type</label>
                                        <select name="type" id="propertytype" class="form-control form-select">
                                            <option value="">Select</option>
                                            <option value="Apartment">Apartment</option>
                                            <option value="Office">Office</option>
                                            <option value="Land">Land</option>
                                            <option value="House">House</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="col-md-6 my-2 mt-3">
                                    <div class="demo-radio-button">
                                        <div class="form-line">
                                            <label class="form-label">Price / Rent per Year</label>
                                            <input type="number" placeholder="Price" name="price" id="pricetag" class="form-control">
                                            <span id="priceSpan" class="text-danger"></span>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>

                            
                            <div class="row">
                                <div class="col-md-4 my-2 mt-3">
                                    <div class="demo-radio-button">
                                        <div class="form-line">
                                            <label class="form-label">State</label>
                                            <select class="form-control form-select" id="state" name="state">
                                                <option value="" selected="selected">- Select -</option>
                                                <option value="Abuja FCT">Abuja FCT</option>
                                                <option value="Abia">Abia</option>
                                                <option value="Adamawa">Adamawa</option>
                                                <option value="Akwa Ibom">Akwa Ibom</option>
                                                <option value="Anambra">Anambra</option>
                                                <option value="Bauchi">Bauchi</option>
                                                <option value="Bayelsa">Bayelsa</option>
                                                <option value="Benue">Benue</option>
                                                <option value="Borno">Borno</option>
                                                <option value="Cross River">Cross River</option>
                                                <option value="Delta">Delta</option>
                                                <option value="Ebonyi">Ebonyi</option>
                                                <option value="Edo">Edo</option>
                                                <option value="Ekiti">Ekiti</option>
                                                <option value="Enugu">Enugu</option>
                                                <option value="Gombe">Gombe</option>
                                                <option value="Imo">Imo</option>
                                                <option value="Jigawa">Jigawa</option>
                                                <option value="Kaduna">Kaduna</option>
                                                <option value="Kano">Kano</option>
                                                <option value="Katsina">Katsina</option>
                                                <option value="Kebbi">Kebbi</option>
                                                <option value="Kogi">Kogi</option>
                                                <option value="Kwara">Kwara</option>
                                                <option value="Lagos">Lagos</option>
                                                <option value="Nassarawa">Nassarawa</option>
                                                <option value="Niger">Niger</option>
                                                <option value="Ogun">Ogun</option>
                                                <option value="Ondo">Ondo</option>
                                                <option value="Osun">Osun</option>
                                                <option value="Oyo">Oyo</option>
                                                <option value="Plateau">Plateau</option>
                                                <option value="Rivers">Rivers</option>
                                                <option value="Sokoto">Sokoto</option>
                                                <option value="Taraba">Taraba</option>
                                                <option value="Yobe">Yobe</option>
                                                <option value="Zamfara">Zamfara</option>
                                                <option value="Outside Nigeria">Outside Nigeria</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 my-2 mt-3">
                                    <div class="demo-radio-button">
                                        <div class="form-line">
                                            <label class="form-label">City</label>
                                            <input type="text" class="form-control" name="city">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 my-2 mt-3">
                                    <div class="demo-radio-button">
                                        <div class="form-line">
                                            <label class="form-label">Country</label>
                                            <input disabled type="text" class="form-control form-select" value="Nigeria">
                                            <input type="text" class="form-control form-select" name="country" value="Nigeria" hidden="true">
                                        </div>
                                    </div>
                                </div>

                                <!-- <div class="col-md-3 col-sm-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control">
                                            <label class="form-label">Car Parking</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control">
                                            <label class="form-label">Year Built</label>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- <div class="col-sm-12">
                                    <hr>
                                    <h2 class="card-inside-title">Dimensions</h2>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control">
                                            <label class="form-label">Dining Room</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control">
                                            <label class="form-label">Kitchen</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control">
                                            <label class="form-label">Living Room</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control">
                                            <label class="form-label">Master Bedroom</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control">
                                            <label class="form-label">Bedroom 2</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control">
                                            <label class="form-label">Other Room</label>
                                        </div>
                                    </div>
                                </div>
                                 -->
                            </div>

                            <div class="row clearfix my-4">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-raised g-bg-blue">Submit</button>
                                    <button type="reset" class="btn btn-raised">Cancel</button>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>  
              </form>
            </div>
          </div>
        </section>
@endsection('agentcontent')