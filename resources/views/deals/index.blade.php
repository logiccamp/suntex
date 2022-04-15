@extends("layouts.real")

@section('realcontent')

    <section>
        <div style="height: 20vh" ></div>
        <br>
        <div class="container">
            <h3 class="h3">My Deals</h3>
            <div class="row">
                @foreach ($deals as $deal)
                <div class="col-lg-3">
                    <div class="card">
                        <div class="body p-3">
                            <img class="img-thumbnail img-fluid" src="/storage/{{$deal->property->image}}" alt="img">
                            <h6 class="text-success mt-3">N{{$deal->property->price}}</h6>
                            <h5 class="mt-0"><a href="#" class="col-blue-grey">{{$deal->property->caption}}</a></h5>
                            <small class="text-muted"><i class="zmdi zmdi-pin mr-2">{{ substr($deal->property->address, 0, 20)}}...</i></small>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection('realcontent')