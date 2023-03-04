<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $staffList = Staff::latest();
        $searchingFields = [
            'sID',
            'sGen',
            'bd_from',
            'bd_to',
        ];

        // Search
        $request->whenFilled('sID', function (string $q) use ($staffList) {
            $staffList->where('staff_id', 'like', "%{$q}%");
        });

        $request->whenFilled('sGen', function (string $q) use ($staffList) {
            $staffList->where('gender', 'like', "%{$q}%");
        });

        $request->whenFilled('bd_from', function (string $q) use ($staffList) {
            $staffList->whereDate('birth_date', '>=', $q);
        });

        $request->whenFilled('bd_to', function (string $q) use ($staffList) {
            $staffList->whereDate('birth_date', '<=', $q);
        });

        $staffList = $staffList->paginate(10);

        return view('staff.index', [
            'staffList' => $staffList,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('staff.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $staff = Staff::find($id);
        return view('staff.edit', ['staff' => $staff]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $staff = Staff::find($id);
        return view('staff.edit', ['staff' => $staff]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return view('staff.delete');
    }
}
