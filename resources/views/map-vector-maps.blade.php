@extends('Layouts.master')
@section('contents')
<link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">

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
              <li class="breadcrumb-item active" aria-current="page">Vector Map</li>
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
        <div class="col-12 col-xl-6">
          <h6 class="text-uppercase">World Map</h6>
          <hr>
          <div class="card">
            <div class="card-body">
              <div id="world-map-markers" style="height: 400px"></div>
            </div>
          </div>
        </div>
        <div class="col-12 col-xl-6">
          <h6 class="text-uppercase">India</h6>
          <hr>
          <div class="card">
            <div class="card-body">
              <div id="india" style="height: 400px"></div>
            </div>
          </div>
        </div>
        <div class="col-12 col-xl-6">
          <h6 class="text-uppercase">Usa</h6>
          <hr>
          <div class="card">
            <div class="card-body">
              <div id="usa" style="height: 400px"></div>
            </div>
          </div>
        </div>
        <div class="col-12 col-xl-6">
          <h6 class="text-uppercase">Australia Map</h6>
          <hr>
          <div class="card">
            <div class="card-body">
              <div id="australia" style="height: 400px"></div>
            </div>
          </div>
        </div>
        <div class="col-12 col-xl-12">
          <h6 class="text-uppercase">Uk Map</h6>
          <hr>
          <div class="card">
            <div class="card-body">
              <div id="uk" style="height: 400px"></div>
            </div>
          </div>
        </div>
      </div><!--end row-->
  </div>
</main>
@endsection
@section('scripts')
<script src="assets/js/bootstrap.bundle.min.js"></script>

<!--plugins-->
<script src="assets/js/jquery.min.js"></script>
<!--plugins-->
<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
<script src="assets/plugins/metismenu/metisMenu.min.js"></script>
<!-- Vector map JavaScript -->
<script src="assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="assets/plugins/vectormap/jquery-jvectormap-in-mill.js"></script>
<script src="assets/plugins/vectormap/jquery-jvectormap-us-aea-en.js"></script>
<script src="assets/plugins/vectormap/jquery-jvectormap-uk-mill-en.js"></script>
<script src="assets/plugins/vectormap/jquery-jvectormap-au-mill.js"></script>
<script src="assets/plugins/vectormap/jvectormap.custom.js"></script>
<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
<script src="assets/js/main.js"></script>

@endsection