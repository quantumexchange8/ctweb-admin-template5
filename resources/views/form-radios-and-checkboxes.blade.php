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
              <li class="breadcrumb-item active" aria-current="page">Checkboxes</li>
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
    
      <h6 class="mb-0 text-uppercase">Default Checkbox</h6>
      <hr>
        <div class="card">
        <div class="card-body">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              Default checkbox
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
            <label class="form-check-label" for="flexCheckChecked">
              Checked checkbox
            </label>
            </div>
        </div>
      </div>


      <h6 class="mb-0 text-uppercase">Color Checkbox</h6>
      <hr>
        <div class="card">
        <div class="card-body">

          <div class="d-flex align-items-center gap-3">
            <div class="form-check form-check-success">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckSuccess">
              <label class="form-check-label" for="flexCheckSuccess">
                Success checkbox
              </label>
              </div>
              <div class="form-check form-check-danger">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDanger">
              <label class="form-check-label" for="flexCheckDanger">
                Danger checkbox
              </label>
              </div>
              <div class="form-check form-check-warning">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckWarning">
              <label class="form-check-label" for="flexCheckWarning">
                Warning checkbox
              </label>
              </div>
              <div class="form-check form-check-dark">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDark">
              <label class="form-check-label" for="flexCheckDark">
                Dark checkbox
              </label>
              </div>
              <div class="form-check form-check-secondary">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckSecondary">
              <label class="form-check-label" for="flexCheckSecondary">
                Secondary checkbox
              </label>
              </div>
              <div class="form-check form-check-info">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckInfo">
              <label class="form-check-label" for="flexCheckInfo">
                Info checkbox
              </label>
              </div>


          </div>
                       <hr>

          <div class="d-flex align-items-center gap-3">
            <div class="form-check form-check-success">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedSuccess" checked>
              <label class="form-check-label" for="flexCheckCheckedSuccess">
                Checked Success
              </label> 
              </div>
              <div class="form-check form-check-danger">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDanger" checked>
              <label class="form-check-label" for="flexCheckCheckedDanger">
                Checked Success
              </label> 
              </div>
              <div class="form-check form-check-warning">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedWarning" checked>
              <label class="form-check-label" for="flexCheckCheckedWarning">
                Checked Warning
              </label> 
              </div>
              <div class="form-check form-check-dark">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDark" checked>
              <label class="form-check-label" for="flexCheckCheckedDark">
                Checked Dark
              </label> 
              </div>
              <div class="form-check form-check-secondary">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckeSecondary" checked>
              <label class="form-check-label" for="flexCheckCheckeSecondary">
                Checked Secondary
              </label> 
              </div>
              <div class="form-check form-check-info">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedInfo" checked>
              <label class="form-check-label" for="flexCheckCheckedInfo">
                Checked Info
              </label> 
              </div>


          </div>

        </div>
      </div>


      <h6 class="mb-0 text-uppercase">Radios</h6>
      <hr>
        <div class="card">
        <div class="card-body">
          <div class="d-flex align-items-center gap-3">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
              <label class="form-check-label" for="flexRadioDefault1">
                Default radio
              </label>
              </div>
              <div class="form-check form-check-success">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioSuccess">
              <label class="form-check-label" for="flexRadioSuccess">
                Success radio
              </label>
              </div>
              <div class="form-check form-check-danger">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDanger">
              <label class="form-check-label" for="flexRadioDanger">
                Danger radio
              </label>
              </div>
              <div class="form-check form-check-warning">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioWarning">
              <label class="form-check-label" for="flexRadioWarning">
                Warning radio
              </label>
              </div>
              <div class="form-check form-check-dark">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDark">
              <label class="form-check-label" for="flexRadioDark">
                Dark radio
              </label>
              </div>
              <div class="form-check form-check-secondary">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioSecondary">
              <label class="form-check-label" for="flexRadioSecondary">
                Secondary radio
              </label>
              </div>
              <div class="form-check form-check-info">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioInfo">
              <label class="form-check-label" for="flexRadioInfo">
                Info radio
              </label>
              </div>
          </div>
        </div>
      </div>


      <h6 class="mb-0 text-uppercase">Switches</h6>
      <hr>
        <div class="card">
        <div class="card-body">
          <div class="d-flex align-items-center gap-3">
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault1" checked>
              <label class="form-check-label" for="flexSwitchCheckDefault1">Default Switch</label>
              </div>
            <div class="form-check form-switch form-check-success">
              <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckSuccess" checked>
              <label class="form-check-label" for="flexSwitchCheckSuccess">Success Switch</label>
              </div>
              <div class="form-check form-switch form-check-danger">
              <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDanger" checked>
              <label class="form-check-label" for="flexSwitchCheckDanger">Danger Switch</label>
              </div>
              <div class="form-check form-switch form-check-warning">
              <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckWarning" checked>
              <label class="form-check-label" for="flexSwitchCheckWarning">Warning Switch</label>
              </div>
              <div class="form-check form-switch form-check-dark">
              <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDark" checked>
              <label class="form-check-label" for="flexSwitchCheckDark">Dark Switch</label>
              </div>
              <div class="form-check form-switch form-check-secondary">
              <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckSecondary" checked>
              <label class="form-check-label" for="flexSwitchCheckSecondary">Secondary Switch</label>
              </div>
              <div class="form-check form-switch form-check-info">
              <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckInfo" checked>
              <label class="form-check-label" for="flexSwitchCheckInfo">Infi Switch</label>
              </div>
          </div>
        </div>
      </div>
  </div>
</main>
@endsection
@section('scripts')
<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
<script src="assets/plugins/metismenu/metisMenu.min.js"></script>
<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
<script src="assets/js/main.js"></script>
@endsection