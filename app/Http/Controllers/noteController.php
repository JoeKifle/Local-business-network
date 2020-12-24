<?php

namespace App\Http\Controllers;

use App\notes;
use Illuminate\Http\Request;
/**
 *
 */
class noteController extends Controller
{

    public  function savenotes(Request $request){

          $cont_note =  $request['note'];
          $admin_id = $request['admin_id'];

          $note = new notes();
          $note->note = $cont_note;
          $note->admin_id = $admin_id;
          $note->status = "active";
          $note->save();
          return "saved";
     }




}
