@extends("layouts.real")

@section('realcontent')
    <div class="pos-high" style="background: url(/storage/{{$propertyp->image}});">

    <div class="ownitload" id="ownitloader">
        <div class="ownitloader-cont">
            <div class="ownitloader"></div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="mx-auto col-md-4 bg-white p-3">
                <img src="/storage/{{$propertyp->image}}"  class="img-fluid rounded shadow-sm img-thumbnail" alt="" >
                <h4 class="mt-3 ">{{$propertyp->caption}}</h4>
                <small><strong> Lagos, Nigeria</strong></small> <br />
                <button class="my-2 w-100 btn bg-none btn-lg fw-bold">N {{ number_format($propertyp->price, 2 )}}</button>
                <img src="/assets/images/paystack-payment.png" class="w-100 " alt="">
                <center>
                        <input hidden id="amount" type="text" value="{{$propertyp->price * 100}}">
                        <input hidden id="productactive" type="text" value="{{$propertyp->id}}">
                        <input hidden id="email" type="text" value="{{ auth()->user()->email}}">
                        <button id="payNow" type="submit" class="btn p-2 my-2 px-4">Pay now</button>
                </center> 
            </div>
        </div>
        </div>
    </div>
@endsection('realcontent')