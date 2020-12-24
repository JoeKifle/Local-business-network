<?php


namespace App\Http\Controllers;
use App\Ads;
use  App\Catagories;
use App\SubCategory;
use App\User;
use Illuminate\Support\Facades\Auth;
use  Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

/**
 *
 */
class SmeAdController extends Controller
{

     public  function  removerAd($ad_Id) {

          $ad = Ads::where('id',$ad_Id)->first();
          $ad->delete();

    return redirect()->route('advertiseApp',['sme_id'=>Auth::user()->l_n_b_s_id]);

     }


    public function submitAd(Request $request){

        $this->validate($request,[

        ]);

        $ad_title = $request['ad_title'];
        $ad_subtitle = $request['ad_subtitle'];
        $ad_text = $request['ad_text'];

        $ad_photo = $request->file('ad_photo');
        $file_name = Auth::user()->last_name.'-'.'adpic-'.Auth::user()->l_n_b_s_id.'.jpg';

        $ad_inst = new Ads();

        $ad_inst->ad_title = $ad_title;
        $ad_inst->ad_desc = $ad_subtitle;
        $ad_inst->ad_content = $ad_text;
        $ad_inst->ad_uslastname = Auth::user()->last_name;
        $ad_inst->ad_status = "pending..";
        $ad_inst->SME_id = Auth::user()->l_n_b_s_id;

        if($file_name){

            $ad_filePic = Storage::disk('local')->put($file_name,File::get($ad_photo));

        }


        $ad_inst->save();

        return redirect()->route('advertiseApp',['sme_id'=>Auth::user()->l_n_b_s_id]);

    }

    public function getAdpic($ad_id){

       $adinst = Ads::where('id',$ad_id)->first();

        $sme_id = $adinst->SME_id;

        $user = User::where('l_n_b_s_id',$sme_id)->first();

        $filename =   $file_name = $user->last_name.'-'.'adpic-'.$sme_id.'.jpg';




        $file = Storage::disk('local')->get($filename);

        return Response($file,200);
    }

}
