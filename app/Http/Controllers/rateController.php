<?php

namespace App\Http\Controllers;
use App\Comments;
use App\l_n_b_s;
use App\rate;
use App\rates;
use Illuminate\Http\Request;

/**
 *
 */
class rateController extends Controller
{


    public function rate(Request $request){

        $rate_val  = $request['rate_val1'];
        $sme_id = $request['sme_id1'];
        $user_id = $request['user_id1'];


        $rate_col = rates::where([
            ['user_id', '=', $user_id],
            ['l_n_b_s_id', '=', $sme_id],
        ]);

        $rate_col_count = rates::where([
            ['user_id', '=', $user_id],
            ['l_n_b_s_id', '=', $sme_id],
        ])->count();



    if($rate_col_count>=1){

          $rate_SME = rates::where('l_n_b_s_id',$sme_id)->get();
          $spec_rate_SME = $rate_SME->where('user_id',$user_id)->first();
          $spec_rate_SME->rate_val = $rate_val;
          $spec_rate_SME->update();

          $sme_rate2 = rates::where('l_n_b_s_id',$sme_id)->count();


//          return $sme_rate2;


    }else{

        $rate = new rates();
        $rate->rate_val = $rate_val;
        $rate->user_id = $user_id;
        $rate->l_n_b_s_id = $sme_id;
        $rate->save();
    }



    $tot_rates = rates::where('l_n_b_s_id',$sme_id)->get();
    $tot_num = $tot_rates->count();
    $rate_sum = 0;


    foreach ($tot_rates as $rateinst)
       $rate_sum=$rate_sum+$rateinst->rate_val;

        $ave_rate = $rate_sum/$tot_num;


       $lbn_inst = l_n_b_s::where('id',$sme_id)->first();
       $lbn_inst->rated_val = $ave_rate;
       $lbn_inst->update();


       return $ave_rate;


  }






}
