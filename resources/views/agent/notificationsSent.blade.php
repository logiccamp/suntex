@extends('layouts.agent')

@section('agentcontent')
<section class="section bg-white p-3">
    <h3 class="text-dark">Messages</h3>
    <agent-messagesent :id="{{auth()->user()->id}}"></agent-messagesent>
    
</section>
@endsection('agentcontent')
