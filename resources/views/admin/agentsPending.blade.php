@extends('layouts.admin')

@section('agentcontent')
<div class="page_header">
    <h3 class="text-dark">Agents - Pending</h3>
</div>
<section class="section">
    <div class="card p-3">
        <div class="table-responsive">
            <table class="table table-striped" id="agentsTable">
                <thead>
                <tr>
                <th>Agent Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>City</th>
                <th>Deals</th>
                <th>Status</th>
                <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($agents as $agent)
                <tr>
                    
                    <td>{{ $agent->firstname }} {{ $agent->lastname }}</td>
                    <td>{{ $agent->email }}</td>
                    <td>{{ $agent->agentprofile->ext }}{{ $agent->agentprofile->tel }}</td>
                    <td>{{ $agent->agentprofile->state }}</td>
                    <td>{{ $agent->AgentDeals->count() }}</td>
                    <td>
                        @if ($agent->agent_status == 'verified')
                        <span class="text-uppercase badge badge-success">{{ $agent->agent_status }}</span>
                        @elseif ($agent->agent_status == 'blocked')
                        <span class="text-uppercase badge badge-danger">{{ $agent->agent_status }}</span>
                        @else
                        <span class="text-uppercase badge badge-warning">{{ $agent->agent_status }}</span>
                        @endif
                    </td>
                    <td><a href="/management/agent/{{$agent->id}}" class="btn btn-success">View</a></td>
                </tr>
                @endforeach
                </tbody>
                <!-- <tr>
                    <td class="p-0 text-center">
                        <div class="custom-checkbox custom-control">
                        <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                            id="checkbox-1">
                        <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                        </div>
                    </td>
                    <td>House at Banana Island</td>

                    <td>27, Bola Street, Eko Lagos</td>
                    <td>Lagos</td>
                    <td>Nigeria</td>
                    <td>2019-05-28</td>
                    <td>
                        <div class="badge badge-success">Published</div>
                    </td>
                    <td><a href="#" class="btn btn-outline-primary">Detail</a></td>
                </tr> -->
                
            </table>
        </div>
    </div>
</section>
@endsection('agentcontent')
