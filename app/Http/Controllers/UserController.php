<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Room;


use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users=User::all();
        return view("admin.usertable",compact("users"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.userCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        User::create($request->all());
        $users=User::all();
        return view('admin.usertable',compact("users"));
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
    public function edit(User $user)
    {
        return view('admin.useredit',compact("user"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,User $user)
    {
        $user->update($request->all());   
        $users=User::all();
        return view('admin.usertable',compact("users"));  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete(); 
        return redirect()->back();
    }

    //user profile view
    public function userProfile()
    {
        $rooms = Room::join('room_user', 'rooms.id', '=', 'room_user.room_id')
        ->where('room_user.user_id',Auth::user()->id)
               ->get(['rooms.*', 'room_user.*']);
               
        // $users = DB::table('room_user')->where('user_id',Auth::user()->id)->get();
        // dd($rooms);
        return view('auth.userProfile',compact("rooms"));    
    }
    public function updateUserProfile(Request $request,User $user)
    {
        $user->update($request->all());   
        $users=User::all();
        return redirect()->back();
    }

}
