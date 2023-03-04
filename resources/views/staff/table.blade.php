<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="articles-table">
            <thead>
            <tr>
                <th>No.</th>
                <th>Staff ID</th>
                <th>Full Name</th>
                <th>Gender</th>
                <th>Birthday</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($staffList as $k => $staff)
                <tr>
                    <td>
                        #{{$k+1}}
                    </td>
                    <td>
                        {{$staff->staff_id}}
                    </td>
                    <td>
                        {{$staff->full_name}}
                    </td>
                    <td>
                        {{$staff->gender_formatter}}
                    </td>

                    <td>
                        {{$staff->birth_date->format('d/m/Y')}}
                    </td>

                    <td  style="width: 120px" class="action-group">
                        <form action="{{ route('staff.destroy', $staff->staff_id) }}" method="delete">
                            <div class='btn-group'>
                                <a href="{{ route('staff.edit', [$staff->staff_id]) }}"
                                   class='btn btn-default btn-xs'>
                                    <i class="far fa-edit"></i>
                                </a>
                                <button type="submit" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure?')">
                                    Delete
                                </button>
                            </div>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-2 mx-5">
        <div class="float-start">
            <strong>Total</strong>: {{$staffList->total()}}
        </div>
        <div class="float-end">
            {!! $staffList->withQueryString()->links('pagination::bootstrap-5') !!}
        </div>
    </div>
</div>
