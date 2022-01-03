<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>
    <div class="container">
        <h1>Crud Using Eloquent Method</h1>
        <div class="row">
            <div class="col-sm-6">
                <form action="" method="POST">
 @csrf
@method("PUT")
 <div class="mb-3">
    <label for="" class="form-label">Name</label>
    <input type="text" class="form-control" id="" name="name"     placeholder="Enter Your name" value="{{$students->name}}">
  </div>
 <div class="mb-3">
    <label for="" class="form-label">City</label>
    <input type="text" class="form-control" id="" name=" city"placeholder="City" value="{{$students->city}}">
  </div>
 <div class="mb-3">
    <label for="" class="form-label">Marks</label>
    <input type="text" name="marks"  class="form-control" id="" placeholder="Marks" value="{{$students->marks}}">
  </div>
  <input type="submit" class="btn btn-sm btn-primary" value="update">
                </form>
            </div>
</body>
</html>