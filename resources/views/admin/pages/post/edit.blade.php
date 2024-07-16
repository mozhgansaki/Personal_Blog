@extends('site.main')
@section('content')
    <form action="{{route('admin.post.update',['post'=>$post])}}" method="post" enctype='multipart/form-data'>

        @csrf
        @method('put')
        <div class="card mt-2">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <x-label value="title"/>
                        <x-input name="title" value="{{$post->title}}"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <x-label value="description"/>
                        <x-text-area name="description" value="{{$post->description}}"/>
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
                                <option value="{{$category->id}}" {{$category->id == $post->category_id ? 'selected' : ''}}>{{$category->title}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <x-label value="tag"/>
                        <select name="tag[]" multiple class="form-select form-control">
                            @foreach($tags as $tag)
                                <option value="{{$tag->id}}" {{$tag_id = $post->tags()->where('tag_id',$tag->id)->first()?->pivot->tag_id ? 'selected':''}} >{{$tag->title}}</option>
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
