@extends('layouts.app')
@section('title', 'Delete Staff')

@section('content')
    <form method="POST" action="/profile">
        @csrf
        @include('staff.fields')
    </form>
@endsection