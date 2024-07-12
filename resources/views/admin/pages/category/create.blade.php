@extends('site.main')
@section('content')
<div class="card mt-2">
    <form action="{{route('admin.category.store')}}" method="post">
        @csrf
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <x-label value="title"/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <x-input name="title"/>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-12">
                    <x-save-button/>
                </div>
            </div>

        </div>
    </form>
</div>

@endsection
