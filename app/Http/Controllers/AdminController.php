<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\Room;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms=Room::all();
        return view('admin.tables',compact("rooms"));
    }
    public function showreservation(admin $admin)
    {
        // $reservations= DB::table('room_user')->get();
        // $reservations= DB::table('users')->select([
        //     'users.id',
        //     'users.name',
        //     'users.email',
        //     'room_user.phone',
        //     'room_user.check_in',
        //     'room_user.check_out',
        //     'rooms.name',
        //     'rooms.price',
        //     'rooms.capacity',
        // ])->Join('room_user','users.id', '=', 'room_user.user_id')
        // ->Join('rooms','rooms.id', '=','room_user.room_id')
        // ->get();
        // return view('admin.reservationTable',compact("reservations"));
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
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(admin $admin)
    {
        $reservations= DB::table('room_user')->get();
        $reservations= DB::table('users')->select([
            'users.id',
            'users.name',
            'users.email',
            'room_user.phone',
            'room_user.check_in',
            'room_user.check_out',
            'rooms.name',
            'rooms.price',
            'rooms.capacity',
        ])->Join('room_user','users.id', '=', 'room_user.user_id')
        ->Join('rooms','rooms.id', '=','room_user.room_id')
        ->get();
        return view('admin.reservationTable',compact("reservations"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\admin  $admin
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
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(admin $admin)
    {
        //
    }
}
