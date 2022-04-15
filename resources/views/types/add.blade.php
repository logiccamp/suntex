@extends('layouts.admin')

@section('agentcontent')
<section class="section">
<div class="">
    <h3>ADD TYPE</h3>

    <div class="my-3">
        <form action="{{ route('managetypes.create') }}" class="form" method="POST">
            @csrf

            <div class="form-group my-2">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>

            <div class="form-group my-2">
                <button class="btn badge badge-secondary px-3">Add</button>
            </div>

        </form>

    </div>

</section>
@endsection('agentcontent')