@extends('master')

@section('content')
<h2>Edit</h2>

<form action="{{route('users.update',['user'=>$user->id])}}">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <input type="text" name="firstName" value="{{ $user->firstName }}">
    <input type="text" name="lastName" value="{{ $user->lastName }}">
    <input type="text" name="email" value="{{ $user->email }}">
    <input type="submit" value="Editar">
</form>
@endsection




