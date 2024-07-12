@extends('site.main')
@section('content')
    <form action="{{route('admin.tag.update',['tag'=>$tag])}}" method="post">
        @csrf
        @method('put')
    <div class="card mt-2">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <x-label value="title"/>
                    <x-input name="title" value="{{$tag->title}}"/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <x-save-button/>
                </div>
            </div>
        </div>
    </div>
    </form>
@endsection
