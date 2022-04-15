@extends('layouts.agent')

@section('agentcontent')
<section class="card p-3">
    <h3 class="text-dark">Add Contact</h3>

    <form class="form my-4" method="POST" action="{{ route('addcontact') }}">
        @csrf
        <div class="row gy-3">
            <div class="col-md-6 my-2">
                <input id="name" type="text" placeholder="Fullname" class="form-control @error('Name') is-invalid @enderror" name="Name" value="{{ old('Name') }}" required autofocus>
                @error('Name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="col-md-6 my-2">
                <input id="Mobile" type="text" placeholder="Telephone" class="form-control @error('Mobile') is-invalid @enderror" name="Mobile" value="{{ old('Mobile') }}" required autofocus>
                @error('Mobile')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            
            <div class="col-md-6 my-2">
                <input id="Email" type="email" placeholder="Email address" class="form-control @error('Email') is-invalid @enderror" name="Email" value="{{ old('Email') }}" required autofocus>
                @error('Email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-6 my-2">
                <input id="Occupation" type="text" placeholder="Occupation" class="form-control @error('Occupation') is-invalid @enderror" name="Occupation" value="{{ old('Occupation') }}" required autofocus>
                @error('Occupation')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="col-12 my-2">
                <textarea id="Address" placeholder="Address" class="form-control @error('Address') is-invalid @enderror" name="Address" value="{{ old('Address') }}" style="height: 20vh !important;" required autofocus></textarea>
                @error('Address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>


            <div class="col-12 text-center">
                <button class="btn filled-button" >ADD</button>
            </div>
        </div>
    </form>


</section>
@endsection('agentcontent')
