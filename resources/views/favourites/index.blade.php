@extends('layouts.real')

@section('realcontent')

    <!-- <div class="container " style="margin-top: 100px;">
    {{$myfavourites}}
      @foreach (json_decode($myfavourites) as $fav)
      <div>
          {{$fav->fav_id}}
          <br />
      </div>
      @endforeach
    </div> -->

    <div class="Main-Slider" >
    <!-- Item -->
    <div class="item item-2" style="height: 50vh;">
      <div class="img-fill" style="height: 60vh;">
          <div class="text-content d-flex align-item-center" >
            <h4 class="">Favourites </h4>
            <div class="text-center">
            </div>
          </div>
      </div>
    </div>
    <!-- // Item -->

    <!-- // Item -->
  </div>

    <div class="services">
      <div class="container">
        <!-- BREADCRUMB -->
        <div id="breadcrumb" class="section">
          <!-- container -->
          <div class="container">
            <!-- row -->
            <div class="row">
              <div class="col-md-12">
                <h3 class="my-2 breadcrumb-header">Favourites</h3>
                <br>
                <ul class="my-3 breadcrumb-tree d-flex">
                  <li><a href="/properties" class="color_primary"> <i class="fa fa-home"></i> Properties</a>/</li>
                  <li class="active text-muted">Favourites</li>
                </ul>
              </div>
            </div>
            <!-- /row -->
          </div>
          <!-- /container -->
        </div>
        <!-- /BREADCRUMB -->
    
          <div class="container padding-bottom-3x mb-5">
              <!-- Alert-->
              <div class="alert alert-success alert-dismissible fade show text-center" style="margin-bottom: 30px;"><span class="alert-close" data-dismiss="alert"></span>
              <img class="d-inline align-center" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA1MTIuMDAzIDUxMi4wMDMiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMi4wMDMgNTEyLjAwMzsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSIxNnB4IiBoZWlnaHQ9IjE2cHgiPgo8Zz4KCTxnPgoJCTxnPgoJCQk8cGF0aCBkPSJNMjU2LjAwMSw2NGMtNzAuNTkyLDAtMTI4LDU3LjQwOC0xMjgsMTI4czU3LjQwOCwxMjgsMTI4LDEyOHMxMjgtNTcuNDA4LDEyOC0xMjhTMzI2LjU5Myw2NCwyNTYuMDAxLDY0eiAgICAgIE0yNTYuMDAxLDI5OC42NjdjLTU4LjgxNiwwLTEwNi42NjctNDcuODUxLTEwNi42NjctMTA2LjY2N1MxOTcuMTg1LDg1LjMzMywyNTYuMDAxLDg1LjMzM1MzNjIuNjY4LDEzMy4xODQsMzYyLjY2OCwxOTIgICAgIFMzMTQuODE3LDI5OC42NjcsMjU2LjAwMSwyOTguNjY3eiIgZmlsbD0iIzUwYzZlOSIvPgoJCQk8cGF0aCBkPSJNMzg1LjY0NCwzMzMuMjA1YzM4LjIyOS0zNS4xMzYsNjIuMzU3LTg1LjMzMyw2Mi4zNTctMTQxLjIwNWMwLTEwNS44NTYtODYuMTIzLTE5Mi0xOTItMTkycy0xOTIsODYuMTQ0LTE5MiwxOTIgICAgIGMwLDU1Ljg1MSwyNC4xMjgsMTA2LjA2OSw2Mi4zMzYsMTQxLjE4NEw2NC42ODQsNDk3LjZjLTEuNTM2LDQuMTE3LTAuNDA1LDguNzI1LDIuODM3LDExLjY2OSAgICAgYzIuMDI3LDEuNzkyLDQuNTY1LDIuNzMxLDcuMTQ3LDIuNzMxYzEuNjIxLDAsMy4yNDMtMC4zNjMsNC43NzktMS4xMDlsNzkuNzg3LTM5Ljg5M2w1OC44NTksMzkuMjMyICAgICBjMi42ODgsMS43OTIsNi4xMDEsMi4yNCw5LjE5NSwxLjI4YzMuMDkzLTEuMDAzLDUuNTY4LTMuMzQ5LDYuNjk5LTYuNGwyMy4yOTYtNjIuMTQ0bDIwLjU4Nyw2MS43MzkgICAgIGMxLjA2NywzLjE1NywzLjU0MSw1LjYzMiw2LjY3Nyw2LjcyYzMuMTM2LDEuMDY3LDYuNTkyLDAuNjQsOS4zNjUtMS4yMTZsNTguODU5LTM5LjIzMmw3OS43ODcsMzkuODkzICAgICBjMS41MzYsMC43NjgsMy4xNTcsMS4xMzEsNC43NzksMS4xMzFjMi41ODEsMCw1LjEyLTAuOTM5LDcuMTI1LTIuNzUyYzMuMjY0LTIuOTIzLDQuMzczLTcuNTUyLDIuODM3LTExLjY2OUwzODUuNjQ0LDMzMy4yMDV6ICAgICAgTTI0Ni4wMTcsNDEyLjI2N2wtMjcuMjg1LDcyLjc0N2wtNTIuODIxLTM1LjJjLTMuMi0yLjExMi03LjMxNy0yLjM4OS0xMC42ODgtMC42NjFMOTQuMTg4LDQ3OS42OGw0OS41NzktMTMyLjIyNCAgICAgYzI2Ljg1OSwxOS40MzUsNTguNzk1LDMyLjIxMyw5My41NDcsMzUuNjA1TDI0Ni43LDQxMS4yQzI0Ni40ODcsNDExLjU2MywyNDYuMTY3LDQxMS44NCwyNDYuMDE3LDQxMi4yNjd6IE0yNTYuMDAxLDM2Mi42NjcgICAgIEMxNjEuOSwzNjIuNjY3LDg1LjMzNSwyODYuMTAxLDg1LjMzNSwxOTJTMTYxLjksMjEuMzMzLDI1Ni4wMDEsMjEuMzMzUzQyNi42NjgsOTcuODk5LDQyNi42NjgsMTkyICAgICBTMzUwLjEwMywzNjIuNjY3LDI1Ni4wMDEsMzYyLjY2N3ogTTM1Ni43NTksNDQ5LjEzMWMtMy40MTMtMS43MjgtNy41MDktMS40NzItMTAuNjg4LDAuNjYxbC01Mi4zNzMsMzQuOTIzbC0zMy42NDMtMTAwLjkyOCAgICAgYzQwLjM0MS0wLjg1Myw3Ny41ODktMTQuMTg3LDEwOC4xNi0zNi4zMzFsNDkuNTc5LDEzMi4yMDNMMzU2Ljc1OSw0NDkuMTMxeiIgZmlsbD0iIzUwYzZlOSIvPgoJCTwvZz4KCTwvZz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" width="18" height="18" alt="Medal icon">&nbsp;&nbsp;Use our online checkout system for <strong>5% </strong> discount .</div>
              <!-- Shopping Cart-->
              <div class="table-responsive shopping-cart">
                  <table class="table">
                      <thead>
                          <tr>
                              <th scope="col">Property</th>
                              <th scope="col" class="text-center">Location</th>
                              <th scope="col" class="text-center">Amount</th>
                              <th scope="col" class="text-center text-">
                                  <form action="{{ route('favourites.destroyall') }}" method="POST">
                                  @method('DELETE')
                                  @csrf
                                  <button class="btn btn-sm btn-outline-danger" href="" data-toggle="tooltip" title="Own this" data-original-title="Own this">Clear All</button>
                                  </form>
                                </td>
                                </th>
                              <th scope="col" class="text-center">Buy/Rent</th>
                          </tr>
                      </thead>
                      <tbody id="carttable-cart">
                          @foreach (json_decode($myfavourites) as $myfav)
                            <tr>
                              <td>
                                  <div class="product-item">
                                      <a class="product-thumb" href="/properties/{{$myfav->property->id}}">
                                      <img src="/storage/{{$myfav->property->image}}" alt="Product"></a>
                                      <div class="product-info">
                                          <h4 class="product-title"><a href="#">{{$myfav->property->caption}}</a></h4>
                                          <span><em>Tag:</em> {{$myfav->property->tag}}</span><span><em>Type:</em> {{$myfav->property->type}}</span>
                                      </div>
                                  </div>
                              </td>
                              <td class="text-center">
                                  <div class="count-input">
                                      <input hidden class="form-control" value="1" disabled />
                                      <p class="m-0">Lagos, Nigeria</p>
                                  </div>
                              </td>
                              <td class="text-center text-lg text-medium">N{{number_format($myfav->property->price, 2)}}</td>
                                <td class="text-center">
                                  <form action="{{ route('favourites.destroy', ['fav'=> $myfav->fav_id]) }}" method="POST">
                                  @method('DELETE')
                                  @csrf
                                  <button class="btn btn-link remove-from-cart" href="" data-toggle="tooltip" title="" data-original-title="Remove item"><i class="fa fa-trash"></i></button>
                                </td>
                                      
                                  </form>
                              <td class="text-center">
                              
                                  <a class="btn fw-bold  text-success" href="{{ route('favourites.own', ['fav'=> $myfav->fav_id]) }}" data-toggle="tooltip" title="Own this" data-original-title="Own this">Buy Now</a>
                                  
                                </td>
                          </tr>
                          @endforeach
                      </tbody>
                  </table>
              </div>
              <!-- <div class="shopping-cart-footer">
                  <div class="column">
                      <form class="coupon-form" method="post">
                          <input class="form-control form-control-sm" type="text" placeholder="Coupon code" required="">
                          <button class="btn btn-outline-primary btn-sm" type="submit">Apply Coupon</button>
                      </form>
                  </div>
                  <div class="column text-lg">Subtotal: <span class="text-medium">N <span id="cartTotal-Cart">0</span></span></div>
              </div> -->
              <!-- <div class="shopping-cart-footer">
                  <div class="column"><a class="btn btn-outline-secondary" href="/"><i class="icon-arrow-left"></i>&nbsp;Go to Store</a></div>
                  <div class="column"><a class="btn primary-btn" href="/Checkout">Checkout</a></div>
              </div> -->
          </div>
          
      </div>
    </div>
@endsection('realcontent')