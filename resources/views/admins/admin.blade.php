@extends('custom-layouts.master');

@section('main-content')

    <div class="row justify-content-center">
        <div class="col-8 col-md-8 col-lg-8">
            <div class="card">
                <form method="post" action="{{ route('storeAdmin') }}">
                    @csrf
                    <div class="card-header">
                        <h4>Admin</h4>
                    </div>

                    <div class="card-header">
                        <h6>All Admin</h6>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <label>Your Name</label>
                            <input type="text" name="name" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="number" name="phone" class="form-control" required="">
                        </div>
                        <div class="form-group mb-0">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" required="">
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button class="btn btn-primary">Submit</button>
{{--                        <button class="btn btn-primary">Rubmit</button>--}}
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
