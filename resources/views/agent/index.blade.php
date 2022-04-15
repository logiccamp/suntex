@extends('layouts.agent')

@section('agentcontent')
<section class="section">
<div class="row ">
<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <div class="card">
    <div class="card-statistic-4">
        <div class="align-items-center justify-content-between">
        <div class="row ">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
            <div class="card-content">
                <h5 class="font-15">My Properties</h5>
                <h2 class="mb-3 font-18">{{ count(auth()->user()->properties)}}</h2>
                <!-- <p class="mb-0"><span class="col-green">10%</span> Increase</p> -->
            </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
            <div class="banner-img">
                <img class="p-3" src="/agents/assets/img/banner/1.png" alt="">
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <div class="card">
    <div class="card-statistic-4">
        <div class="align-items-center justify-content-between">
        <div class="row ">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
            <div class="card-content">
                <h5 class="font-15"> Deals</h5>
                <h2 class="mb-3 font-18">{{auth()->user()->AgentDeals->count()}}</h2>
                <!-- <p class="mb-0"><span class="col-orange">09%</span> Decrease</p> -->
            </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
            <div class="banner-img">
                <img class="p-2" src="/agents/assets/img/banner/6.png" alt="">
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <div class="card">
    <div class="card-statistic-4">
        <div class="align-items-center justify-content-between">
        <div class="row ">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
            <div class="card-content">
                <h5 class="font-15">Messages</h5>
                <h2 class="mb-3 font-18"> {{auth()->user()->UnreadMessages->count()}}</h2>
                <!-- <p class="mb-0"><span class="col-green">18%</span> -->
                <!-- Increase</p> -->
            </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
            <div class="banner-img">
                <img class="p-2" src="/agents/assets/img/banner/5.png" alt="">
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <div class="card">
    <div class="card-statistic-4">
        <div class="align-items-center justify-content-between">
        <div class="row ">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
            <div class="card-content">
                <h5 class="font-15">Settings</h5>
                
                <!-- <p class="mb-0"><span class="col-green">42%</span> Increase</p> -->
            </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
            <div class="banner-img">
                <img class="p-2" src="/agents/assets/img/banner/4.png" alt="">
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
</div>

<!-- 
<div class="row">
<div class="col-12 col-sm-12 col-lg-12">
    <div class="card ">
    <div class="card-header">
        <h4>Revenue chart</h4>
        <div class="card-header-action">
        <div class="dropdown">
            <a href="#" data-toggle="dropdown" class="btn btn-warning dropdown-toggle">Options</a>
            <div class="dropdown-menu">
            <a href="#" class="dropdown-item has-icon"><i class="fas fa-eye"></i> View</a>
            <a href="#" class="dropdown-item has-icon"><i class="far fa-edit"></i> Edit</a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item has-icon text-danger"><i class="far fa-trash-alt"></i>
                Delete</a>
            </div>
        </div>
        <a href="#" class="btn btn-primary">View All</a>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
        <div class="col-lg-9">
            <div id="chart1"></div>
            <div class="row mb-0">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <div class="list-inline text-center">
                <div class="list-inline-item p-r-30"><i data-feather="arrow-up-circle"
                    class="col-green"></i>
                    <h5 class="m-b-0">$675</h5>
                    <p class="text-muted font-14 m-b-0">Weekly Earnings</p>
                </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <div class="list-inline text-center">
                <div class="list-inline-item p-r-30"><i data-feather="arrow-down-circle"
                    class="col-orange"></i>
                    <h5 class="m-b-0">$1,587</h5>
                    <p class="text-muted font-14 m-b-0">Monthly Earnings</p>
                </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <div class="list-inline text-center">
                <div class="list-inline-item p-r-30"><i data-feather="arrow-up-circle"
                    class="col-green"></i>
                    <h5 class="mb-0 m-b-0">$45,965</h5>
                    <p class="text-muted font-14 m-b-0">Yearly Earnings</p>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="row mt-5">
            <div class="col-7 col-xl-7 mb-3">Total customers</div>
            <div class="col-5 col-xl-5 mb-3">
                <span class="text-big">8,257</span>
                <sup class="col-green">+09%</sup>
            </div>
            <div class="col-7 col-xl-7 mb-3">Total Income</div>
            <div class="col-5 col-xl-5 mb-3">
                <span class="text-big">$9,857</span>
                <sup class="text-danger">-18%</sup>
            </div>
            <div class="col-7 col-xl-7 mb-3">Project completed</div>
            <div class="col-5 col-xl-5 mb-3">
                <span class="text-big">28</span>
                <sup class="col-green">+16%</sup>
            </div>
            <div class="col-7 col-xl-7 mb-3">Total expense</div>
            <div class="col-5 col-xl-5 mb-3">
                <span class="text-big">$6,287</span>
                <sup class="col-green">+09%</sup>
            </div>
            <div class="col-7 col-xl-7 mb-3">New Customers</div>
            <div class="col-5 col-xl-5 mb-3">
                <span class="text-big">684</span>
                <sup class="col-green">+22%</sup>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
</div>

-->

<!--
<div class="row">
<div class="col-12 col-sm-12 col-lg-4">
    <div class="card">
    <div class="card-header">
        <h4>Chart</h4>
    </div>
    <div class="card-body">
        <div id="chart4" class="chartsh"></div>
    </div>
    </div>
</div>
<div class="col-12 col-sm-12 col-lg-4">
    <div class="card">
    <div class="card-header">
        <h4>Chart</h4>
    </div>
    <div class="card-body">
        <div class="summary">
        <div class="summary-chart active" data-tab-group="summary-tab" id="summary-chart">
            <div id="chart3" class="chartsh"></div>
        </div>
        <div data-tab-group="summary-tab" id="summary-text">
        </div>
        </div>
    </div>
    </div>
</div>
<div class="col-12 col-sm-12 col-lg-4">
    <div class="card">
    <div class="card-header">
        <h4>Chart</h4>
    </div>
    <div class="card-body">
        <div id="chart2" class="chartsh"></div>
    </div>
    </div>
</div>
</div>
-->
<div class="row">
<div class="col-12">
    <div class="card">
    <div class="card-header">
        <h4>Recent Properties</h4>
        <div class="card-header-form">
        <form>
            <div class="input-group">
            <input type="text" class="form-control" placeholder="Search">
            <div class="input-group-btn">
                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
            </div>
            </div>
        </form>
        </div>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
        <table class="table table-striped">
            <tr>
            <th>Property Name</th>
            <th>Location</th>
            <th>State</th>
            <th>Country</th>
            <th>Date Posted</th>
            <th>Pubslished</th>
            <th>Action</th>
            </tr>
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
                <td><a href="#" class="btn btn-outline-primary">Detail</a></td>
            </tr>

            @endforeach
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
</div>
</div>
<div class="row">
<div class="col-md-6 col-lg-12 col-xl-6">
    <!-- Support tickets -->
    <div class="card">
    <div class="card-header">
        <h4>Messages</h4>
        <form class="card-header-form">
        <input type="text" name="search" class="form-control" placeholder="Search">
        </form>
    </div>
    <div class="card-body">
        <home-messages :id="{{auth()->user()->id}}"></home-messages>
    </div>
    <a href="/agent/notifications" class="card-footer card-link text-center small ">View
        All</a>
    </div>
    <!-- Support tickets -->
</div>
<div class="col-md-6 col-lg-12 col-xl-6">
    <div class="card">
    <div class="card-header">
        <h4>Transactions</h4>
    </div>
    <home-deals :id="{{auth()->user()->id}}"></home-deals
    </div>
</div>
</div>
        </section>
@endsection('agentcontent')