@extends('master')

@section('content')
<h2>Home - {{$user->firstName}}</h2>

<form action="{{ route('users.destroy',['user'=>$user->id]) }}" method="post">
@csrf
@method('DELETE')

<button type="submit">Delete</button>
</form>
@endsection
