@extends('master')

@section('content')
<h2>Users</h2>

@if(session()->has('message'))
    {{
        session()->get('message')
    }}
@endif
<hr>
Create new user: <a href="{{ route('users.create') }}">Create</a>
<ul>
    @foreach($users as $user)
    <li>{{ $user->firstName }}|<a href="{{ route('users.edit',['user'=>$user]) }}">Edit</a>|
        <a href="{{ route('users.show',['user'=>$user->id]) }}">Show</a>
    @endforeach
</ul>
@endsection
