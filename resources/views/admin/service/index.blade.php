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
                            <th>ID</th>
                            <th>Category</th>
                            <th>service name</th>
                            <th>description</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>price</th>
                            <th>Last update</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($ListService as $ListService) 
                        <tr>    
                            <td scope="row">{{$ListService->id}}</td>
                            <td>{{$ListService->cat_id}}</td>
                            <td>{{$ListService->name}}</td>
                            <td><textarea class="form-control" rows="4">{{$ListService->description}}</textarea></td>
                            <td><img src="{{asset('../upload/images/')}}/{{$ListService->image}}" alt="{{$ListService->name}}" /></td>
                            @if($ListService->status == 0)
                                <td>
                                    <p class="bg-warning">Hiden</p>
                                </td>
                            @else
                                <td>
                                    <p class="bg-success">Hoạt động</p>
                                </td>
                            @endif
                            @if($ListService->price == null)
                                <td>N/A</td>
                            @else
                                <td>{{$ListService->price}}$</td>
                            @endif
                            <td>{{$ListService->update_at}}</td>
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