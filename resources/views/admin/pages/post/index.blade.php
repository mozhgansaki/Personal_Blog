@extends('site.main')
@section('content')
    <div class="card mt-2">
        <div class="card-body"><a href="{{route('admin.post.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i></a></div>
    </div>
    <div class="card mt-2">
        <div class="card-header">
            Posts
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Tag</th>
                </tr>
                </thead>
                <tbody>
                @php($i=1)
                @foreach($posts as $post)
                <tr>
                    <th scope="row">{{$i++}}</th>
                    <td>{{$post->title}}</td>
                    <td>{{$post->category->title}}</td>
                    <td>
                        <div class="d-flex">
                            <a class="btn btn-success" href="{{route('admin.post.edit',['post'=>$post])}}"><i class="fa fa-pencil"></i></a>
                            <form action="{{route('admin.post.destroy',['post'=>$post])}}" method="post">
                                @method('delete')
                                @csrf
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
            {{$posts->links('pagination::bootstrap-4')}}
        </div>
    </div>
@endsection
