<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class routeController extends Controller
{
    public function services($id)
    {
    	switch ($id) {
    		case '1':
    			   return view('content.body.contact');
    			break;

    		case '2':
    			return view('content.body.services.service2');
    			break;
    		
    		default:
    			return redirect('accueil');
    			break;
    	}
    }
}
