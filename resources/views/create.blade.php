@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Add new Product</title>
  <link rel="stylesheet" href="{{ url('css/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ url('css/design.css') }}">
  <script type="text/javascript" src="{{url('js/bootstrap.js')}}"></script>
  <script type="text/javascript" src="{{url('js/jquery-3.3.1.js')}}"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <div class="container" style="padding-left: 10px;">
    <form method="POST" action="{{ url('/insert')}}" enctype="multipart/form-data">

      {{csrf_field()}}
      @if(count($errors)>0)
      @foreach($errors->all() as $error)
      <div class="alert alert-danger col-md-8">
        {{$error}}
      </div>
      @endforeach
      <br><br>
      @endif

      <div class="form-row">
        <div class="form-group col-md-4">
          <label  for="Product">Product name</label>
          <input name="name" type="text" class="form-control" id="Product" placeholder="Your Product name">
        </div>
        <div class="form-group col-md-4">
          <label  for="Price">Price</label>
          <input name="price" type="number" class="form-control" id="Price" placeholder="Enter Price">
        </div>
      </div>      
      <div class="custom-file col-md-8">
        <input type="file" name="upload_photo" class="custom-file-input" id="upload_photo" >
        <label class="custom-file-label" for="upload_photo">Choose file...</label>
        <div class="invalid-feedback">Example invalid custom file feedback</div>
      </div>
      <br><br>
      <select id="phone_type" name="type" class="custom-select col-md-8">
        <option value="Apple">Apple</option>
        <option value="Samsung">Samsung</option>
        <option value="SONY">SONY</option>
        <option value="XIOMI">XIAOMI</option>
        <option value="Artel">Artel</option>
        <option value="Others">Others:</option>
      </select>
      <br><br>
      <div class="form-group col-md-8">
        <label  for="textarea">Write Description</label>
        <textarea name="description" class="form-control" id="textarea" rows="3"></textarea>
      </div>
      <button type="submit" style="background: #424242;" class="btn btn-primary">Add Product</button>
      <a class="btn btn-primary" href="{{ url('/')}}">Cancel</a>
    </form>
  </div>
</body>
</html>
@endsection