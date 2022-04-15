@extends('layouts.admin')

@section('agentcontent')
<section class="section bg-white p-3">
    <h3 class="text-dark">Agents</h3>
    <table id="dealsTable" class="table table-striped">
        <thead>

            <tr>
                <th>#</th>
                <th>Property Name</th>
                <th>Buyer's Name</th>
                <th>Buyer's Phone</th>
                <th>Buyer's Email</th>
                <th>Amount</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($deals as $deal)
            <tr>
                <td>{{$deal->deal_id}}</td>
                <td>{{$deal->property->caption}}</td>
                <td>{{$deal->buyer->firstname}} {{$deal->buyer->lastname}}</td>
                <td>{{$deal->buyer->telephone}}</td>
                <td>{{$deal->buyer->email}}</td>
                <td>{{$deal->price}}</td>
                <td>{{$deal->created_at}}</td>
                <td><a href="#" class="btn btn-outline-primary">Detail</a></td>
            </tr>
            @endforeach
        </tbody>
        </table>
</section>
@endsection('agentcontent')
