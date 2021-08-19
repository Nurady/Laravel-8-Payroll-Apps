<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\Detail;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nama_karyawan = Employee::find(1)->nama_karyawan;
        $nama_jabatan = Employee::find(1)->position;

        $nama_ayah = Employee::find(1)->details->where('hubungan', 'ayah')->first();
        $nama_ibu = Employee::find(1)->details->where('hubungan', 'ibu')->first();

        $detail = Detail::find(1)->employee->nama_karyawan;
        $address = Employee::find(1)->address;

        $user = User::find(3)->roles;
        $role = Role::find(2)->users;
        // dd($role);

        return view('employee.index', compact(
            'nama_karyawan', 
            'nama_jabatan', 'nama_ayah', 
            'nama_ibu', 
            'detail', 
            'address',
            'user',
            'role',
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
