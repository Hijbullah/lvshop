@extends('backend.layouts.master')

@section('page-title', 'Dashboard')
@section('page-header', 'Dashboard')

@section('main-content')
<section class="content">

<section class="content">
    <div class="container-fluid">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box">
            <span class="info-box-icon bg-info elevation-1"><i class="fab fa-product-hunt"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Products</span>
              <span class="info-box-number">
                5,000
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-danger elevation-1"><i class="fab fa-first-order-alt"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Order</span>
              <span class="info-box-number">41,410</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>

        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-cart-arrow-down"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Sales</span>
              <span class="info-box-number">760</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-warning elevation-1"><i class="fa fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">New Customers</span>
              <span class="info-box-number">2,000</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h5 class="card-title">Monthly Recap Report</h5>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-widget="collapse">
                  <i class="fa fa-minus"></i>
                </button>
                <div class="btn-group">
                  <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-wrench"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right" role="menu">
                    <a href="#" class="dropdown-item">Action</a>
                    <a href="#" class="dropdown-item">Another action</a>
                    <a href="#" class="dropdown-item">Something else here</a>
                    <a class="dropdown-divider"></a>
                    <a href="#" class="dropdown-item">Separated link</a>
                  </div>
                </div>
                <button type="button" class="btn btn-tool" data-widget="remove">
                  <i class="fa fa-times"></i>
                </button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="row">
                <div class="col-md-8">
                  <p class="text-center">
                    <strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
                  </p>

                  <div class="chart">
                    <!-- Sales Chart Canvas -->
                    <canvas id="salesChart" height="180" style="height: 180px;"></canvas>
                  </div>
                  <!-- /.chart-responsive -->
                </div>
                <!-- /.col -->
                <div class="col-md-4">
                  <p class="text-center">
                    <strong>Goal Completion</strong>
                  </p>

                  <div class="progress-group">
                    Add Products to Cart
                    <span class="float-right"><b>160</b>/200</span>
                    <div class="progress progress-sm">
                      <div class="progress-bar bg-primary" style="width: 80%"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->

                  <div class="progress-group">
                    Complete Purchase
                    <span class="float-right"><b>310</b>/400</span>
                    <div class="progress progress-sm">
                      <div class="progress-bar bg-danger" style="width: 75%"></div>
                    </div>
                  </div>

                  <!-- /.progress-group -->
                  <div class="progress-group">
                    <span class="progress-text">Visit Premium Page</span>
                    <span class="float-right"><b>480</b>/800</span>
                    <div class="progress progress-sm">
                      <div class="progress-bar bg-success" style="width: 60%"></div>
                    </div>
                  </div>

                  <!-- /.progress-group -->
                  <div class="progress-group">
                    Send Inquiries
                    <span class="float-right"><b>250</b>/500</span>
                    <div class="progress progress-sm">
                      <div class="progress-bar bg-warning" style="width: 50%"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- ./card-body -->
            <div class="card-footer">
              <div class="row">
                <div class="col-sm-3 col-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-success"><i class="fa fa-caret-up"></i> 17%</span>
                    <h5 class="description-header">$35,210.43</h5>
                    <span class="description-text">TOTAL REVENUE</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-warning"><i class="fa fa-caret-left"></i> 0%</span>
                    <h5 class="description-header">$10,390.90</h5>
                    <span class="description-text">TOTAL COST</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-success"><i class="fa fa-caret-up"></i> 20%</span>
                    <h5 class="description-header">$24,813.53</h5>
                    <span class="description-text">TOTAL PROFIT</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-6">
                  <div class="description-block">
                    <span class="description-percentage text-danger"><i class="fa fa-caret-down"></i> 18%</span>
                    <h5 class="description-header">1200</h5>
                    <span class="description-text">GOAL COMPLETIONS</span>
                  </div>
                  <!-- /.description-block -->
                </div>
              </div>
              <!-- /.row -->
            </div>
            <!-- /.card-footer -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <div class="col-md-8">
          <!-- MAP & BOX PANE -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Visitors Report</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-widget="collapse">
                  <i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-widget="remove">
                  <i class="fa fa-times"></i>
                </button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="d-md-flex">
                <div class="p-1 flex-1" style="overflow: hidden">
                  <!-- Map will be created here -->
                  <div id="world-map-markers" style="height: 325px; overflow: hidden"></div>
                </div>
                <div class="card-pane-right bg-success pt-2 pb-2 pl-4 pr-4">
                  <div class="description-block mb-4">
                    <div class="sparkbar pad" data-color="#fff">90,70,90,70,75,80,70</div>
                    <h5 class="description-header">8390</h5>
                    <span class="description-text">Visits</span>
                  </div>
                  <!-- /.description-block -->
                  <div class="description-block mb-4">
                    <div class="sparkbar pad" data-color="#fff">90,50,90,70,61,83,63</div>
                    <h5 class="description-header">30%</h5>
                    <span class="description-text">Referrals</span>
                  </div>
                  <!-- /.description-block -->
                  <div class="description-block">
                    <div class="sparkbar pad" data-color="#fff">90,50,90,70,61,83,63</div>
                    <h5 class="description-header">70%</h5>
                    <span class="description-text">Organic</span>
                  </div>
                  <!-- /.description-block -->
                </div><!-- /.card-pane-right -->
              </div><!-- /.d-md-flex -->
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          <div class="row">
            
            <div class="col-md-12">
              <!-- USERS LIST -->
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Latest Customers</h3>

                  <div class="card-tools">
                    <span class="badge badge-danger">8 New Members</span>
                    <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                  <ul class="users-list clearfix">
                    <li>
                      <img src="{{asset('backend/img/user1-128x128.jpg')}}" alt="User Image">
                      <a class="users-list-name" href="#">Alexander Pierce</a>
                      <span class="users-list-date">Today</span>
                    </li>
                    <li>
                      <img src="{{asset('backend/img/user8-128x128.jpg')}}" alt="User Image">
                      <a class="users-list-name" href="#">Norman</a>
                      <span class="users-list-date">Yesterday</span>
                    </li>
                    <li>
                      <img src="{{asset('backend/img/user7-128x128.jpg')}}" alt="User Image">
                      <a class="users-list-name" href="#">Jane</a>
                      <span class="users-list-date">12 Jan</span>
                    </li>
                    <li>
                      <img src="{{asset('backend/img/user6-128x128.jpg')}}" alt="User Image">
                      <a class="users-list-name" href="#">John</a>
                      <span class="users-list-date">12 Jan</span>
                    </li>
                    <li>
                      <img src="{{asset('backend/img/user2-160x160.jpg')}}" alt="User Image">
                      <a class="users-list-name" href="#">Alexander</a>
                      <span class="users-list-date">13 Jan</span>
                    </li>
                    <li>
                      <img src="{{asset('backend/img/user5-128x128.jpg')}}" alt="User Image">
                      <a class="users-list-name" href="#">Sarah</a>
                      <span class="users-list-date">14 Jan</span>
                    </li>
                    <li>
                      <img src="{{asset('backend/img/user4-128x128.jpg')}}" alt="User Image">
                      <a class="users-list-name" href="#">Nora</a>
                      <span class="users-list-date">15 Jan</span>
                    </li>
                    <li>
                      <img src="{{asset('backend/img/user3-128x128.jpg')}}" alt="User Image">
                      <a class="users-list-name" href="#">Nadia</a>
                      <span class="users-list-date">15 Jan</span>
                    </li>
                  </ul>
                  <!-- /.users-list -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer text-center">
                  <a href="javascript::">View All Customers</a>
                </div>
                <!-- /.card-footer -->
              </div>
              <!--/.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->

          <!-- TABLE: LATEST ORDERS -->
          <div class="card">
            <div class="card-header border-transparent">
              <h3 class="card-title">Latest Orders</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-widget="collapse">
                  <i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-widget="remove">
                  <i class="fa fa-times"></i>
                </button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="table-responsive">
                <table class="table m-0">
                  <thead>
                  <tr>
                    <th>Order ID</th>
                    <th>Item</th>
                    <th>Status</th>
                    <th>Popularity</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td><a href="{{ route('sale.invoice') }}">OR9842</a></td>
                    <td>Call of Duty IV</td>
                    <td><span class="badge badge-success">Shipped</span></td>
                    <td>
                      <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="{{ route('sale.invoice') }}">OR1848</a></td>
                    <td>Samsung Smart TV</td>
                    <td><span class="badge badge-warning">Pending</span></td>
                    <td>
                      <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="{{ route('sale.invoice') }}">OR7429</a></td>
                    <td>iPhone 6 Plus</td>
                    <td><span class="badge badge-danger">Delivered</span></td>
                    <td>
                      <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="{{ route('sale.invoice') }}">OR7429</a></td>
                    <td>Samsung Smart TV</td>
                    <td><span class="badge badge-info">Processing</span></td>
                    <td>
                      <div class="sparkbar" data-color="#00c0ef" data-height="20">90,80,-90,70,-61,83,63</div>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="{{ route('sale.invoice') }}">OR1848</a></td>
                    <td>Samsung Smart TV</td>
                    <td><span class="badge badge-warning">Pending</span></td>
                    <td>
                      <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="{{ route('sale.invoice') }}">OR7429</a></td>
                    <td>iPhone 6 Plus</td>
                    <td><span class="badge badge-danger">Delivered</span></td>
                    <td>
                      <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="{{ route('sale.invoice') }}">OR9842</a></td>
                    <td>Call of Duty IV</td>
                    <td><span class="badge badge-success">Shipped</span></td>
                    <td>
                      <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
                    </td>
                  </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
              {{-- <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a> --}}
              <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a>
            </div>
            <!-- /.card-footer -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->

        <div class="col-md-4">
          <!-- Info Boxes Style 2 -->
          <div class="info-box mb-3 bg-warning">
            <span class="info-box-icon"><i class="fa fa-tag"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Inventory</span>
              <span class="info-box-number">5,200</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
          <div class="info-box mb-3 bg-success">
            <span class="info-box-icon"><i class="fa fa-heart-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Mentions</span>
              <span class="info-box-number">92,050</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
          <div class="info-box mb-3 bg-danger">
            <span class="info-box-icon"><i class="fa fa-cloud-download"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Downloads</span>
              <span class="info-box-number">114,381</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
          <div class="info-box mb-3 bg-info">
            <span class="info-box-icon"><i class="fa fa-comment-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Direct Messages</span>
              <span class="info-box-number">163,921</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Browser Usage</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i>
                </button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="row">
                <div class="col-md-8">
                  <div class="chart-responsive">
                    <canvas id="pieChart" height="150"></canvas>
                  </div>
                  <!-- ./chart-responsive -->
                </div>
                <!-- /.col -->
                <div class="col-md-4">
                  <ul class="chart-legend clearfix">
                    <li><i class="fa fa-circle-o text-danger"></i> Chrome</li>
                    <li><i class="fa fa-circle-o text-success"></i> IE</li>
                    <li><i class="fa fa-circle-o text-warning"></i> FireFox</li>
                    <li><i class="fa fa-circle-o text-info"></i> Safari</li>
                    <li><i class="fa fa-circle-o text-primary"></i> Opera</li>
                    <li><i class="fa fa-circle-o text-secondary"></i> Navigator</li>
                  </ul>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer bg-white p-0">
              <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    United States of America
                    <span class="float-right text-danger">
                      <i class="fa fa-arrow-down text-sm"></i>
                      12%</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    India
                    <span class="float-right text-success">
                      <i class="fa fa-arrow-up text-sm"></i> 4%
                    </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    China
                    <span class="float-right text-warning">
                      <i class="fa fa-arrow-left text-sm"></i> 0%
                    </span>
                  </a>
                </li>
              </ul>
            </div>
            <!-- /.footer -->
          </div>
          <!-- /.card -->

          <!-- PRODUCT LIST -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Recently Added Products</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-widget="collapse">
                  <i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-widget="remove">
                  <i class="fa fa-times"></i>
                </button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <ul class="products-list product-list-in-card pl-2 pr-2">
                <li class="item">
                  <div class="product-img">
                    <img src="{{ asset('backend/img/default-150x150.png') }}" alt="Product Image" class="img-size-50">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">Samsung TV
                      <span class="badge badge-warning float-right">$1800</span></a>
                    <span class="product-description">
                      Samsung 32" 1080p 60Hz LED Smart HDTV.
                    </span>
                  </div>
                </li>
                <!-- /.item -->
                <li class="item">
                  <div class="product-img">
                    <img src="{{ asset('backend/img/default-150x150.png') }}" alt="Product Image" class="img-size-50">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">Bicycle
                      <span class="badge badge-info float-right">$700</span></a>
                    <span class="product-description">
                      26" Mongoose Dolomite Men's 7-speed, Navy Blue.
                    </span>
                  </div>
                </li>
                <!-- /.item -->
                <li class="item">
                  <div class="product-img">
                    <img src="{{ asset('backend/img/default-150x150.png') }}" alt="Product Image" class="img-size-50">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">
                      Xbox One <span class="badge badge-danger float-right">
                      $350
                    </span>
                    </a>
                    <span class="product-description">
                      Xbox One Console Bundle with Halo Master Chief Collection.
                    </span>
                  </div>
                </li>
                <!-- /.item -->
                <li class="item">
                  <div class="product-img">
                    <img src="{{ asset('backend/img/default-150x150.png') }}" alt="Product Image" class="img-size-50">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">PlayStation 4
                      <span class="badge badge-success float-right">$399</span></a>
                    <span class="product-description">
                      PlayStation 4 500GB Console (PS4)
                    </span>
                  </div>
                </li>
                <!-- /.item -->
              </ul>
            </div>
            <!-- /.card-body -->
            <div class="card-footer text-center">
              <a href="javascript:void(0)" class="uppercase">View All Products</a>
            </div>
            <!-- /.card-footer -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div><!--/. container-fluid -->
