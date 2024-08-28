@extends('site.main')
@section('content')
    <form action="{{route('admin.role.update',['role'=>$role])}}" method="post">
        @csrf
        @method('put')
        <div class="card mt-2">
            <div class="card-header">Create Role</div>
            <div class="card-body">
                <x-label value="title"/>
                <x-input name="title" value="{{$role->title}}"/>
                <x-save-button/>
            </div>
        </div>
    </form>

@endsection
