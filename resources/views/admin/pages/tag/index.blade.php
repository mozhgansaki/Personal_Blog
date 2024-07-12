@extends('site.main')
@section('content')
    <div class="card mt-2">
        <div class="card-body">
            <a href="{{route('admin.tag.create')}}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
        </div>
    </div>
    <div class="card mt-2">
        <div class="card-header">Tags</div>
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
                @foreach($tags as $tag)
                <tr>
                    <th scope="row">{{$i++}}</th>
                    <td>{{$tag->title}}</td>
                    <td>
                        <div class="d-flex">
                            <a href="{{route('admin.tag.edit',['tag'=>$tag])}}" class="btn btn-success"><i class="fa fa-pencil"></i></a>
                            <form action="{{route('admin.tag.destroy',['tag'=>$tag])}}" method="post">
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
    </div>
@endsection
