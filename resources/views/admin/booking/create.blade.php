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
                    <h4 class="card-title">Add booking oder</h4>
                    <form class="forms-sample" action="{{url('booking')}}" method="post" >
                      <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}"/>
                      <div class="form-group">
                        <label for="exampleInputName1">Email</label>
                        <input type="text" class="form-control" name="book_email" placeholder="xxx@gmail.com">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Number phone</label>
                        <input type="text" class="form-control" name="book_phone" placeholder="0123456789" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Service</label>
                        <select class="form-select" aria-label="Default select example" name="book_service_id" required>
                          <option selected>Service</option>
                          @foreach($ListService as $ListService) 
                          <option value="{{$ListService->id}}">{{$ListService->name}}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Date</label>
                        <input id="startDate" class="form-control" type="date" name="book_date" required/>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Time</label>
                        <select class="form-select" aria-label="Default select example" name="book_time" required>
                          <option selected>Select Time</option>
                          <option value="8:00 - 9:00">8:00 - 9:00</option>
                          <option value="9:00 - 10:00">9:00 - 10:00</option>
                          <option value="10:00 - 11:00">10:00 - 11:00</option>
                          <option value="11:00 - 12:00">11:00 - 12:00</option>
                          <option value="3:00 - 14:00">13:00 - 14:00</option>
                          <option value="14:00 - 15:00">14:00 - 15:00</option>
                          <option value="15:00 - 16:00">15:00 - 16:00</option>
                          <option value="16:00 - 17:00">16:00 - 17:00</option>
                          <option value="17:00 - 18:00">17:00 - 18:00</option>
                          <option value="18:00 - 19:00">18:00 - 19:00</option>
                          <option value="19:00 - 20:00">19:00 - 20:00</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Message</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="book_message" rows="3"></textarea>
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