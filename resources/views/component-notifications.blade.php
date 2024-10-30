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
              <li class="breadcrumb-item active" aria-current="page">Notifications</li>
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


      <div class="row row-cols-1 row-cols-lg-5">
         <div class="col">
          <div class="card p-2 rounded-4 cursor-pointer text-center" onclick="default_noti()">
             <div class="card-body bg-grd-primary rounded-4">
              <div class="d-flex flex-column gap-2">
                <a href="javascript:;" class="mb-3 text-white rounded-circle d-flex align-items-center justify-content-center">
                  <i class="material-icons-outlined fs-2">notifications</i>
                </a>
                <h6 class="mb-0">Default</h6>
              </div>
             </div>
            </div>
         </div>
         <div class="col">
          <div class="card p-2 rounded-4 cursor-pointer text-center">
             <div class="card-body bg-grd-info rounded-4" onclick="info_noti()">
              <div class="d-flex flex-column gap-2">
                <a href="javascript:;" class="mb-3 text-white rounded-circle d-flex align-items-center justify-content-center">
                  <i class="material-icons-outlined fs-2">info</i>
                </a>
                <h6 class="mb-0">Info</h6>
              </div>
             </div>
            </div>
         </div>
         <div class="col">
          <div class="card p-2 rounded-4 cursor-pointer text-center">
             <div class="card-body bg-grd-warning rounded-4" onclick="warning_noti()">
              <div class="d-flex flex-column gap-2">
                <a href="javascript:;" class="mb-3 text-white rounded-circle d-flex align-items-center justify-content-center">
                  <i class="material-icons-outlined fs-2">warning_amber</i>
                </a>
                <h6 class="mb-0">Warning</h6>
              </div>
             </div>
            </div>
         </div>
         <div class="col">
          <div class="card p-2 rounded-4 cursor-pointer text-center">
             <div class="card-body bg-grd-danger rounded-4" onclick="error_noti()">
              <div class="d-flex flex-column gap-2">
                <a href="javascript:;" class="mb-3 text-white rounded-circle d-flex align-items-center justify-content-center">
                  <i class="material-icons-outlined fs-2">dangerous</i>
                </a>
                <h6 class="mb-0">Danger</h6>
              </div>
             </div>
            </div>
         </div>
         <div class="col">
          <div class="card p-2 rounded-4 cursor-pointer text-center">
             <div class="card-body bg-grd-success rounded-4" onclick="success_noti()">
              <div class="d-flex flex-column gap-2">
                <a href="javascript:;" class="mb-3 text-white rounded-circle d-flex align-items-center justify-content-center">
                  <i class="material-icons-outlined fs-2">check_circle</i>
                </a>
                <h6 class="mb-0">Success</h6>
              </div>
             </div>
            </div>
         </div>
      </div><!--end row-->
      

      <h6 class="mb-0 text-uppercase">Rounded Corners Notifications</h6>
      <hr>
      <div class="row row-cols-1 row-cols-lg-5">
        <div class="col">
         <div class="card p-2 rounded-4 cursor-pointer text-center" onclick="round_default_noti()">
            <div class="card-body bg-grd-primary rounded-4">
             <div class="d-flex flex-column gap-2">
               <a href="javascript:;" class="mb-3 text-white rounded-circle d-flex align-items-center justify-content-center">
                 <i class="material-icons-outlined fs-2">notifications</i>
               </a>
               <h6 class="mb-0">Default</h6>
             </div>
            </div>
           </div>
        </div>
        <div class="col">
         <div class="card p-2 rounded-4 cursor-pointer text-center">
            <div class="card-body bg-grd-info rounded-4" onclick="round_info_noti()">
             <div class="d-flex flex-column gap-2">
               <a href="javascript:;" class="mb-3 text-white rounded-circle d-flex align-items-center justify-content-center">
                 <i class="material-icons-outlined fs-2">info</i>
               </a>
               <h6 class="mb-0">Info</h6>
             </div>
            </div>
           </div>
        </div>
        <div class="col">
         <div class="card p-2 rounded-4 cursor-pointer text-center">
            <div class="card-body bg-grd-warning rounded-4" onclick="round_warning_noti()">
             <div class="d-flex flex-column gap-2">
               <a href="javascript:;" class="mb-3 text-white rounded-circle d-flex align-items-center justify-content-center">
                 <i class="material-icons-outlined fs-2">warning_amber</i>
               </a>
               <h6 class="mb-0">Warning</h6>
             </div>
            </div>
           </div>
        </div>
        <div class="col">
         <div class="card p-2 rounded-4 cursor-pointer text-center">
            <div class="card-body bg-grd-danger rounded-4" onclick="round_error_noti()">
             <div class="d-flex flex-column gap-2">
               <a href="javascript:;" class="mb-3 text-white rounded-circle d-flex align-items-center justify-content-center">
                 <i class="material-icons-outlined fs-2">dangerous</i>
               </a>
               <h6 class="mb-0">Danger</h6>
             </div>
            </div>
           </div>
        </div>
        <div class="col">
         <div class="card p-2 rounded-4 cursor-pointer text-center">
            <div class="card-body bg-grd-success rounded-4" onclick="round_success_noti()">
             <div class="d-flex flex-column gap-2">
               <a href="javascript:;" class="mb-3 text-white rounded-circle d-flex align-items-center justify-content-center">
                 <i class="material-icons-outlined fs-2">check_circle</i>
               </a>
               <h6 class="mb-0">Success</h6>
             </div>
            </div>
           </div>
        </div>
     </div><!--end row-->


      <h6 class="mb-0 text-uppercase">Notifications With image</h6>
      <hr>
      <div class="row row-cols-1 row-cols-lg-5">
        <div class="col">
         <div class="card p-2 rounded-4 cursor-pointer text-center" onclick="img_default_noti()">
            <div class="card-body bg-grd-primary rounded-4">
             <div class="d-flex flex-column gap-2">
               <a href="javascript:;" class="mb-3 text-white rounded-circle d-flex align-items-center justify-content-center">
                 <i class="material-icons-outlined fs-2">notifications</i>
               </a>
               <h6 class="mb-0">Default</h6>
             </div>
            </div>
           </div>
        </div>
        <div class="col">
         <div class="card p-2 rounded-4 cursor-pointer text-center">
            <div class="card-body bg-grd-info rounded-4" onclick="img_info_noti()">
             <div class="d-flex flex-column gap-2">
               <a href="javascript:;" class="mb-3 text-white rounded-circle d-flex align-items-center justify-content-center">
                 <i class="material-icons-outlined fs-2">info</i>
               </a>
               <h6 class="mb-0">Info</h6>
             </div>
            </div>
           </div>
        </div>
        <div class="col">
         <div class="card p-2 rounded-4 cursor-pointer text-center">
            <div class="card-body bg-grd-warning rounded-4" onclick="img_warning_noti()">
             <div class="d-flex flex-column gap-2">
               <a href="javascript:;" class="mb-3 text-white rounded-circle d-flex align-items-center justify-content-center">
                 <i class="material-icons-outlined fs-2">warning_amber</i>
               </a>
               <h6 class="mb-0">Warning</h6>
             </div>
            </div>
           </div>
        </div>
        <div class="col">
         <div class="card p-2 rounded-4 cursor-pointer text-center">
            <div class="card-body bg-grd-danger rounded-4" onclick="img_error_noti()">
             <div class="d-flex flex-column gap-2">
               <a href="javascript:;" class="mb-3 text-white rounded-circle d-flex align-items-center justify-content-center">
                 <i class="material-icons-outlined fs-2">dangerous</i>
               </a>
               <h6 class="mb-0">Danger</h6>
             </div>
            </div>
           </div>
        </div>
        <div class="col">
         <div class="card p-2 rounded-4 cursor-pointer text-center">
            <div class="card-body bg-grd-success rounded-4" onclick="img_success_noti()">
             <div class="d-flex flex-column gap-2">
               <a href="javascript:;" class="mb-3 text-white rounded-circle d-flex align-items-center justify-content-center">
                 <i class="material-icons-outlined fs-2">check_circle</i>
               </a>
               <h6 class="mb-0">Success</h6>
             </div>
            </div>
           </div>
        </div>
     </div><!--end row-->


      <h6 class="mb-0 text-uppercase">Alternative Position</h6>
      <hr>
      <div class="row row-cols-1 row-cols-lg-5">
        <div class="col">
         <div class="card p-2 rounded-4 cursor-pointer text-center" onclick="pos1_default_noti()">
            <div class="card-body bg-grd-primary rounded-4">
             <div class="d-flex flex-column gap-2">
               <a href="javascript:;" class="mb-3 text-white rounded-circle d-flex align-items-center justify-content-center">
                 <i class="material-icons-outlined fs-2">notifications</i>
               </a>
               <h6 class="mb-0">Default</h6>
             </div>
            </div>
           </div>
        </div>
        <div class="col">
         <div class="card p-2 rounded-4 cursor-pointer text-center">
            <div class="card-body bg-grd-info rounded-4" onclick="pos2_info_noti()">
             <div class="d-flex flex-column gap-2">
               <a href="javascript:;" class="mb-3 text-white rounded-circle d-flex align-items-center justify-content-center">
                 <i class="material-icons-outlined fs-2">info</i>
               </a>
               <h6 class="mb-0">Info</h6>
             </div>
            </div>
           </div>
        </div>
        <div class="col">
         <div class="card p-2 rounded-4 cursor-pointer text-center">
            <div class="card-body bg-grd-warning rounded-4" onclick="pos3_warning_noti()">
             <div class="d-flex flex-column gap-2">
               <a href="javascript:;" class="mb-3 text-white rounded-circle d-flex align-items-center justify-content-center">
                 <i class="material-icons-outlined fs-2">warning_amber</i>
               </a>
               <h6 class="mb-0">Warning</h6>
             </div>
            </div>
           </div>
        </div>
        <div class="col">
         <div class="card p-2 rounded-4 cursor-pointer text-center">
            <div class="card-body bg-grd-danger rounded-4" onclick="pos4_error_noti()">
             <div class="d-flex flex-column gap-2">
               <a href="javascript:;" class="mb-3 text-white rounded-circle d-flex align-items-center justify-content-center">
                 <i class="material-icons-outlined fs-2">dangerous</i>
               </a>
               <h6 class="mb-0">Danger</h6>
             </div>
            </div>
           </div>
        </div>
        <div class="col">
         <div class="card p-2 rounded-4 cursor-pointer text-center">
            <div class="card-body bg-grd-success rounded-4" onclick="pos5_success_noti()">
             <div class="d-flex flex-column gap-2">
               <a href="javascript:;" class="mb-3 text-white rounded-circle d-flex align-items-center justify-content-center">
                 <i class="material-icons-outlined fs-2">check_circle</i>
               </a>
               <h6 class="mb-0">Success</h6>
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
<!--notification js -->
<script src="assets/plugins/notifications/js/lobibox.min.js"></script>
<script src="assets/plugins/notifications/js/notifications.min.js"></script>
<script src="assets/plugins/notifications/js/notification-custom-script.js"></script>
<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
<script src="assets/js/main.js"></script>
@endsection