<?php

namespace App\Http\Controllers;
use App\Events;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
/**
 *
 */
class eventController extends Controller
{


    public function stopEvent($ev_id){

       $event = Events::where('id',$ev_id)->first();
       $event->event_status = "stopped";
       $event->update();


       return redirect()->route('events');


    }

    public function getEvents(){

        $all_events = Events::all();

        return view('events',compact('all_events',['user'=>Auth::user()]));


    }

    public function addEvent(Request $request){

          $event_title = $request['ev_title'];
          $event_cont = $request['ev_content'];
          $event_date = $request['ev_date'];
          $event_status = "running";

          $event = new Events();
          $event->event_title = $event_title;
          $event->event_content = $event_cont;
          $event->event_date = $event_date;
          $event->event_status = $event_status;
          $event->save();


        return redirect()->route('adminhome',compact(['user' => Auth::user()]) );




    }







}