@extends('master')

@section('content')
<h2>Edit</h2>

<form action="">
    <input type="text" name="firstName" value="{{ $user->firstName }}">
</form>
@endsection




