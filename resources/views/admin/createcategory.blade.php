@extends('admin/adminmaster')

@section('body')
<h3>Create Category</h3>
<hr/>
<form method="post" action="#">
<div class="mb-3">
  <label for="category_name" class="form-label">Category Name</label>
  <input type="text" class="form-control" name="category_name">
</div>
  <button type="submit" class="btn btn-success">Save</button>
</form>
@endsection