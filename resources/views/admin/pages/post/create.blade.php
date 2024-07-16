@extends('site.main')
@section('content')
    <form action="{{route('admin.post.store')}}" method="post" enctype='multipart/form-data'>
        @csrf
        <div class="card mt-2">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <x-label value="title"/>
                        <x-input name="title"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <x-label value="description"/>
                        <x-text-area name="description" value=""/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <x-label value="image"/>
                        <x-input type="file" name="image"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <x-label value="category"/>
                        <select name="category" class="form-select form-control">
                            <option value="">-</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->title}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <x-label value="tag"/>
                        <select name="tag[]" multiple class="form-select form-control">
                            @foreach($tags as $tag)
                                <option value="{{$tag->id}}">{{$tag->title}}</option>
                            @endforeach
                        </select>

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
