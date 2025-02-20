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
              <li class="breadcrumb-item active" aria-current="page">Products</li>
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

      <div class="product-count d-flex align-items-center gap-3 gap-lg-4 mb-4 fw-medium flex-wrap font-text1">
        <a href="javascript:;"><span class="me-1">All</span><span class="text-secondary">(85472)</span></a>
        <a href="javascript:;"><span class="me-1">Pending Payment</span><span class="text-secondary">(86)</span></a>
        <a href="javascript:;"><span class="me-1">Incomplete</span><span class="text-secondary">(76)</span></a>
        <a href="javascript:;"><span class="me-1">Completed</span><span class="text-secondary">(8759)</span></a>
        <a href="javascript:;"><span class="me-1">Refunded</span><span class="text-secondary">(769)</span></a>
        <a href="javascript:;"><span class="me-1">Failed</span><span class="text-secondary">(42)</span></a>
      </div>

      <div class="row g-3">
        <div class="col-auto">
          <div class="position-relative">
            <input class="form-control px-5" type="search" placeholder="Search Customers">
            <span class="material-icons-outlined position-absolute ms-3 translate-middle-y start-0 top-50 fs-5">search</span>
          </div>
        </div>
        <div class="col-auto flex-grow-1 overflow-auto">
          <div class="btn-group position-static">
            <div class="btn-group position-static">
              <button type="button" class="btn border btn-filter dropdown-toggle px-4" data-bs-toggle="dropdown" aria-expanded="false">
                Payment Status
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
              </ul>
            </div>
            <div class="btn-group position-static">
              <button type="button" class="btn border btn-filter dropdown-toggle px-4" data-bs-toggle="dropdown" aria-expanded="false">
                Completed
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
              </ul>
            </div>
            <div class="btn-group position-static">
              <button type="button" class="btn border btn-filter dropdown-toggle px-4" data-bs-toggle="dropdown" aria-expanded="false">
                More Filters
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
              </ul>
            </div>
          </div>  
        </div>
        <div class="col-auto">
          <div class="d-flex align-items-center gap-2 justify-content-lg-end">
             <button class="btn btn-filter px-4"><i class="bi bi-box-arrow-right me-2"></i>Export</button>
             <button class="btn btn-primary px-4"><i class="bi bi-plus-lg me-2"></i>Add Order</button>
          </div>
        </div>
      </div><!--end row-->

      <div class="card mt-4">
        <div class="card-body">
          <div class="customer-table">
            <div class="table-responsive white-space-nowrap">
               <table class="table align-middle">
                <thead class="table-light">
                  <tr>
                    <th>
                      <input class="form-check-input" type="checkbox">
                    </th>
                    <th>Order Id</th>
                    <th>Price</th>
                    <th>Customer</th>
                    <th>Payment Status</th>
                    <th>Completed Payment</th>
                    <th>Delivery Type</th>
                    <th>Date</th>
                  </tr>
                 </thead>
                 <tbody>
                   <tr>
                     <td>
                       <input class="form-check-input" type="checkbox">
                     </td>
                     <td>
                      <a href="javascript:;">#2415</a>
                     </td>
                     <td>$98</td>
                     <td>
                      <a class="d-flex align-items-center gap-3" href="javascript:;">
                        <div class="customer-pic">
                          <img src="assets/images/avatars/01.png" class="rounded-circle" width="40" height="40" alt="">
                        </div>
                        <p class="mb-0 customer-name fw-bold">Andrew Carry</p>
                      </a>
                     </td>
                     <td><span class="lable-table bg-success-subtle text-success rounded border border-success-subtle font-text2 fw-bold">Completed<i class="bi bi-check2 ms-2"></i></span></td>
                     <td><span class="lable-table bg-danger-subtle text-danger rounded border border-danger-subtle font-text2 fw-bold">Failed<i class="bi bi-x-lg ms-2"></i></span></td>
                     <td>Cash on delivery</td>
                     <td>Nov 12, 10:45 PM</td>
                   </tr>
                   <tr>
                    <td>
                      <input class="form-check-input" type="checkbox">
                    </td>
                    <td>
                     <a href="javascript:;">#7845</a>
                    </td>
                    <td>$110</td>
                    <td>
                     <a class="d-flex align-items-center gap-3" href="javascript:;">
                       <div class="customer-pic">
                         <img src="assets/images/avatars/02.png" class="rounded-circle" width="40" height="40" alt="">
                       </div>
                       <p class="mb-0 customer-name fw-bold">Andrew Carry</p>
                     </a>
                    </td>
                    <td><span class="lable-table bg-warning-subtle text-warning rounded border border-warning-subtle font-text2 fw-bold">Pending<i class="bi bi-info-circle ms-2"></i></span></td>
                    <td><span class="lable-table bg-primary-subtle text-primary rounded border border-primary-subtle font-text2 fw-bold">Completed<i class="bi bi-check2-all ms-2"></i></span></td>
                    <td>Cash on delivery</td>
                    <td>Nov 12, 10:45 PM</td>
                  </tr>
                  <tr>
                    <td>
                      <input class="form-check-input" type="checkbox">
                    </td>
                    <td>
                     <a href="javascript:;">#5674</a>
                    </td>
                    <td>$86</td>
                    <td>
                     <a class="d-flex align-items-center gap-3" href="javascript:;">
                       <div class="customer-pic">
                         <img src="assets/images/avatars/03.png" class="rounded-circle" width="40" height="40" alt="">
                       </div>
                       <p class="mb-0 customer-name fw-bold">Andrew Carry</p>
                     </a>
                    </td>
                    <td><span class="lable-table bg-primary-subtle text-primary rounded border border-primary-subtle font-text2 fw-bold">Completed<i class="bi bi-check2-all ms-2"></i></span></td>
                    <td><span class="lable-table bg-danger-subtle text-danger rounded border border-danger-subtle font-text2 fw-bold">Failed<i class="bi bi-x-lg ms-2"></i></span></td>
                    <td>Cash on delivery</td>
                    <td>Nov 12, 10:45 PM</td>
                  </tr>
                  <tr>
                    <td>
                      <input class="form-check-input" type="checkbox">
                    </td>
                    <td>
                     <a href="javascript:;">#6678</a>
                    </td>
                    <td>$78</td>
                    <td>
                     <a class="d-flex align-items-center gap-3" href="javascript:;">
                       <div class="customer-pic">
                         <img src="assets/images/avatars/04.png" class="rounded-circle" width="40" height="40" alt="">
                       </div>
                       <p class="mb-0 customer-name fw-bold">Andrew Carry</p>
                     </a>
                    </td>
                    <td><span class="lable-table bg-success-subtle text-success rounded border border-success-subtle font-text2 fw-bold">Paid<i class="bi bi-check2 ms-2"></i></span></td>
                    <td><span class="lable-table bg-danger-subtle text-danger rounded border border-danger-subtle font-text2 fw-bold">Failed<i class="bi bi-x-lg ms-2"></i></span></td>
                    <td>Cash on delivery</td>
                    <td>Nov 12, 10:45 PM</td>
                  </tr>
                  <tr>
                    <td>
                      <input class="form-check-input" type="checkbox">
                    </td>
                    <td>
                     <a href="javascript:;">#2367</a>
                    </td>
                    <td>$69</td>
                    <td>
                     <a class="d-flex align-items-center gap-3" href="javascript:;">
                       <div class="customer-pic">
                         <img src="assets/images/avatars/05.png" class="rounded-circle" width="40" height="40" alt="">
                       </div>
                       <p class="mb-0 customer-name fw-bold">Andrew Carry</p>
                     </a>
                    </td>
                    <td><span class="lable-table bg-danger-subtle text-danger rounded border border-danger-subtle font-text2 fw-bold">Failed<i class="bi bi-x-lg ms-2"></i></span></td>
                    <td><span class="lable-table bg-warning-subtle text-warning rounded border border-warning-subtle font-text2 fw-bold">Pending<i class="bi bi-info-circle ms-2"></i></span></td>
                    <td>Cash on delivery</td>
                    <td>Nov 12, 10:45 PM</td>
                  </tr>
                  <tr>
                    <td>
                      <input class="form-check-input" type="checkbox">
                    </td>
                    <td>
                     <a href="javascript:;">#9870</a>
                    </td>
                    <td>$49</td>
                    <td>
                     <a class="d-flex align-items-center gap-3" href="javascript:;">
                       <div class="customer-pic">
                         <img src="assets/images/avatars/06.png" class="rounded-circle" width="40" height="40" alt="">
                       </div>
                       <p class="mb-0 customer-name fw-bold">Andrew Carry</p>
                     </a>
                    </td>
                    <td><span class="lable-table bg-danger-subtle text-danger rounded border border-danger-subtle font-text2 fw-bold">Failed<i class="bi bi-x-lg ms-2"></i></span></td>
                    <td><span class="lable-table bg-success-subtle text-success rounded border border-success-subtle font-text2 fw-bold">Completed<i class="bi bi-check2 ms-2"></i></span></td>
                    <td>Cash on delivery</td>
                    <td>Nov 12, 10:45 PM</td>
                  </tr>
                  <tr>
                    <td>
                      <input class="form-check-input" type="checkbox">
                    </td>
                    <td>
                     <a href="javascript:;">#3456</a>
                    </td>
                    <td>$65</td>
                    <td>
                     <a class="d-flex align-items-center gap-3" href="javascript:;">
                       <div class="customer-pic">
                         <img src="assets/images/avatars/07.png" class="rounded-circle" width="40" height="40" alt="">
                       </div>
                       <p class="mb-0 customer-name fw-bold">Andrew Carry</p>
                     </a>
                    </td>
                    <td><span class="lable-table bg-success-subtle text-success rounded border border-success-subtle font-text2 fw-bold">Completed<i class="bi bi-check2 ms-2"></i></span></td>
                    <td><span class="lable-table bg-danger-subtle text-danger rounded border border-danger-subtle font-text2 fw-bold">Failed<i class="bi bi-x-lg ms-2"></i></span></td>
                    <td>Cash on delivery</td>
                    <td>Nov 12, 10:45 PM</td>
                  </tr>
                 </tbody>
               </table>
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