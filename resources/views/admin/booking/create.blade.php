@extends('admin.master')
@section('title','add blog')
@section('content')
<!-- partial -->
<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Form elements </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Forms</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Form elements</li>
                </ol>
              </nav>
            </div>
            <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Add open hours</h4>
                    <form class="forms-sample" action="{{url('open-hours/add')}}" method="post" >
                      <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}"/>
                      <div class="form-group">
                        <label for="exampleInputName1">Start date</label>
                        <input type="text" class="form-control" name="start_date" placeholder="Mo">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">End date</label>
                        <input type="text" class="form-control" name="end_date" placeholder="Fr">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Start time</label>
                        <input type="text" class="form-control" name="start_time" placeholder="7:00 AM">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">End time</label>
                        <input type="text" class="form-control" name="end_time" placeholder="9:00 PM">
                      </div>
                      <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid d-flex justify-content-between">
              <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © bootstrapdash.com 2021</span>
              <span class="float-none float-sm-end mt-1 mt-sm-0 text-end"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin template</a> from Bootstrapdash.com</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      @endsection