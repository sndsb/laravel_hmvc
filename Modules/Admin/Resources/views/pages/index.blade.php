@extends('admin::layouts.master')

@section('content')
    <h4>
        {{ auth()->user() ?? 'test user' }}
        test hello  from admin
    </h4>
@endsection