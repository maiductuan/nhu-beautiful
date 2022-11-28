@extends('admin.master')
@section('title','add blog')
@section('content')

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">Recent Tickets</h4>
                <div class="table-responsive">
                    <table class="table">
                    <thead>
                        <tr>
                            <th>  </th>
                            <th> Mẫu template </th>
                            <th> Mô tả </th>
                            <th> Status </th>
                            <th> create date </th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($ListTemplate as $listtem) 
                        <tr>    
                            <td>
                                <img width="100px" src="../upload/images/{{$listtem->image}}" alt="image">
                            </td>
                            <td>{{$listtem->name}}</td>
                            <td>{{$listtem->description}}</td>
                            <td>
                                @if($listtem->status==0)
                                <label class="badge badge-gradient-success">Active</label>
                                @else
                                <label class="badge badge-gradient-success">Disable</label>
                                @endif
                            </td>   
                            <td> {{$listtem->created_at}} </td>
                        </tr>
                    @endforeach
                    </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
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