<?php

namespace App\Http\Controllers;
use App\Events;
use App\l_n_b_s;
use App\messages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
/**
 *
 */
class messageController extends Controller
{




    public function getAllMessage(){

        $messages = messages::all();
        return view('AdminMessages',compact('messages'));

}

   public function getMessages($request)
   {

       $lnb = l_n_b_s::where('id',Auth::user()->l_n_b_s_id)->first();
       $user_profile = Auth::user()->first_name.'-'.Auth::user()->phone.'-'.Auth::user()->gender.'-'.Auth::user()->last_name.'-'.Auth::user()->id.'.jpg';
      $user = Auth::user();

     return view('profile-messages',compact('lnb','user','user_profile'));


   }

   public function sendMessage(Request $request)
   {

        $user_id = $request['com_user_id'];
        $sme_id = $request['com_sme_id'];
        $mess_cont = $request['body'];

        $mes = new messages();
        $mes->message = $mess_cont;
        $mes->User_id = $user_id;
        $mes->status = "unseen";
        $mes->save();






       return "    <div class=\"mblm-item mblm-item-left\">
                     <div>
                      $mess_cont
                     </div>
                    <small>5:47 PM</small>
                     </div>
                                                       
					
					";



   }


}