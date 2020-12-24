<?php


namespace App\Http\Controllers;
use App\Jobs;
use  App\Catagories;
use App\l_n_b_s;
use App\LNBS;
use App\SubCategory;
use App\User;
use Illuminate\Support\Facades\Auth;
use  Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

/**
 *
 */
class VacancyController extends Controller
{


     public function getvacancyApp($vacId){

           $vacancies = Jobs::where('l_n_b_s_id',$vacId)->get();
          $lnb = l_n_b_s::where('id',Auth::user()->l_n_b_s_id)->first();

          return view('profile-vacancy',compact('lnb'),['user'=>Auth::user()->first()])->with('vacs',$vacancies);


     }

  public  function submittVac(Request $request){

           $job_title = $request['job_title'];
           $job_des = $request['job_desc'];
           $job_req = $request['job_req'];
           $job_age = $request['age'];
           $req = $request['exp_req'];

            $job = new Jobs();

           $job->job_title = $job_title;
           $job->job_desc = $job_des;
           $job->job_requirement = $job_req;
           $job->job_experience = $req;

            $user = Auth::user();


            $job->job_contact_phone = $user->phone;
            $job->job_contact_email = $user->email;
            $job->l_n_b_s_id = $user->l_n_b_s_id;


            $job->save();

          return redirect()->route('vacancy',['sme_id'=>$user->l_n_b_s_id]);

 }

      public function stopVacancy($vacId){


          $vacancies = Jobs::where('id',$vacId)->first();
          $vacancies->delete();
          $user = Auth::user();
          return redirect()->route('vacancy',['sme_id'=>$user->l_n_b_s_id]);

      }



    public function jobPic(){

           $prof_name = "newJob.png";


        $file = Storage::disk('local')->get($prof_name);

        return Response($file,200);


    }

    public function vacInfo($id){

         $job_inst = Jobs::where('id',$id)->first();

         $categories = Catagories::all();
         $subcats = SubCategory::all();

         $lnb = l_n_b_s::where('id',$job_inst->l_n_b_s_id)->first();

          $usr = User::where('id',$lnb->users_id)->first();



        $user_profile = Auth::user()->first_name.'-'.Auth::user()->phone.'-'.Auth::user()->gender.'-'.Auth::user()->last_name.'-'.Auth::user()->id.'.jpg';

        //    return $user_profile;

        return view('jobDesc',compact('categories','subcats','user_profile','job_inst','usr'),['user' => Auth::user()]);


    }



}
