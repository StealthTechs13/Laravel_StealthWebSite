<?php
use Illuminate\Mail\Mailable;
namespace App\Mail;
namespace App\Http\Controllers;
use App\Models\Contact_form;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
   
    public function insert_user(Request $request)

    {
       $request->validate([
        'name' => 'required',
        'email' => 'required',
        'subject' => 'required',
        'message'=> 'required'
    ]);
     $student=  Contact_form::create($request->all());
      if($student){
        
         Mail::to('himanshustealth@gmail.com')->send(new NotifyMail());
 
         if (Mail::failures()) {
              return response()->Fail('Sorry! Please try again latter');
         }
         
         else{
              return response()->success('Great! Successfully send in your mail');
            }
      
            echo "1"; die;
    }
    
    else{
      echo "0";die;
    }
   
   }
}
