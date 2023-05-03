@extends('custom-layouts.master')

@section('main-content')

<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered table-md">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Number</th>
                <th>Action</th>
            </tr>
            @foreach($shows as $show)
            <tr>
                <td>{{ $show->id }}</td>
                <td>{{ $show->name }}</td>
                <td>{{ $show->email }}</td>
                <td>{{ $show->number}}</td>

                <td><a href="#" class="btn btn-primary">Update</a> <a href="#" class="btn btn-primary">Delete</a></td>
            </tr>
            @endforeach

        </table>
    </div>
</div>
<div class="card-footer text-right">
    <nav class="d-inline-block">
        <ul class="pagination mb-0">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1 <span
                        class="sr-only">(current)</span></a></li>
            <li class="page-item">
                <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
            </li>
        </ul>
    </nav>
</div>

@endsection