</section>
@endsection

@push('page-css')
    
@endpush



@push('page-scripts')
    <!-- PAGE PLUGINS -->
    <!-- SparkLine -->
    <script src="{{ asset('backend/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
    <!-- jVectorMap -->
    <script src="{{ asset('backend/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="{{ asset('backend/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
    <!-- ChartJS 1.0.2 -->
    <script src="{{ asset('backend/plugins/chartjs-old/Chart.min.js') }}"></script>

    <!-- PAGE SCRIPTS -->
    <script>
        $(function () {

        'use strict'

        /* ChartJS
        * -------
        * Here we will create a few charts using ChartJS
        */

        //-----------------------
        //- MONTHLY SALES CHART -
        //-----------------------

        // Get context with jQuery - using jQuery's .get() method.
        var salesChartCanvas = $('#salesChart').get(0).getContext('2d')
        // This will get the first returned node in the jQuery collection.
        var salesChart       = new Chart(salesChartCanvas)

        var salesChartData = {
        labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        datasets: [
            {
            label               : 'Electronics',
            fillColor           : '#dee2e6',
            strokeColor         : '#ced4da',
            pointColor          : '#ced4da',
            pointStrokeColor    : '#c1c7d1',
            pointHighlightFill  : '#fff',
            pointHighlightStroke: 'rgb(220,220,220)',
            data                : [65, 59, 80, 81, 56, 55, 40]
            },
            {
            label               : 'Digital Goods',
            fillColor           : 'rgba(0, 123, 255, 0.9)',
            strokeColor         : 'rgba(0, 123, 255, 1)',
            pointColor          : '#3b8bba',
            pointStrokeColor    : 'rgba(0, 123, 255, 1)',
            pointHighlightFill  : '#fff',
            pointHighlightStroke: 'rgba(0, 123, 255, 1)',
            data                : [28, 48, 40, 19, 86, 27, 90]
            }
        ]
        }

        var salesChartOptions = {
        //Boolean - If we should show the scale at all
        showScale               : true,
        //Boolean - Whether grid lines are shown across the chart
        scaleShowGridLines      : false,
        //String - Colour of the grid lines
        scaleGridLineColor      : 'rgba(0,0,0,.05)',
        //Number - Width of the grid lines
        scaleGridLineWidth      : 1,
        //Boolean - Whether to show horizontal lines (except X axis)
        scaleShowHorizontalLines: true,
        //Boolean - Whether to show vertical lines (except Y axis)
        scaleShowVerticalLines  : true,
        //Boolean - Whether the line is curved between points
        bezierCurve             : true,
        //Number - Tension of the bezier curve between points
        bezierCurveTension      : 0.3,
        //Boolean - Whether to show a dot for each point
        pointDot                : false,
        //Number - Radius of each point dot in pixels
        pointDotRadius          : 4,
        //Number - Pixel width of point dot stroke
        pointDotStrokeWidth     : 1,
        //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
        pointHitDetectionRadius : 20,
        //Boolean - Whether to show a stroke for datasets
        datasetStroke           : true,
        //Number - Pixel width of dataset stroke
        datasetStrokeWidth      : 2,
        //Boolean - Whether to fill the dataset with a color
        datasetFill             : true,
        //String - A legend template
        legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].lineColor%>"></span><%=datasets[i].label%></li><%}%></ul>',
        //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
        maintainAspectRatio     : false,
        //Boolean - whether to make the chart responsive to window resizing
        responsive              : true
        }

        //Create the line chart
        salesChart.Line(salesChartData, salesChartOptions)

        //---------------------------
        //- END MONTHLY SALES CHART -
        //---------------------------

        //-------------
        //- PIE CHART -
        //-------------
        // Get context with jQuery - using jQuery's .get() method.
        var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
        var pieChart       = new Chart(pieChartCanvas)
        var PieData        = [
        {
            value    : 700,
            color    : '#dc3545',
            highlight: '#dc3545',
            label    : 'Chrome'
        },
        {
            value    : 500,
            color    : '#28a745',
            highlight: '#28a745',
            label    : 'IE'
        },
        {
            value    : 400,
            color    : '#ffc107',
            highlight: '#ffc107',
            label    : 'FireFox'
        },
        {
            value    : 600,
            color    : '#17a2b8',
            highlight: '#17a2b8',
            label    : 'Safari'
        },
        {
            value    : 300,
            color    : '#007bff',
            highlight: '#007bff',
            label    : 'Opera'
        },
        {
            value    : 100,
            color    : '#6c757d',
            highlight: '#6c757d',
            label    : 'Navigator'
        }
        ]
        var pieOptions     = {
        //Boolean - Whether we should show a stroke on each segment
        segmentShowStroke    : true,
        //String - The colour of each segment stroke
        segmentStrokeColor   : '#fff',
        //Number - The width of each segment stroke
        segmentStrokeWidth   : 1,
        //Number - The percentage of the chart that we cut out of the middle
        percentageInnerCutout: 50, // This is 0 for Pie charts
        //Number - Amount of animation steps
        animationSteps       : 100,
        //String - Animation easing effect
        animationEasing      : 'easeOutBounce',
        //Boolean - Whether we animate the rotation of the Doughnut
        animateRotate        : true,
        //Boolean - Whether we animate scaling the Doughnut from the centre
        animateScale         : false,
        //Boolean - whether to make the chart responsive to window resizing
        responsive           : true,
        // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
        maintainAspectRatio  : false,
        //String - A legend template
        legendTemplate       : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<segments.length; i++){%><li><span style="background-color:<%=segments[i].fillColor%>"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>',
        //String - A tooltip template
        tooltipTemplate      : '<%=value %> <%=label%> users'
        }
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        pieChart.Doughnut(PieData, pieOptions)
        //-----------------
        //- END PIE CHART -
        //-----------------

        /* jVector Maps
        * ------------
        * Create a world map with markers
        */
        $('#world-map-markers').vectorMap({
        map              : 'world_mill_en',
        normalizeFunction: 'polynomial',
        hoverOpacity     : 0.7,
        hoverColor       : false,
        backgroundColor  : 'transparent',
        regionStyle      : {
            initial      : {
            fill            : 'rgba(210, 214, 222, 1)',
            'fill-opacity'  : 1,
            stroke          : 'none',
            'stroke-width'  : 0,
            'stroke-opacity': 1
            },
            hover        : {
            'fill-opacity': 0.7,
            cursor        : 'pointer'
            },
            selected     : {
            fill: 'yellow'
            },
            selectedHover: {}
        },
        markerStyle      : {
            initial: {
            fill  : '#00a65a',
            stroke: '#111'
            }
        },
        markers          : [
            {
            latLng: [41.90, 12.45],
            name  : 'Vatican City'
            },
            {
            latLng: [43.73, 7.41],
            name  : 'Monaco'
            },
            {
            latLng: [-0.52, 166.93],
            name  : 'Nauru'
            },
            {
            latLng: [-8.51, 179.21],
            name  : 'Tuvalu'
            },
            {
            latLng: [43.93, 12.46],
            name  : 'San Marino'
            },
            {
            latLng: [47.14, 9.52],
            name  : 'Liechtenstein'
            },
            {
            latLng: [7.11, 171.06],
            name  : 'Marshall Islands'
            },
            {
            latLng: [17.3, -62.73],
            name  : 'Saint Kitts and Nevis'
            },
            {
            latLng: [3.2, 73.22],
            name  : 'Maldives'
            },
            {
            latLng: [35.88, 14.5],
            name  : 'Malta'
            },
            {
            latLng: [12.05, -61.75],
            name  : 'Grenada'
            },
            {
            latLng: [13.16, -61.23],
            name  : 'Saint Vincent and the Grenadines'
            },
            {
            latLng: [13.16, -59.55],
            name  : 'Barbados'
            },
            {
            latLng: [17.11, -61.85],
            name  : 'Antigua and Barbuda'
            },
            {
            latLng: [-4.61, 55.45],
            name  : 'Seychelles'
            },
            {
            latLng: [7.35, 134.46],
            name  : 'Palau'
            },
            {
            latLng: [42.5, 1.51],
            name  : 'Andorra'
            },
            {
            latLng: [14.01, -60.98],
            name  : 'Saint Lucia'
            },
            {
            latLng: [6.91, 158.18],
            name  : 'Federated States of Micronesia'
            },
            {
            latLng: [1.3, 103.8],
            name  : 'Singapore'
            },
            {
            latLng: [1.46, 173.03],
            name  : 'Kiribati'
            },
            {
            latLng: [-21.13, -175.2],
            name  : 'Tonga'
            },
            {
            latLng: [15.3, -61.38],
            name  : 'Dominica'
            },
            {
            latLng: [-20.2, 57.5],
            name  : 'Mauritius'
            },
            {
            latLng: [26.02, 50.55],
            name  : 'Bahrain'
            },
            {
            latLng: [0.33, 6.73],
            name  : 'São Tomé and Príncipe'
            }
        ]
        })

        /* SPARKLINE CHARTS
        * ----------------
        * Create a inline charts with spark line
        */

        //-----------------
        //- SPARKLINE BAR -
        //-----------------
        $('.sparkbar').each(function () {
        var $this = $(this)
        $this.sparkline('html', {
            type    : 'bar',
            height  : $this.data('height') ? $this.data('height') : '30',
            barColor: $this.data('color')
        })
        })

        //-----------------
        //- SPARKLINE PIE -
        //-----------------
        $('.sparkpie').each(function () {
        var $this = $(this)
        $this.sparkline('html', {
            type       : 'pie',
            height     : $this.data('height') ? $this.data('height') : '90',
            sliceColors: $this.data('color')
        })
        })

        //------------------
        //- SPARKLINE LINE -
        //------------------
        $('.sparkline').each(function () {
        var $this = $(this)
        $this.sparkline('html', {
            type     : 'line',
            height   : $this.data('height') ? $this.data('height') : '90',
            width    : '100%',
            lineColor: $this.data('linecolor'),
            fillColor: $this.data('fillcolor'),
            spotColor: $this.data('spotcolor')
        })
        })
        })
    </script>
@endpush

