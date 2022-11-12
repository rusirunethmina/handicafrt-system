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
  <div class="row layout-top-spacing mb-4">
    <div class="col-lg-12">
      <div class="card component-card_1">
        <div class="card-body">
          <h5 class="card-title">Product Report Overview</h5>
          <div class="col-lg-12">
            <form>
              <div class="row">
                <div class="col-lg-4">
                  <div class="form-group mb-4">
                    <label for="formGroupExampleInput">Products</label>
                    <select class="form-control">
                      <option>Dusbin</option>
                      <option>Flowers and Fruits Basket Set</option>
                      <option>Containers</option>
                      <option>Mat</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group mb-4">
                    <label for="formGroupExampleInput">From</label>
                    <input type="Date" class="form-control" />
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group mb-4">
                    <label for="formGroupExampleInput">To</label>
                    <input type="Date" class="form-control" />
                  </div>
                </div>
                <div class="col-lg-2">
                  <button type="submit" class="form-control btn btn-danger  ">
                    Reset
                  </button>
                </div>
                <div class="col-lg-2">
                  <button type="submit" class="form-control btn btn-success  ">
                    Filter
                  </button>
                </div>
              </div>
              <hr />
            </form>
            <div class="row mt-5">
              <div class="col-lg-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                  <div class="table-responsive">
                    <table class="table table-bordered table-hover table-condensed mb-4">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">
                            Product Name
                          </th>
                          <th scope="col">
                            Sale Price
                          </th>
                          <th scope="col">
                            Discount
                          </th>
                          <th scope="col">
                            Delivery Chargers
                          </th>
                          <th scope="col">
                            Action
                          </th>
                        </tr>
                      </thead>
                      <td>1</td>
                      <td>Dusbin</td>
                      <td>Rs.1000</td>
                      <td>100</td>
                      <td>120</td>
                      <td> <button class="form-control btn btn-danger col-lg-8">
                          PDF Report
                        </button></td>
                      <tbody>
                      </tbody>
                    </table>
                  </div>
                </div>

                <!-- <div class="row">
                  <div class="col-lg-2">
                    <button type="submit" class="form-control btn btn-danger mt-4">
                      PDF Report
                    </button>
                  </div>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection