<?php


namespace App\Http\Controllers;
use App\l_n_b_s;
use Illuminate\Http\Request;
use App\LNBS;
use Illuminate\Support\Facades\Auth;



/**
 *
 */
class lnbInfoController extends Controller
{

public function getLnbInfo($lnbId){

       $lbn_inst = l_n_b_s::where('id',$lnbId)->first();


      return view('profile-info',['user'=>Auth::user()->first()])->with('lbn',$lbn_inst);

}

public function infoSave(Request $request){

      $sme_id = $request['SME_id'];
      $lnb_title = $request['lnb_name'];
      $lnb_quote = $request['lnb_quote'];

      $LNB_inst = l_n_b_s::where('id',$sme_id)->first();

      $LNB_inst->LNB_name = $lnb_title;
      $LNB_inst->lnb_quote = $lnb_quote;

       $LNB_inst->update();

    return view('profile-info',['user'=>Auth::user()->first()])->with('vacs',$LNB_inst);

}


}
