@extends('Layouts.master')
@section('contents')
<main class="main-wrapper">
  <div class="main-content">
    <!--breadcrumb-->
      <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Components</div>
        <div class="ps-3">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
              <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Chart Js</li>
            </ol>
          </nav>
        </div>
        <div class="ms-auto">
          <div class="btn-group">
            <button type="button" class="btn btn-primary">Settings</button>
            <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
              <a class="dropdown-item" href="javascript:;">Another action</a>
              <a class="dropdown-item" href="javascript:;">Something else here</a>
              <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
            </div>
          </div>
        </div>
      </div>
      <!--end breadcrumb-->

      <div class="row">
        <div class="col-12 col-xl-12">
          <div class="card rounded-4">
            <div class="card-header py-3">
              <div class="d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Line Chart</h5>
                <div class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle-nocaret options dropdown-toggle" data-bs-toggle="dropdown">
                    <span class="material-icons-outlined fs-5">more_vert</span>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                    <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
                    <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="chart-container1">
                <canvas id="chart1"></canvas>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-xl-12">
          <div class="card">
            <div class="card-header py-3">
              <div class="d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Bar Chart</h5>
                <div class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle-nocaret options dropdown-toggle" data-bs-toggle="dropdown">
                    <span class="material-icons-outlined fs-5">more_vert</span>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                    <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
                    <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="chart-container1">
                <canvas id="chart2"></canvas>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-xl-12">
          <div class="card">
            <div class="card-header py-3">
              <div class="d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Pie Chart</h5>
                <div class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle-nocaret options dropdown-toggle" data-bs-toggle="dropdown">
                    <span class="material-icons-outlined fs-5">more_vert</span>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                    <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
                    <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="chart-container1">
                <canvas id="chart3"></canvas>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-xl-12">
          <div class="card">
            <div class="card-header py-3">
              <div class="d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Donut Chart</h5>
                <div class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle-nocaret options dropdown-toggle" data-bs-toggle="dropdown">
                    <span class="material-icons-outlined fs-5">more_vert</span>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                    <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
                    <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="chart-container1">
                <canvas id="chart4"></canvas>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-xl-12">
          <div class="card">
            <div class="card-header py-3">
              <div class="d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Radar Chart</h5>
                <div class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle-nocaret options dropdown-toggle" data-bs-toggle="dropdown">
                    <span class="material-icons-outlined fs-5">more_vert</span>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                    <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
                    <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="chart-container1">
                <canvas id="chart5"></canvas>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-xl-12">
          <div class="card">
            <div class="card-header py-3">
              <div class="d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Radar Donut Chart</h5>
                <div class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle-nocaret options dropdown-toggle" data-bs-toggle="dropdown">
                    <span class="material-icons-outlined fs-5">more_vert</span>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                    <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
                    <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="chart-container1">
                <canvas id="chart6"></canvas>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-xl-12">
          <div class="card">
            <div class="card-header py-3">
              <div class="d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Horizontal Bar Chart</h5>
                <div class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle-nocaret options dropdown-toggle" data-bs-toggle="dropdown">
                    <span class="material-icons-outlined fs-5">more_vert</span>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                    <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
                    <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="chart-container1">
                <canvas id="chart7"></canvas>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-xl-12">
          <div class="card">
            <div class="card-header py-3">
              <div class="d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Mixed Chart</h5>
                <div class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle-nocaret options dropdown-toggle" data-bs-toggle="dropdown">
                    <span class="material-icons-outlined fs-5">more_vert</span>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                    <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
                    <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="chart-container1">
                <canvas id="chart8"></canvas>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-xl-12">
          <div class="card">
            <div class="card-header py-3">
              <div class="d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Area Chart</h5>
                <div class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle-nocaret options dropdown-toggle" data-bs-toggle="dropdown">
                    <span class="material-icons-outlined fs-5">more_vert</span>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                    <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
                    <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="chart-container1">
                <canvas id="chart9"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div><!--end row-->
  </div>
</main>
@endsection
@section('scripts')
<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
<script src="assets/plugins/metismenu/metisMenu.min.js"></script>
<script src="assets/plugins/chartjs/js/chart.js"></script>
<script src="assets/plugins/chartjs/js/chartjs-custom.js"></script>
<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
<script src="assets/js/main.js"></script>
@endsection