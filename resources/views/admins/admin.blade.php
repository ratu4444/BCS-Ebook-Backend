@extends('custom-layouts.master');

@section('main-content')

    <div class="row justify-content-center">
        <div class="col-8 col-md-8 col-lg-8">
            <div class="card card-primary">
                <form method="post" action="{{ route('storeAdmin') }}" class="needs-validation" novalidate>
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
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" required autofocus>

                            <div class="invalid-feedback">
                                @error('name')
                                    {{ $message }}
                                @else
                                    Name field is Required
                                @enderror
                            </div>

                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" required="">
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @else
                                <div class="invalid-feedback">
                                    Email field is Required
                                </div>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="number" name="phone" class="form-control @error('number') is-invalid @enderror" required="">
                            @error('number')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @else
                                <div class="invalid-feedback">
                                    Phone field is Required
                                </div>
                                @enderror
                        </div>

                        <div class="form-group mb-0">
                            <label>Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required="">
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @else
                                <div class="invalid-feedback">
                                    Password field is Required
                                </div>
                            @enderror
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
