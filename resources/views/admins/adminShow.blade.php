@extends('custom-layouts.master')

@section('main-content')
<div class="card card-primary">
<div class="card-body ">
    <div class="card-header d-flex justify-content-between mt-1">
    <div>
        <h5><b>Admins</b></h5>
    </div>
    <div>
        <a class="btn btn-primary" href="{{ route('admin') }}"><b>Add Admin</b></a>
    </div>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-md">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Number</th>
                <th>User Type</th>
                <th> Active Status </th>

                <th>Action</th>
            </tr>
            @foreach($shows as $show)
            <tr>
                <td>{{ $show->id }}</td>
                <td>{{ $show->name }}</td>
                <td>{{ $show->email }}</td>
                <td>{{ $show->number}}</td>
                <td>{{ $show->user_type}}</td>
                <td>
                    @if($show->is_active)
                        <a href="{{ route('adminInactive', $show->id) }}" class="btn btn-danger">Inactive</a>
                    @else
                        <a href="{{ route('adminActive', $show->id) }}" class="btn btn-success">Active</a>
                    @endif
                </td>



                <td>
                    <a href="#" class="btn btn-primary">Update</a>
                    <a href="#" class="btn btn-danger">Delete</a>

                </td>
            </tr>
            @endforeach

        </table>
<div class="d-flex justify-content-center">
        {{ $shows->links() }}
</div>

</div>
</div>

{{--<div class="card-footer text-right">--}}
{{--    <nav class="d-inline-block">--}}
{{--        <ul class="pagination mb-0">--}}
{{--            <li class="page-item disabled">--}}
{{--                <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>--}}
{{--            </li>--}}
{{--            <li class="page-item active"><a class="page-link" href="#">1 <span--}}
{{--                        class="sr-only">(current)</span></a></li>--}}
{{--            <li class="page-item">--}}
{{--                <a class="page-link" href="#">2</a>--}}
{{--            </li>--}}
{{--            <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
{{--            <li class="page-item">--}}
{{--                <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>--}}
{{--            </li>--}}
{{--        </ul>--}}
{{--    </nav>--}}
{{--</div>--}}
</div>


@endsection
