@extends('master')

@section('body')
 <div class="container" style="width:50%;margin-left:25%;">
  <div class="row justify-content-md-center">
      <div class="col-8">
            <div class="card">
                <form action="#">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Full Name</label>
                        <input type="text" name="full_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" name="address" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Confirm Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <hr/>
                    <button type="submit" class="btn btn-success">Save</button>

                </form>
            </div>
        </div>
  </div>
  </div>
@endsection