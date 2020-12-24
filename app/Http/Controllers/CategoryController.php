<?php


  namespace App\Http\Controllers;
  use App\Ads;
  use  App\Catagories;
  use App\Events;
  use App\Events\Event;
  use App\l_n_b_s;
  use App\SubCategory;
  use App\LNBS;
  use App\SME;

  use Illuminate\Support\Facades\Auth;
  use  Illuminate\Http\Request;

  /**
   *
   */
  class CategoryController extends Controller
  {
    public function getIndex(){

        $categories = Catagories::all();
        $subcats = SubCategory::all();

        $lnbs = l_n_b_s::paginate(2);

        $adkey1 = $lnbs->first()->category;


    $ad1 = Ads::where('ad_title','like','%'.$adkey1.'%')->get();
    $events = Events::paginate(2);


   $user_profile = Auth::user()->first_name.'-'.Auth::user()->phone.'-'.Auth::user()->gender.'-'.Auth::user()->last_name.'-'.Auth::user()->id.'.jpg';

   return view('index',compact('categories','subcats','user_profile','lnbs','ad1','events'),['user' => Auth::user()]);

    }

    public function getCat($cat){

        $categories = Catagories::all();
        $subcats = SubCategory::all();

        $lnbs = l_n_b_s::where('category',$cat)->get();

 $user_profile = Auth::user()->first_name.'-'.Auth::user()->phone.'-'.Auth::user()->gender.'-'.Auth::user()->last_name.'-'.Auth::user()->id.'.jpg';

        //    return $user_profile;

        return view('categories',compact('categories','subcats','user_profile','lnbs'),['user' => Auth::user()]);




    }


  }
