<?php
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware'=>['web']], function(){

  Route::get('/', function () {
      return view('login');
  })->name('home');

   Route::post('signup',[

       'uses' => 'UserController@postSignUp',
       'as' => 'signup'

   ]);

   Route::post('signin',[

       'uses' => 'UserController@PostSignin',
       'as' => 'signin',
   ]);

   Route::post('event.save',[

       'uses' => 'eventController@addEvent',
       'as' => 'event.save',
       'middleware' => 'auth'

   ]);

   Route::post('account.update',[

       'uses' => 'userController@updateInfo',
       'as' => 'account.update',
       'middleware' => 'auth'

   ]);

   Route::get('/logout',[

     'uses' => 'UserController@getlogout',
     'as' => 'logout',

   ]);

   Route::get('/index',[

       'uses' => 'CategoryController@getIndex',
       'as' => 'smehome',
       'middleware' => 'auth'

   ]);

    Route::get('/manager',[

        'uses' => 'SmeManagerController@getSmeManager',
        'as' => 'adminhome',
        'middleware' => 'auth'

    ]);

    Route::get('/Applications',[

        'uses' => 'SmeManagerController@getSmeApps',
        'as' => 'smeapps',
        'middleware' => 'auth'

    ]);

    Route::get('/Applications.Advertisements',[

        'uses' => 'SmeManagerController@getSmeAdApps',
        'as' => 'adapps',
        'middleware' => 'auth'

    ]);

    Route::get('/events',[

        'uses' => 'eventController@getEvents',
        'as' => 'events',
        'middleware' => 'auth'

    ]);

    Route::get('/admin_messages',[

        'uses' => 'messageController@getAllMessage',
        'as' => 'admin_messages',
        'middleware'=>'auth'

    ]);

    Route::get('ads.info/{add_id}',[

      'uses' => 'adController@getAdinfo',
        'as' => 'ads.info',
        'middleware' => 'auth'

    ]);

    Route::get('/aps.info/{app_id}',[

          'uses' => 'SmeManagerController@getDetailInfo',
          'as' => 'aps.info',
          'middleware' => 'auth'
       ]);

    Route::get('/job.info/{job_id}',[

          'uses' => 'VacancyController@vacInfo',
           'as' => 'job.info'

    ]);

    Route::get('cat/{cat_id}',[

          'uses' => 'categoryController@getCat',
          'as' => 'cat',
          'middleware' => 'auth'

    ]);

     Route::post('app.accept',[

          'uses' => 'SmeManagerController@acceptApp',
           'as' => 'app.accept',
           'middleware' => 'auth'

     ]);

     Route::post('info.save',[

         'uses' => 'lnbInfoController@infoSave',
         'as' => 'info.save',
         'middleware'  => 'auth'


     ]);

     Route::get('/event.stop/{ev_id}',[

          'uses'=> 'eventController@stopEvent',
          'as' => 'event.stop',
          'middleware' =>'auth'

     ]);

       Route::get('/add.remove/{app_id}',[

           'uses' => 'SmeManagerController@removeApp',
           'as' => 'add.remove',
           'middleware' => 'auth'

       ]);

     Route::get('add.accept/{ad_id}',[

         'uses' => 'SmeManagerController@acceptAd',
         'as'  => 'add.accept',
         'middleware' => 'auth'

     ]);




   Route::get('/profile.about',[

          'uses' => 'UserController@UserInfo',
          'as' => 'profile.about',
           'middleware' => 'auth'

         ]);

     Route::get('/mysme/{sme_id}',[

         'uses' => 'SmeController@getSmeInfo',
         'as'  => 'mysme',
         'middleware' => 'auth'


     ]);

    Route::get('/sme.detail/{sme_id}',[

        'uses' => 'SmeController@getSmeDetail',
        'as'  => 'sme.detail',
        'middleware' => 'auth'


    ]);

     Route::get('advertiseApp/{sme_id}',[

         'uses' => 'SmeController@getadvertiseApp',
         'as'  => 'advertiseApp',
         'middleware' => 'auth'


        ]);
     Route::get('stop.ad/{ad_id}',[

         'uses' => 'SmeAdController@removerAd',
         'as' => 'stop.ad',
         'middleware' => 'auth'

     ]);


     Route::get('vacancy/{sme_id}',[

         'uses' => 'vacancyController@getvacancyApp',
         'as'  => 'vacancy',
         'middleware' => 'auth'


     ]);

     Route::get('message/{sme_id}',[

         'uses' => 'messageController@getMessages',
         'as' => 'message',
         'middleware' => 'auth'

     ]);


     Route::get('lbn.info/{sme_id}',[

         'uses' => 'lnbInfoController@getLnbInfo',
         'as'  =>  'lbn.info',
         'middleware' => 'auth'


     ]);





      Route::get('stop.vacancy/{sme_id}',[

          'uses' => 'vacancyController@stopVacancy',
          'as'  => 'stop.vacancy',
          'middleware' => 'auth'


      ]);

    Route::post('applications.submit',[

         'uses' =>  'SmeController@submitApp',
         'as'  => 'applications.submit',
         'middleware' => 'auth'

     ]);

    Route::post('/post',[

        'uses' => 'commentController@submitComment',
        'as' => 'post'
    ]);
    Route::post('/message.send',[

         'uses' => 'messageController@sendMessage',
        'as' => 'message.send'

    ]);

    Route::post('/notes.save',[

        'uses' => 'noteController@savenotes',
        'as' => 'notes.save'
    ]);



    Route::post('/rate',[

        'uses'=> 'rateController@rate',
        'as' => 'rate',
        'middleware' => 'auth'


    ]);

     Route::post('post.vacancy',[

         'uses' => 'VacancyController@submittVac',
         'as' => 'post.vacancy',
         'middleware' => 'auth'

     ]);

      Route::post('adds.submitt',[

          'uses' =>  'SmeAdController@submitAd',
          'as'  => 'adds.submitt',
          'middleware' => 'auth'

      ]);

     Route::get('users.legalId/{filename}',[

         'uses' => 'SmeManagerController@getLegalId',
         'as' => 'users.legalId',
         'Middleware' => 'auth'


     ]);

     Route::get('lnb.photo/{filename}',[

         'uses' => 'SmeManagerController@getPhoto',
         'as' => 'lnb.photo',
         'middleware' =>'auth'

     ]);


     Route::get('user.profile/{filename}',[

         'uses' => 'usercontroller@userProflePic',
         'as' => 'user.profile',
         'middleware' => 'auth'
    ]);

     Route::get('ad.pic/{ad_id}',[

         'uses' => 'SmeAdcontroller@getAdpic',
         'as' => 'ad.pic',
         'middleware' => 'auth'

     ]);

    Route::post('lnb.uploadPhoto',[

        'uses' =>  'SmeController@uploadphoto',
        'as'  => 'lnb.uploadPhoto',
        'middleware' => 'auth'

    ]);

    Route::post('upd.profpic',[

        'uses' => 'userController@updtProfPic',
        'as' => 'upd.profpic',
        'middleware' => 'auth'


    ]);

    Route::get('user.com.profile/{user_id}',[

        'uses' => 'commentController@ReturnComUserProf',
        'as' => 'user.com.profile',
        'middleware' =>'auth'

    ]);

    Route::get('job.profile',[

        'uses' => 'VacancyController@jobPic',
        'as' => 'job.profile',
        'middleware' => 'auth'

    ]);
});
