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
                    <h4 class="card-title">Add service</h4>
                    <form class="forms-sample" action="{{url('service/add')}}" method="post" enctype="multipart/form-data">
                      <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}"/>
                      <div class="form-group">
                        <label>Service name</label>
                        <input type="text" class="form-control" name="name" placeholder="Service name">
                      </div>
                      <div class="form-outline form-group">
                        <label>Danh mục</label>
                        <select class="form-select" aria-label="Default select example" name="cat_id">
                        @foreach($ListCategory as $ListCat) 
                            <option value="{{$ListCat->id}}">{{$ListCat->cat_name}}</option>
                        @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                        <label>File upload</label>
                        <input class="form-control" type="file" name="image" >
                      </div>
                      <div class="form-group">
                        <label >Price</label>
                        <input type="text" class="form-control" name="price" placeholder="100 - 300">
                      </div>
                      <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="description" rows="4"></textarea>
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