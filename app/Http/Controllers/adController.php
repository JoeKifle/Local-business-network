<?php


namespace App\Http\Controllers;
use App\Ads;

use App\l_n_b_s;
use App\LNBS;
use App\User;
use Illuminate\Support\Facades\Auth;

/**
 *
 */
class adController extends Controller
{

     public function getAdinfo($ad_id){

        $ad_inst = Ads::where('id',$ad_id)->first();
        $lbn_Id =$ad_inst->SME_id;



         $lnb_inst = l_n_b_s::where('id',$lbn_Id)->first();
         $inst =  $lnb_inst->id;
         $user_inst = User::where('l_n_b_s_id',$inst)->first();


         return view('addetail',compact('user_inst','lnb_inst','ad_inst'));


     }





}
