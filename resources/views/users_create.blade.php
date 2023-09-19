@extends('master')

@section('content')
<h2>Create</h2>

@if(session()->has('message'))
    {{
        session()->get('message')
    }}
@endif


<form action="{{route('users.store')}}" method="post">
    @csrf

    <input type="text" name="firstName" placeholder="Seu nome">
    <input type="text" name="lastName"  placeholder="Seu último nome">

    <input type="email" name="email"  placeholder="Seu email">
    <input type="password" name="password"  placeholder="Sua senha">

    <input type="submit" value="Create">
</form>
@endsection
