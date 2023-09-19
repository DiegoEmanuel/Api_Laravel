@extends('master')

@section('content')
<h2>Users</h2>

<ul>
    @foreach($users as $user)
    <li>{{ $user->firstName }} | <a href="{{ route('users.edit',['user'=>$user]) }}">Edit</a> | <a href="">Delete</a> </li>
    @endforeach
</ul>
@endsection
