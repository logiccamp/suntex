@extends('layouts.admin')

@section('agentcontent')
<section class="section">
    <h3 class="text-dark">Messages</h3>
    <div class="card p-3">
        <messages-agent :id="6"></messages-agent>
    </div>
</section>
@endsection('agentcontent')
