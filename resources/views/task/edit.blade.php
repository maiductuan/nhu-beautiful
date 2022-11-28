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
    <title>edit</title>
</head>
<body>
<section class="vh-100 gradient-custom-2">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-12 col-xl-10">

        <div class="card mask-custom gradient-custom-2">
          <div class="card-body p-4 text-white">
          <form action="{{url('task/edit/update',$edittask->id)}}" method="post">
            <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}"/>
            <input type="hidden" id="_token" name="id" value="{{$edittask->id}}"/>
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row mb-4">
                <div class="col">
                <div class="form-outline">
                  <label class="form-label" for="form6Example2">Danh mục</label>
                  <select class="form-select" aria-label="Default select example" name="cat_id">
                    @foreach($ListCategory as $ListCat) 
                      <option value="{{$ListCat->id}}">{{$ListCat->cat_name}}</option>
                    @endforeach
                  </select>
                </div>
                </div>
                <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="form6Example2">Task</label>
                    <input type="text" id="form6Example2" name="task_title" class="form-control" value="{{$edittask->task_title}}"/>
                </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col">
                <div class="form-outline">
                <select class="form-select" aria-label="Default select example" name="task_status">
                    <option value="1">Todo</option>
                    <option value="2">Đang làm</option>
                    <option value="3">Cháy</option>
                    <option value="4">Done</option>
                </select>
                </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col">
                  <div class="form-outline">
                    <label for="startDate">Start</label>
                    <!-- <input id="startDate" class="form-control" type="date" value="{{\Carbon\Carbon::parse($edittask->created_at)->format('d/m/Y')}}"/> -->
                    <input class="form-control" value="{{\Carbon\Carbon::parse($edittask->created_at)->format('d/m/Y')}}"/>
                    </div>
                </div>
                <div class="col">
                  <div class="form-outline">
                    <label for="startDate">Last update</label>
                    @if(is_null($edittask->update_at))
                      <input class="form-control" class="form-control" value="N/a" name="update_at" readonly/>
                    @else
                      <input class="form-control" name="update_at" value="{{\Carbon\Carbon::parse($edittask->update_at)->format('d/m/Y')}}" readonly/>
                    @endif
                    </div>
                </div>
            </div>
            <!-- Message input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form6Example7">Nội dung</label>
                <textarea class="form-control" id="form6Example7" name="task_contents" rows="4" >{{$edittask->task_contents}}</textarea>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">Update</button>
            </form>
            </div>
        </div>

      </div>
    </div>
  </div>
</section>
</body>
</html>