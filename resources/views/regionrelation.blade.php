<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Region Relation Page</title>
  </head>


<body>
    @if($errors->any())
    <div class="alert alert-danger">
    @foreach($errors->all() as $key => $value)
        <p class="text-center">{{$value}}</p>
    @endforeach
    </div>
    @endif

@if($success=session('success'))
<div class="alert alert-success">
<p class="text-center">{{$success}}</p>
</div>
@endif
@if($error=session('error'))
<div class="alert alert-danger">
<p class="text-center">{{$error}}</p>
</div>
@endif
<!-- <a href="" class="btn btn-warning">LIST</a> -->
    <div class="container">
    <div class="panel panel-default">
  <div class="panel-heading"><h3 class="text-left">Region Relation Page</h3></div>
  <div class="panel-body">
<form action ="/region/addRelation" method = "POST">

<div class="form-group">
    <label for="exampleInputEmail1">Region Name</label>
    <input type="text" class="form-control"  name="region_name" id="exampleInputEmail1" aria-describedby="emailHelp" >
     </div>
 <div class="container2">
 <div class="form-group">
    <label for="exampleInputEmail1">Store Name</label>
        </div>
    @foreach($store_list as $value)
 <input type="checkbox" id="vehicle1" name="store_name[]" value="{{$value->id}}">
 <label for="vehicle1"> {{$value->store_name}}</label><br>
 @endforeach
 </div>

    
  <input type="hidden" name="_token" value="{{csrf_token()}}">
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
</body>
</html>