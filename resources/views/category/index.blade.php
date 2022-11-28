<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('../css/style.css')}}">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <title>Task Daily</title>
</head>
<body>
<section class="vh-100 gradient-custom-2">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-12 col-xl-10">

        <div class="card mask-custom gradient-custom-2">
          <div class="card-body p-4 text-white">

            <div class="text-center pt-3 pb-2">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-todo-list/check1.webp"
                alt="Check" width="60">
              <h2 class="my-4">Task List</h2>
              <div class="row">
                <div class="col-sm-6">
                    <a href="{{url('task/create-task')}}">Thêm task</a>
                </div>
                <div class="col-sm-6">
                    <a href="{{url('/category/create-category')}}">Thêm danh mục</a>
                </div>
              </div>
            </div>

            <table class="table text-white mb-0">
              <thead>
                <tr>
                  <th scope="col">Tên danh mục</th>
                  <th scope="col">Nội dung</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach($CategoryList as $CatList) 
                <tr class="fw-normal">
                  <th>
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                      alt="avatar 1" style="width: 45px; height: auto;">
                    <span class="ms-2">{{$CatList->cat_name}}</span>
                  </th>
                  <td class="align-middle">
                    <span>{{$CatList->cat_contents}}</span>
                  </td>
                  <td class="align-middle">
                    <a href="{{url('task/delete',$CatList->id)}}" data-mdb-toggle="tooltip" title="Remove"><i
                        class="fas fa-trash-alt fa-lg text-warning me-3"></i></a>
                    <a href="{{url('task/edit',$CatList->id)}}" data-mdb-toggle="tooltip" title="edit"><i
                        class="fas fa-edit fa-lg"></i></a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>


          </div>
        </div>

      </div>
    </div>
  </div>
</section>
</body>
</html>