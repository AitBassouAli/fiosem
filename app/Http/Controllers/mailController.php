<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Mail;
use Session;

class mailController extends Controller
{
    public function sendMail(Request $request){
    	$this->validate($request,[
    		'nom' =>'required',
    		'email' => 'required|email',
    		'sujet' => 'required|min:3',
    		'message' => 'required|min:10'
    		],
    		[
    			'required'=>'tout les champs sont obligatoires',
    			'email.email'=>'email non valide',
    			'sujet.min'=>'le sujet n\'est pas suffisant min 3 caracteres ',
    			'message.min'=>'le message n\'est pas suffisant min 10 caracteres '
    		]);

    	$donnee = array('nom' =>$request->nom ,
    	 					'email' =>$request->email ,
    	 					'sujet' =>$request->sujet , 
    	 					'bodyMessage' =>$request->message ,
    	 					);
        try {
            Mail::send('emails.contact',$donnee,function($message) use ($donnee){
            $message->from($donnee['email']);
            $message->to('pfetaxe@gmail.com');
            $message->subject($donnee['sujet']);

        });
            Session::flush('success','Email envoyer avec success ! merci d\'avoir nous contacter');
        return redirect('/contact');
            
        } catch (Exception $e) {
            Session::flush('error','opps ,'.$e->message);
        return redirect('/');
        }
    }
}
