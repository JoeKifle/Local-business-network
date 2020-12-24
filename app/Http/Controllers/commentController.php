<?php

namespace App\Http\Controllers;
use App\Comments;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

/**
 *
 */
class commentController extends Controller
{
 public  function ReturnComUserProf($user_id){

     $com_user = User::where('id',$user_id)->first();

     $prof_name = $com_user->first_name.'-'.$com_user->phone.'-'.$com_user->gender.'-'.$com_user->last_name.'-'.$com_user->id.'.jpg';

      $dump_pro = "dump_profile.jpg";

      if (Storage::disk('local')->has($prof_name)){

          $file = Storage::disk('local')->get($prof_name);
      }else{
          $file = Storage::disk('local')->get($dump_pro);

      }



     return Response($file,200);


 }

 public function submitComment(Request $request){


       $com_cont = $request['body'];
       $user_id = $request['com_user_id'];
       $sme_id =  $request['com_sme_id'];


       $com_ins = new Comments();
       $com_ins->User_id = $user_id;
       $com_ins->l_n_b_s_id = $sme_id;
       $com_ins->comment = $com_cont;
       $com_ins->save();


       return response()->json(['message'=>'posted'],200);


 }



}
