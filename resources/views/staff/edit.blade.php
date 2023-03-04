@extends('layouts.app')
@section('title', 'Edit Staff')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Edit Staff
                </div>
                <div class="float-end">
                    <a href="{{ route('staff.index') }}">Back To Staff List</a>
                </div>
            </div>
            <div class="card-body">
                <div class="card py-5 px-5">
                    <form method="PUT" action="{{ route('staff.update', $staff->staff_id) }}">
                        @csrf
                        @include('staff.fields')
                        <input type="submit" class="btn btn-primary" value="Save">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
