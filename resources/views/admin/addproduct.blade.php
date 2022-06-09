@extends('admin/adminmaster')

@section('body')
<h3>Add Products</h3>
<hr/>
<form method="post" action="#" enctype="multipart/form-data">
<div class="mb-3">
  <label for="product_name" class="form-label">Product Name</label>
  <input type="text" class="form-control" name="product_name">
</div>
<div class="mb-3">
  <label for="price" class="form-label">Product Price</label>
  <input type="number" class="form-control" name="product_price">
</div>
<div class="mb-3">
  <label for="image" class="form-label">Product Image</label>
  <input type="file" class="form-control" name="image">
</div>

<div class="mb-3">
  <label for="description" class="form-label">Product Description</label>
  <textarea class="form-control" name="description"></textarea>
</div>
<div class="mb-3">
  <label for="category" class="form-label">Category</label>
  <select class="form-control">
      <option value="">Select Category</option>
      @foreach($category as $c)
        <option value="{{$c->id}}">{{$c->category_name}}</option>
      @endforeach
  </select>
</div>


  <button type="submit" class="btn btn-success">Save</button>
</form>
@endsection