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
              <li class="breadcrumb-item active" aria-current="page">Carousels</li>
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
    

      <div class="row row-cols-1 row-cols-lg-12 row-cols-xl-12">
        <div class="col">
          <h6 class="mb-0 text-uppercase">Slides only</h6>
          <hr>
          <div class="card">
            <div class="card-body">
              <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="assets/images/carousels/01.png" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/images/carousels/02.png" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/images/carousels/03.png" class="d-block w-100" alt="...">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <h6 class="mb-0 text-uppercase">With controls</h6>
          <hr>
          <div class="card">
            <div class="card-body">
              <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="assets/images/carousels/04.png" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/images/carousels/05.png" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/images/carousels/06.png" class="d-block w-100" alt="...">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">	<span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <h6 class="mb-0 text-uppercase">With controls</h6>
          <hr>
          <div class="card">
            <div class="card-body">
              <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                  <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                  <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="assets/images/carousels/07.png" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/images/carousels/08.png" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/images/carousels/09.png" class="d-block w-100" alt="...">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">	<span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <h6 class="mb-0 text-uppercase">With captions</h6>
          <hr>
          <div class="card">
            <div class="card-body">
              <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
                  <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
                  <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="assets/images/carousels/10.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>First slide label</h5>
                      <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="assets/images/carousels/11.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Second slide label</h5>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="assets/images/carousels/12.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Third slide label</h5>
                      <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">	<span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <h6 class="mb-0 text-uppercase">With Crossfade</h6>
          <hr>
          <div class="card">
            <div class="card-body">
              <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="assets/images/carousels/13.png" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/images/carousels/14.png" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/images/carousels/15.png" class="d-block w-100" alt="...">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-bs-slide="prev">	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-bs-slide="next">	<span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </a>
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
<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
<script src="assets/plugins/metismenu/metisMenu.min.js"></script>
<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
<script src="assets/js/main.js"></script>
@endsection