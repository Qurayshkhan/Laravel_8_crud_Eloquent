<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Crud Eloquent</title>
</head>
<body>
    <div class="container">
       
        <h1>Crud Using Eloquent Method</h1>
        <div class="row">
            <div class="col-sm-6">
                <form action="" method="POST">
 @csrf

 <div class="mb-3">
    <label for="" class="form-label">Name</label>
    <input type="text" class="form-control" id="" name="name"     placeholder="Enter Your name">
  </div>
 <div class="mb-3">
    <label for="" class="form-label">City</label>
    <input type="text" class="form-control" id="" name=" city"placeholder="City">
  </div>
 <div class="mb-3">
    <label for="" class="form-label">Marks</label>
    <input type="text" name="marks"  class="form-control" id="" placeholder="Marks">
  </div>
  <input type="submit" class="btn btn-sm btn-primary" value="submit">
                </form>
                @if (session()->has('add'))
                <div class="alert alert-success  mt-5">
                    {{session('add')}}
                </div>
            @endif
                @if (session()->has('status'))
                <div class="alert alert-success mt-5">
                    {{session('status')}}
                </div>
            @endif
            @if (session()->has('delete'))
                <div class="alert alert-danger mt-5">
                    {{session('delete')}}
                </div>
            @endif
            </div>

            <div class="col-sm-6">
<table class="table table-hover tabele-striped text-center">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>City</th>
        <th>Marks</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
@foreach ($students as $stu)
<tr>
        <td>{{$stu->id}}</td>
        <td>{{$stu->name}}</td>
        <td>{{$stu->city}}</td>
        <td>{{$stu->marks}}</td>
        <td>
            <a href="{{url('edit',$stu->id)}}"><button class="btn btn-sm btn-primary">Edit</button></a>
            <a href="{{url('delete',$stu->id)}}"><button class="btn btn-sm btn-danger">Delete</button></a>
        </td>
      </tr>
@endforeach

</tbody>
</table>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>