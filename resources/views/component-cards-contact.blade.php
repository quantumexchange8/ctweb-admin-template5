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
            <li class="breadcrumb-item"><a href="javascript:;"></a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Cards</li>
          </ol>
        </nav>
      </div>
      <div class="ms-auto">
        <div class="btn-group">
          <button type="button" class="btn btn-primary">Settings</button>
          <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split"
            data-bs-toggle="dropdown"> <span class="visually-hidden">Toggle Dropdown</span>
          </button>
          <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end"> <a class="dropdown-item"
              href="javascript:;">Action</a>
            <a class="dropdown-item" href="javascript:;">Another action</a>
            <a class="dropdown-item" href="javascript:;">Something else here</a>
            <div class="dropdown-divider"></div> <a class="dropdown-item" href="javascript:;">Separated link</a>
          </div>
        </div>
      </div>
    </div>
    <!--end breadcrumb-->

   

    <div class="row g-4">
      <div class="col-12 col-xl-4">
        <div class="card mb-0">
          <div class="card-body">
            <div class="position-relative">
              <img src="assets/images/gallery/14.png" class="img-fluid rounded" alt="">
              <div class="position-absolute top-100 start-50 translate-middle">
                <img src="assets/images/avatars/05.png" width="100" height="100"
                  class="rounded-circle raised p-1 bg-primary" alt="">
              </div>
            </div>
            <div class="text-center mt-5 pt-4">
              <h5 class="mb-2">Julinee Moree</h5>
              <p class="mb-0">Marketing Excutive</p>
            </div>
            <div class="d-flex align-items-center justify-content-around mt-5">
              <div class="d-flex flex-column gap-2">
                <h4 class="mb-0">798</h4>
                <p class="mb-0">Posts</p>
              </div>
              <div class="d-flex flex-column gap-2">
                <h4 class="mb-0">48K</h4>
                <p class="mb-0">Following</p>
              </div>
              <div class="d-flex flex-column gap-2">
                <h4 class="mb-0">24.3M</h4>
                <p class="mb-0">Followers</p>
              </div>
            </div>
            <hr>
            <div class="d-flex align-items-center justify-content-between">
              <button class="btn btn-light">Message</button>
              <button class="btn btn-primary">Follow</button>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-xl-4">
        <div class="card mb-0">
          <div class="card-body">
            <div class="position-relative">
              <img src="assets/images/gallery/18.png" class="img-fluid rounded" alt="">
              <div class="position-absolute top-100 start-50 translate-middle">
                <img src="assets/images/avatars/02.png" width="100" height="100"
                  class="rounded-circle raised p-1 bg-white" alt="">
              </div>
            </div>
            <div class="text-center mt-5 pt-4">
              <h5 class="mb-2">Julinee Moree</h5>
              <p class="mb-0">Marketing Excutive</p>
            </div>
            <div class="d-flex align-items-center justify-content-around mt-5">
              <div class="d-flex flex-column gap-2">
                <h4 class="mb-0">798</h4>
                <p class="mb-0">Posts</p>
              </div>
              <div class="d-flex flex-column gap-2">
                <h4 class="mb-0">48K</h4>
                <p class="mb-0">Following</p>
              </div>
              <div class="d-flex flex-column gap-2">
                <h4 class="mb-0">24.3M</h4>
                <p class="mb-0">Followers</p>
              </div>
            </div>
            <hr>
            <div class="d-flex align-items-center justify-content-between">
              <button class="btn btn-light">Message</button>
              <button class="btn btn-primary">Follow</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-xl-4">
        <div class="card mb-0">
          <div class="card-body">
            <div class="position-relative">
              <img src="assets/images/gallery/19.png" class="img-fluid rounded" alt="">
              <div class="position-absolute top-100 start-50 translate-middle">
                <img src="assets/images/avatars/04.png" width="100" height="100"
                  class="rounded-circle raised p-1 bg-danger" alt="">
              </div>
            </div>
            <div class="text-center mt-5 pt-4">
              <h5 class="mb-2">Julinee Moree</h5>
              <p class="mb-0">Marketing Excutive</p>
            </div>
            <div class="d-flex align-items-center justify-content-around mt-5">
              <div class="d-flex flex-column gap-2">
                <h4 class="mb-0">798</h4>
                <p class="mb-0">Posts</p>
              </div>
              <div class="d-flex flex-column gap-2">
                <h4 class="mb-0">48K</h4>
                <p class="mb-0">Following</p>
              </div>
              <div class="d-flex flex-column gap-2">
                <h4 class="mb-0">24.3M</h4>
                <p class="mb-0">Followers</p>
              </div>
            </div>
            <hr>
            <div class="d-flex align-items-center justify-content-between">
              <button class="btn btn-light">Message</button>
              <button class="btn btn-primary">Follow</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-xl-6">
        <div class="card">
          <div class="card-body">
            <div class="row row-cols-1 row-cols-lg-2 g-3">
              <div class="col">
                <div class="card shadow-none border mb-0">
                  <div class="card-body">
                    <div class="text-center">
                      <img src="assets/images/avatars/07.png" width="100" height="100"
                        class="rounded-circle raised bg-white" alt="">
                    </div>
                    <div class="text-center mt-4">
                      <h5 class="mb-2">Michle Web</h5>
                      <p class="mb-0">UI Developer</p>
                    </div>
                    <div class="d-flex align-items-center justify-content-around mt-5">
                      <div class="d-flex flex-column gap-2">
                        <h5 class="mb-0">798</h5>
                        <p class="mb-0">Posts</p>
                      </div>
                      <div class="d-flex flex-column gap-2">
                        <h5 class="mb-0">48K</h5>
                        <p class="mb-0">Following</p>
                      </div>
                      <div class="d-flex flex-column gap-2">
                        <h5 class="mb-0">24.3M</h5>
                        <p class="mb-0">Followers</p>
                      </div>
                    </div>
                    <hr>
                    <div class="d-flex align-items-center justify-content-center gap-3">
                      <a href="javascript:;"
                        class="wh-48 bg-linkedin text-white rounded-circle d-flex align-items-center justify-content-center"><i
                          class="bi bi-linkedin fs-5"></i></a>
                      <a href="javascript:;"
                        class="wh-48 bg-dark text-white rounded-circle d-flex align-items-center justify-content-center"><i
                          class="bi bi-twitter-x fs-5"></i></a>
                      <a href="javascript:;"
                        class="wh-48 bg-facebook text-white rounded-circle d-flex align-items-center justify-content-center"><i
                          class="bi bi-facebook fs-5"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card shadow-none border mb-0">
                  <div class="card-body">
                    <div class="text-center">
                      <img src="assets/images/avatars/08.png" width="100" height="100"
                        class="rounded-circle raised bg-white" alt="">
                    </div>
                    <div class="text-center mt-4">
                      <h5 class="mb-2">Andreo Simonds</h5>
                      <p class="mb-0">HR Manager</p>
                    </div>
                    <div class="d-flex align-items-center justify-content-around mt-5">
                      <div class="d-flex flex-column gap-2">
                        <h5 class="mb-0">798</h5>
                        <p class="mb-0">Posts</p>
                      </div>
                      <div class="d-flex flex-column gap-2">
                        <h5 class="mb-0">48K</h5>
                        <p class="mb-0">Following</p>
                      </div>
                      <div class="d-flex flex-column gap-2">
                        <h5 class="mb-0">24.3M</h5>
                        <p class="mb-0">Followers</p>
                      </div>
                    </div>
                    <hr>
                    <div class="d-flex align-items-center justify-content-center gap-3">
                      <a href="javascript:;"
                        class="wh-48 bg-linkedin text-white rounded-circle d-flex align-items-center justify-content-center"><i
                          class="bi bi-google fs-5"></i></a>
                      <a href="javascript:;"
                        class="wh-48 bg-pinterest text-white rounded-circle d-flex align-items-center justify-content-center"><i
                          class="bi bi-youtube fs-5"></i></a>
                      <a href="javascript:;"
                        class="wh-48 bg-whatsapp text-white rounded-circle d-flex align-items-center justify-content-center"><i
                          class="bi bi-whatsapp fs-5"></i></a>
                    </div>
                  </div>
                </div>
              </div>

            </div><!--end row-->
          </div>
        </div>
      </div>

      <div class="col-12 col-xl-6">
        <div class="card">
          <div class="card-body">
            <div class="row row-cols-1 row-cols-lg-2 g-3">
              <div class="col">
                <div class="card shadow-none border mb-0 bg-success">
                  <div class="card-body">
                    <div class="text-center">
                      <img src="assets/images/avatars/10.png" width="100" height="100"
                        class="rounded-circle raised bg-white p-1" alt="">
                    </div>
                    <div class="text-center mt-4">
                      <h5 class="mb-2 text-white">Andreo Simonds</h5>
                      <p class="mb-0 text-white">HR Manager</p>
                    </div>
                    <div class="d-flex align-items-center justify-content-around mt-5">
                      <div class="d-flex flex-column gap-2">
                        <h5 class="mb-0 text-white">798</h5>
                        <p class="mb-0 text-white">Posts</p>
                      </div>
                      <div class="d-flex flex-column gap-2">
                        <h5 class="mb-0 text-white">48K</h5>
                        <p class="mb-0 text-white">Following</p>
                      </div>
                      <div class="d-flex flex-column gap-2">
                        <h5 class="mb-0 text-white">24.3M</h5>
                        <p class="mb-0 text-white">Followers</p>
                      </div>
                    </div>
                    <hr class="border-light">
                    <div class="d-flex align-items-center justify-content-center gap-3">
                      <a href="javascript:;"
                        class="wh-48 d-flex align-items-center justify-content-center text-white rounded-circle"><i
                          class="bi bi-linkedin fs-5"></i></a>
                      <a href="javascript:;"
                        class="wh-48 d-flex align-items-center justify-content-center text-white rounded-circle"><i
                          class="bi bi-facebook fs-5"></i></a>
                      <a href="javascript:;"
                        class="wh-48 d-flex align-items-center justify-content-center text-white rounded-circle"><i
                          class="bi bi-instagram fs-5"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card shadow-none border mb-0 bg-purple">
                  <div class="card-body">
                    <div class="text-center">
                      <img src="assets/images/avatars/10.png" width="100" height="100"
                        class="rounded-circle raised bg-white p-1" alt="">
                    </div>
                    <div class="text-center mt-4">
                      <h5 class="mb-2 text-white">Andreo Simonds</h5>
                      <p class="mb-0 text-white">HR Manager</p>
                    </div>
                    <div class="d-flex align-items-center justify-content-around mt-5">
                      <div class="d-flex flex-column gap-2">
                        <h5 class="mb-0 text-white">798</h5>
                        <p class="mb-0 text-white">Posts</p>
                      </div>
                      <div class="d-flex flex-column gap-2">
                        <h5 class="mb-0 text-white">48K</h5>
                        <p class="mb-0 text-white">Following</p>
                      </div>
                      <div class="d-flex flex-column gap-2">
                        <h5 class="mb-0 text-white">24.3M</h5>
                        <p class="mb-0 text-white">Followers</p>
                      </div>
                    </div>
                    <hr class="border-light">
                    <div class="d-flex align-items-center justify-content-center gap-3">
                      <a href="javascript:;"
                        class="wh-48 d-flex align-items-center justify-content-center text-white rounded-circle"><i
                          class="bi bi-google fs-5"></i></a>
                      <a href="javascript:;"
                        class="wh-48 d-flex align-items-center justify-content-center text-white rounded-circle"><i
                          class="bi bi-pinterest fs-5"></i></a>
                      <a href="javascript:;"
                        class="wh-48 d-flex align-items-center justify-content-center text-white rounded-circle"><i
                          class="bi bi-whatsapp fs-5"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div><!--end row-->
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