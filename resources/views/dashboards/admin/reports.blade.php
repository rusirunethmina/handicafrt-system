@extends('layouts.admin')
@section('title') Gainloe @endsection
@section('keywords') Home,About,Contact,Car @endsection
@section('description') Write some descripton about the webpage @endsection
@section('content')
<div align="center" style="background:#1CD5E8;padding:20px;">
  <h3 class="black-text" style="font-weight:bold;"><a href="{{url('admin-dash')}}">Admin Dashboard</a></h3>
  <p class="white-text" style="font-weight:bold;">Report Details </p>
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
        <a href="{{url('admin-product-report')}}">
          <div class="card" style="height:100px; border-radius:8px; border-color:white;">
            <div class="card-body">
              <div class="row">
                <div class="col-4">
                  <img src=" {{asset('assets/img/daily-sale.jpg')}}" alt="" class="img-fluid">
                </div>
                <div class="col-8 over1">
                  <span><b>Products Report</b></span>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>

      <div class="col-sm">
        <a href="{{url('admin-sale-report')}}">
          <div class="card" style="height:100px;  border-radius: 8px; border-color:white;">
            <div class="card-body">
              <div class="row">
                <div class="col-4">
                  <img src=" {{asset('assets/img/daily-sale.jpg')}}" alt="" class="img-fluid">
                </div>
                <div class="col-8 over2">
                  <span><b>Sales Report</b></span>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-sm">
        <a href="{{url('admin-order-report')}}">
          <div class="card" style="height:100px;border-radius: 8px;border-color:white;">
            <div class="card-body">
              <div class="row">
                <div class="col-4">
                  <img src=" {{asset('assets/img/monthly-sale.png')}}" alt="" class="img-fluid">
                </div>
                <span><b>Orders Report</b></span>
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-sm">
        <a href="{{url('admin-user-report')}}">
          <div class="card" style="height:100px;border-radius: 8px;border-color:white;">
            <div class="card-body">
              <div class="row">
                <div class="col-4">
                  <img src=" {{asset('assets/img/user-report.png')}}" alt="" class="img-fluid">
                </div>
                <div class="col-8 over3">
                  <span><b>Users Report</b></span>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>
<!--first

@endsection