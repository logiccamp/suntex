@extends('layouts.admin')

@section('agentcontent')
<section >
    <h3 class="text-dark">Outbox</h3>
    <div class="card p-2">
        <agent-messagesent :id="6"></agent-messagesent>
    </div>
</section>
@endsection('agentcontent')
