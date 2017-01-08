<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReCaptchataTestFormRequest;

class ContactController extends Controller
{
	public function index()
	{
		return view('contact');
	}
	public function store(ReCaptchataTestFormRequest $request){
        //TODO: the rest of the code when form is successful
        return "Done right! :-) ";
    }
}
