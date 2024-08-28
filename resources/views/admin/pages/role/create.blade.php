@extends('site.main')
@section('content')
    <form action="{{route('admin.role.store')}}" method="post">
        @csrf
        <div class="card mt-2">
            <div class="card-header">Create Role</div>
            <div class="card-body">
                <x-label value="title"/>
                <x-input name="title"/>
                <x-save-button/>
            </div>
        </div>
    </form>

@endsection
