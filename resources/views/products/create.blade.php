<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{url('/create')}}" method="POST">
    @csrf
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Name</label>
    <input type="text" class="form-control" name="name"  id="exampleFormControlInput1" placeholder="enter product name">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Product Description</label>
    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Price</label>
    <input type="text" class="form-control" name="price" id="exampleFormControlInput1" placeholder="product cost">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Stock</label>
    <input type="text" class="form-control" name="stock" id="exampleFormControlInput1" placeholder="your stock">
  </div>
  <div class="mb-3">
   <button class="btn btn-primary">
    Create Product
   </button>
   <button class="btn btn-success">
    Edit
   </button>
   <button class="btn btn-danger">
    Delete
   </button>
  </div>
</form>
</div>
@endsection