<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        html,
        body {
            display: flex;
            justify-content: center;
            font-family: Roboto, Arial, sans-serif;
            font-size: 15px;
        }

        form {
            border: 5px solid #f1f1f1;
        }

        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 16px 8px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            background-color: #8ebf42;
            color: white;
            padding: 14px 0;
            margin: 10px 0;
            border: none;
            cursor: grabbing;
            width: 100%;
        }

        h1 {
            text-align: center;
            fone-size: 18;
        }

        button:hover {
            opacity: 0.8;
        }

        .formcontainer {
            text-align: left;
            margin: 24px 50px 12px;
        }

        .container {
            padding: 16px 0;
            text-align: left;
        }

        span.psw {
            float: right;
            padding-top: 0;
            padding-right: 15px;
        }

        /* Change styles for span on extra small screens */
        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }
        }
    </style>
</head>
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

<body>
    <form action="/store/addRelation" method="post">
        <h1>ADD REGION TO YOUR STORE</h1>
        <div class="formcontainer">
            <hr />
            <div class="container">
                <label for="uname"><strong>STORE NAME</strong></label>
                <input type="text" placeholder="Enter Store  Name" name="store_name" >
            </div>
            <div class="container2">
 <div class="form-group">
    <label for="exampleInputEmail1">Region Name</label>
        </div>
        <div class="container2">
 <div class="form-group">
    <label for="exampleInputEmail1">Region Name</label>
        </div>
    @foreach($region_list as $value)
 <input type="checkbox" id="vehicle1" name="region_name[]" value="{{$value->id}}">
 <label for="vehicle1"> {{$value->region_name}}</label><br>
 @endforeach
 </div>
 </div>

            <button type="submit">ADD</button>
            <div class="container" style="background-color: #eee">
            <input type="hidden" name="_token" value="{{csrf_token()}}">




            </div>
    </form>
</body>

</html>