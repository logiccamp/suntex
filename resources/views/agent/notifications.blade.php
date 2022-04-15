@extends('layouts.agent')

@section('agentcontent')
<section class="section bg-white p-3">
    <h3 class="text-dark">Messages</h3>
    <messages-agent :id="{{auth()->user()->id}}"></messages-agent>
    
</section>
@endsection('agentcontent')
