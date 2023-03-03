@extends('layouts.app')
@section('title', 'Edit Staff')

@section('content')
    <form method="PUT" action="/profile">
        @csrf
        @include('staff.fields')
    </form>
@endsection
