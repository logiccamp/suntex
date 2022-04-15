@extends('layouts.agent')

@section('agentcontent')
<section class="section">
    <h3>My Properties</h3>
    <div class="card-body p-0">
        <div class="table-responsive">
        <table class="table table-striped" id="dealsTable">
            <thead>
                <tr>
                <th>Property Name</th>
                <th>Location</th>
                <th>State</th>
                <th>Country</th>
                <th>Date Posted</th>
                <th>Pubslished</th>
                <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($myProperties as $myProperty)
                    <tr>
                        <td>{{ $myProperty->caption }}</td>
                        <td>{{ $myProperty->address }}</td>
                        <td>{{ $myProperty->state }}</td>
                        <td>{{ $myProperty->country }}</td>
                        <td>{{ $myProperty->created_at }}</td>
                        <td>
                            @if ($myProperty->isPubslished == 1 || $myProperty->isPubslished == "1" )
                            <form action="{{ route('agentsunpublish', $myProperty->property_id) }}" method="post">
                                @csrf
                                <button class="btn btn-warning">
                                    Unpublish
                                </button>
                            </form>
                            @else
                            <form action="{{ route('agentspublish', $myProperty->property_id) }}" method="post">
                                @csrf
                                <button class="btn btn-success">
                                    Publish
                                </button>
                            </form>
                                
                            @endif
                        </td>
                        <td><a href="/agent/property/{{$myProperty->property_id}}" class="btn btn-outline-primary">Detail</a></td>
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
