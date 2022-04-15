@extends('layouts.admin')

@section('agentcontent')
<section class="section">
    <div class="card">
        <div class="card-header">
            <h4>All Properties</h4>
        </div>
        <div class="card-body p-3">
            <div class="table-responsive">
            <table class="table table-striped" id="dealsTable">
                <thead>
                <tr>
                <th>Property Name</th>
                <th>Location</th>
                <th>State</th>
                <th>Country</th>
                <th>Date Posted</th>
                <th>Published</th>
                <th>Status</th>
                <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($properties as $myProperty)
                <tr>
                    
                    <td>{{ $myProperty->caption }}</td>
                    <td>{{ $myProperty->address }}</td>
                    <td>{{ $myProperty->state }}</td>
                    <td>{{ $myProperty->country }}</td>
                    <td>{{ $myProperty->created_at }}</td>
                    <td>
                        Published
                    </td>
                    <td>
                        @if ($myProperty->approved_by_admin == "" )
                            <button class="btn btn-warning text-uppercase">
                                Pending
                            </button>
                        @elseif ($myProperty->approved_by_admin == "0")
                            <button class="btn btn-danger text-uppercase">
                                Blocked
                            </button>
                        @else
                            <button class="btn btn-success text-uppercase">
                                Approved
                            </button>
                        @endif
                    </td>
                    <td>
                        <span class="mydropdown">
                            <a href="#?" class="mydropdownToggle">Action <span class="iconify" data-icon="ph:caret-down-bold"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="/management/admin/view-property/{{$myProperty->property_id}}">View</a></li>
                                <li>
                                @if ($myProperty->approved_by_admin == "" || $myProperty->approved_by_admin == "1" )
                                    <form method="POST" action="{{route('propertyAction', $myProperty->id)}}">
                                        @csrf
                                        <input type="text" hidden name="status" value="1">
                                        <button class="btn btn-link p-0 color_primary">
                                            Approve
                                        </button>
                                    </form>
                                @else
                                <form method="POST" action="{{route('propertyAction', $myProperty->id)}}">
                                    <input type="text" hidden name="status" value="">
                                    <button class="btn btn-link p-0 color_primary">
                                        Hide
                                    </button>
                                </form>
                                @endif
                                </li>
                                <li>
                                <form method="POST" action="{{route('propertyAction', $myProperty->id)}}">
                                    <input type="text" hidden name="status" value="0">
                                    <button class="btn btn-link p-0 color_primary">
                                        Block
                                    </button>
                                </form>
                                </li>
                            </ul>
                        </span>
                        <ul></ul>
                    </td>
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
    </div>
    
</section>
@endsection('agentcontent')