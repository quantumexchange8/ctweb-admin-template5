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
          <li class="breadcrumb-item active" aria-current="page">Blank Page</li>
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
          <div class="dropdown-divider"></div><a class="dropdown-item" href="javascript:;">Separated link</a>
        </div>
      </div>
    </div>
  </div>
  <!--end breadcrumb-->
    
  <div class="card rounded-4" style="height:800px;">
    <div class="card-body">
      <h4>Where does it come from?</h4>
    <p class="mb-4">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
    <h4>Where can I get some?</h4>
    <p class="mb-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered 
      alteration in some form, by injected humour, or randomised words which don't look even slightly believable. 
      If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden
       in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks 
       as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin 
       words, combined with a handful 
      of model sentence structures, to generate Lorem Ipsum which looks reasonable. 
      The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>

      <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
         Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
         galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, 
         but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
         with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker 
         including versions of Lorem Ipsum.</p>
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