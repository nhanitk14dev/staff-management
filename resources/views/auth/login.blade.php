@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <form method="POST" action="/login">
        @csrf
        @error('email', 'login')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label for="email">Email address</label>
            <input id="email" type="email" class="@error('email', 'login') is-invalid @enderror">
        </div>
        <div class="form-group">
            <label for="email">Password</label>
            <input id="password" type="password" class="@error('password', 'login') is-invalid @enderror">
        </div>
        <input type="submit" value="Login">
    </form>
@endsection
