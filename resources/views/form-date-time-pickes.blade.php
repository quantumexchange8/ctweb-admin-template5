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
              <li class="breadcrumb-item active" aria-current="page">Date Time Pickers</li>
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
        <div class="col-xl-9 mx-auto">
          <h6 class="mb-0 text-uppercase">Date Time Pickers</h6>
          <hr>
          <div class="card">
            <div class="card-body">
              <div class="mb-3">
                <label class="form-label">Pick a Date</label>
                <input type="text" class="form-control datepicker">
              </div>
              <div class="mb-3">
                <label class="form-label">Time Picker</label>
                <input type="text" class="form-control time-picker">
              </div>
              <div class="mb-3">
                <label class="form-label">Date & Time Picker</label>
                <input type="text" class="form-control date-time">
              </div>
              <div class="mb-3">
                <label class="form-label">Date Format</label>
                <input type="text" class="form-control date-format">
              </div>
              <div class="mb-3">
                <label class="form-label">Date Range</label>
                <input type="text" class="form-control date-range">
              </div>
              <div class="mb-3">
                <label class="form-label">Inline Calendar</label>
                <input type="text" class="form-control date-inline">
              </div>
            </div>
          </div>
        
        </div>
      </div>
      <!--end row-->

  </div>
</main>
@endsection
@section('scripts')
<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
<script src="assets/js/main.js"></script>
@endsection