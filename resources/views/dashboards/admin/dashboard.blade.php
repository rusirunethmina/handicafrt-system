@extends('layouts.admin')
@section('title') Gainloe @endsection
@section('keywords') Home,About,Contact,Car @endsection
@section('description') Write some descripton about the webpage @endsection
@section('content')
<div align="center" style="background:#1CD5E8;padding:20px;">
  <h3 class="black-text" style="font-weight:bold;"><a href="{{url('admin-dash')}}">Admin Dashboard</a></h3>
  <p class="white-text" style="font-weight:bold;">Dashboard</p>
  @if (session('status'))
  <div class="alert alert-danger" role="alert">
    {{ session('status') }}
  </div>
  @endif
</div>
<div>
  <br /><br />
  <!--first section start -->
  <div class="container">
    <div class="row">
      <div class="col-sm">
        <div class="card" style="height:100px; border-radius:8px; border-color:white;">
          <div class="card-body">
            <div class="row">
              <div class="col-4">
                <img src=" {{asset('assets/img/daily-sale.jpg')}}" alt="" class="img-fluid">
              </div>
              <div class="col-8 over1">
                <span style="font-size:15px;color:black;"><b>LKR : 1000</b></span><br />
                <span><b>Daily Sales</b></span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm">
        <div class="card" style="height:100px;  border-radius: 8px; border-color:white;">
          <div class="card-body">
            <div class="row">
              <div class="col-4">
                <img src=" {{asset('assets/img/daily-sale.jpg')}}" alt="" class="img-fluid">
              </div>
              <div class="col-8 over2">
                <span style="font-size:15px;color:black;"><b>LKR : 1000</b></span><br />
                <span><b>Daily Credits</b></span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm">
        <div class="card" style="height:100px;border-radius: 8px;border-color:white;">
          <div class="card-body">
            <div class="row">
              <div class="col-4">
                <img src=" {{asset('assets/img/product-sold.png')}}" alt="" class="img-fluid">
              </div>
              <div class="col-8 over3">
                <span style="font-size:15px;color:black;"><b>100</b></span><br />
                <span><b>Product Sold</b></span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm">
        <div class="card" style="height:100px;border-radius: 8px;border-color:white;">
          <div class="card-body">
            <div class="row">
              <div class="col-4">
                <img src=" {{asset('assets/img/monthly-sale.png')}}" alt="" class="img-fluid">
              </div>
              <div class="col-8 over4">
                <span style="font-size:15px;color:black;"><b>LKR :10000</b></span><br />
                <span><b>Monthly Sales</b></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br />
  <!--first section end -->
  <!--first section start -->
  <div class="container">
    <div class="row">
      <div class="col-sm">
        <div class="card" style="height:100px; border-radius:8px; border-color:white;">
          <div class="card-body">
            <div class="row">
              <div class="col-4">
                <img src=" {{asset('assets/img/user-report.png')}}" alt="" class="img-fluid" style="width: 50;height: 50px;">
              </div>
              <div class="col-8 over1">
                <span style="font-size:15px;color:black;"><b>1000</b></span><br />
                <span><b>Register Sellers</b></span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm">
        <div class="card" style="height:100px;  border-radius: 8px; border-color:white;">
          <div class="card-body">
            <div class="row">
              <div class="col-4">
                <img src=" {{asset('assets/img/user-report.png')}}" alt="" class="img-fluid" style="width: 50;height: 50px;">
              </div>
              <div class="col-8 over2">
                <span style="font-size:15px;color:black;"><b>1000</b></span><br />
                <span><b>Register Buyers</b></span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm">
        <div class="card" style="height:100px;border-radius: 8px;border-color:white;">
          <div class="card-body">
            <div class="row">
              <div class="col-4">
                <img src=" {{asset('assets/img/product-sold.png')}}" alt="" class="img-fluid" style="width: 50;height: 50px;">
              </div>
              <div class="col-8 over3">
                <span style="font-size:15px;color:black;"><b>100</b></span><br />
                <span><b>All Products</b></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--first section end -->
</div>
@endsection