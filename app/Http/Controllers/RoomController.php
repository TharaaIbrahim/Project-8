<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Room;
use Illuminate\Http\Request;



class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms=Room::all();
        return view('rooms.rooms',compact("rooms"));
 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.roomcreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Room::create($request->all());
        $rooms=Room::all();
        return view('admin.tables',compact("rooms"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        return view('rooms.room-details',compact("room"));
    }

    public function book(Request $request,Room $room)
    {   
        if (Auth::check()) {
        $rooms = DB::table('room_user')->where('room_id', $room->id)->get();
        $error=false;
        foreach($rooms as $single){
            $in=$single->check_in;
            $out=$single->check_out;
             if(($request->check_in >= $in && $request->check_in <= $out ) || ($request->check_out >= $in && $request->check_out <= $out) || ($request->check_in <= $in && $request->check_out >= $out ) ){
                 $error=true;
                 return redirect()->back()->with('message','this date is already booked');
                 break;
           
        }
        if($request->check_out<$request->check_in){
            $error=true;
            return redirect()->back()->with('message','Unvalid Checkout Booking');
            break;
        }
    }
        if(!$error){
             $id=Auth::user()->id;
            $room->users()->attach($id,['check_in'=> $request->check_in,'check_out'=>$request->check_out,'phone'=>$request->phone]);
            return redirect()->back()->with('success','This Room Booked Successfully');
        }
             
        }
         
        else{
            return redirect('/login'); 
        }
          
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room)
    {  
        return view('admin.roomedit',compact("room"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room $room)
    {  
        $room->update($request->all());   
        $rooms=Room::all();
        return view('admin.tables',compact("rooms"));  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {   
        $room->delete(); 
        return redirect()->back();
    }

    public function bestprice()
    {
        $rooms = DB::table('rooms')->where('price', '<',200)->get();
        return view('rooms.index',compact("rooms"));
    }

}
