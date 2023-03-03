@extends('layouts.app')

@section('title', 'Add New Staff')

@section('content')
    <form method="POST" action="/profile">
        @csrf
        @include('staff.fields')
    </form>
@endsection
