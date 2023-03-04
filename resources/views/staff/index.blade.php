@extends('layouts.app')

@section('title', 'Staff Management')

@section('content')
    <div class="container">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Staff List</h1>
                    </div>
                    <div class="col-sm-6">
                        <a class="btn btn-primary float-right" href="{{ route('staff.create') }}">
                            Add New
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <div class="content px-3">
            <div class="clearfix"></div>
            <div class="card mb-5">
                <div class="card-body">
                    <h4>Advanced Search</h4>
                    <form class="form" id="staff-search" action="{{ route('staff.index') }}" method="GET">
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3 row">
                                    <label for="inputPassword" class="col-4 form-label">Staff ID</label>
                                    <div class="col-8">
                                        <input name="sID" class="form-control" value="{{ request()->get('sID') }}"
                                            type="text" placeholder="Search staff ID">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3 row">
                                    <label for="gender" class="col-4 form-label">Gender</label>
                                    <div class="col-8">
                                        <select name="sGen" id="gener" class="form-control">
                                            <option value="">Select All</option>
                                            <option value="1" {{ request()->get('sGen') === '1' ? 'selected' : ''}}>Male
                                            </option>
                                            <option value="2" {{ request()->get('sGen') === '2' ? 'selected' : ''}}>Female
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3 row">
                                    <label for="bd_from" class="col-4 form-label">Birthday From</label>
                                    <div class="col-8">
                                        <input type="datetime-flatpickr" name="bd_from"
                                            class="form-control datetime-flatpickr" value="{{ request()->get('bd_from') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3 row">
                                    <label for="bd_to" class="col-4 form-label">Birthday To</label>
                                    <div class="col-8">
                                        <input type="datetime-flatpickr" name="bd_to"
                                            class="form-control datetime-flatpickr" value="{{ request()->get('bd_to') }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row flex text-center mt-2">
                            <div class="col-md-auto">
                                <button class="btn btn-primary" type="submit">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card">
                @include('staff.table')
            </div>
        </div>
    </div>
@endsection
