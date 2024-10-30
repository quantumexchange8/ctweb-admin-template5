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
              <li class="breadcrumb-item active" aria-current="page">Basic</li>
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
    
      <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-4">
        <div class="col">
          <div class="card">
            <img src="assets/images/gallery/01.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Stay at home</h5>
              <p class="card-text">Nam libero tempore, cum soluta nobis est
                eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas
                assumenda est, omnis dolor repellendus Temporibus autem
                quibusdam et aut officiis debitis aut rerum necessitatibus saepe.</p>

            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="assets/images/gallery/02.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Stay at home</h5>
              <p class="card-text">Nam libero tempore, cum soluta nobis est
                eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas
                assumenda est, omnis dolor repellendus Temporibus autem
                quibusdam et aut officiis debitis aut rerum necessitatibus saepe.</p>

            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="assets/images/gallery/03.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Stay at home</h5>
              <p class="card-text">Nam libero tempore, cum soluta nobis est
                eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas
                assumenda est, omnis dolor repellendus Temporibus autem
                quibusdam et aut officiis debitis aut rerum necessitatibus saepe.</p>

            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="assets/images/gallery/04.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Stay at home</h5>
              <p class="card-text">Nam libero tempore, cum soluta nobis est
                eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas
                assumenda est, omnis dolor repellendus Temporibus autem
                quibusdam et aut officiis debitis aut rerum necessitatibus saepe.</p>

            </div>
          </div>
        </div>

        <div class="col">
          <div class="card">
            <div class="card-body">
              <img src="assets/images/gallery/05.png" class="w-100 mb-4 rounded" alt="...">
              <h5 class="card-title mb-4">Why do we use it?</h5>
              <p class="card-text mb-4">Many desktop publishing packages and web page editors now use Lorem Ipsum.</p>
              <button class="btn btn-primary w-100 raised">Add Payment</button>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <div class="card-body">
              <img src="assets/images/gallery/06.png" class="w-100 mb-4 rounded" alt="...">
              <h5 class="card-title mb-4">Why do we use it?</h5>
              <p class="card-text mb-4">Many desktop publishing packages and web page editors now use Lorem Ipsum.</p>
              <button class="btn btn-danger w-100 raised">Add Payment</button>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <div class="card-body">
              <img src="assets/images/gallery/07.png" class="w-100 mb-4 rounded" alt="...">
              <h5 class="card-title mb-4">Why do we use it?</h5>
              <p class="card-text mb-4">Many desktop publishing packages and web page editors now use Lorem Ipsum.</p>
              <button class="btn btn-success w-100 raised">Add Payment</button>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <div class="card-body">
              <img src="assets/images/gallery/08.png" class="w-100 mb-4 rounded" alt="...">
              <h5 class="card-title mb-4">Why do we use it?</h5>
              <p class="card-text mb-4">Many desktop publishing packages and web page editors now use Lorem Ipsum.</p>
              <button class="btn btn-warning w-100 raised">Add Payment</button>
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
<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
<script src="assets/js/main.js"></script>
@endsection