@extends('site.main')
@section('content')
    <div class="card mt-2">
        <div class="card-body">
            <a class="btn btn-primary" href="{{route('admin.category.create')}}"><i class="fa fa-plus"></i></a>
        </div>
    </div>
    <div class="card mt-2">
        <div class="card-header">Categories</div>
        <div class="card-body">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Title</th>
                </tr>
                </thead>
                <tbody>
                @php($i=1)
                @foreach($categories as $category)
                <tr>
                    <th scope="row">{{$i++}}</th>
                    <td>{{$category->title}}</td>
                    <td>
                        <div class="row d-flex row-flex">
                                <a class="btn btn-success" href="{{route('admin.category.edit',['category'=>$category])}}"><i class="fa fa-pencil"></i></a>
                                <form action="{{route('admin.category.destroy',['category'=>$category])}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button onclick="return confirm('Are you sure?')" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                </form>
                        </div>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{$categories->links()}}
        </div>
    </div>
@endsection
