<?php namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\Models\Message as MessageBox;
use App\Models\User;
use Illuminate\Http\Request;
use Validator;

class Message extends BaseController
{
    

    public function indexMessage(){
    	
    	return view('messagebox.index');
    }    

    public function createMessage(Request $request){


    	$rules = ['mail' => 'required|max:255','content' => 'max:255'];


    	if ($request->has('files')){

			foreach($request->get('files') as $key => $val)
			{
				$rules['files.'.$key] = 'mimes:jpeg,bmp,png,docx,zip,rar,pdf,ppt,pptx,psd';
			}

    	}


	    $v = Validator::make($request->all(), $rules);

	    if ($v->fails())
	    {
	        return redirect()->back()->withErrors($v->errors());
	    }


	    $user = User::where('email','=',$request->get('mail'))->first();

	    if (!$user) {

	    	$user = new User();
	    	$user->email = $request->get('mail');
	    	$user->save();
	    }


	    $message = new MessageBox();

	    $message->message = $request->get('message');

	    $user->messages()->attach($message);
	    $user->save();
    }
}
