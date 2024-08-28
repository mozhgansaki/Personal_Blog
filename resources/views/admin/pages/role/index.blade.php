@extends('site.main')
@section('content')
    <div class="card mt-3">
        <div class="card-body">
            <a class="btn btn-primary" href="{{route('admin.role.create')}}"><i class="fa fa-plus"></i></a>
        </div>
    </div>
    <div class="card mt-4">
        <div class="card-header">Roles</div>
        <div class="card-body">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @php($i=1)
                @foreach($roles as $role)
                <tr>
                    <th scope="row">{{$i++}}</th>
                    <td>{{$role->title}}</td>
                    <td>
                        <div class="flex-row d-flex">
                            <a class="btn btn-success" href="{{route('admin.role.edit',['role'=>$role])}}"><i class="fa fa-pencil"></i></a>
                            <form action="{{route('admin.role.destroy',['role'=>$role])}}" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger" onclick="return confirm('Are you sure?!')"><i class="fa fa-trash"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
