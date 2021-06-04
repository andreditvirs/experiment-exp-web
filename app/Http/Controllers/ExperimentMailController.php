<?php

namespace App\Http\Controllers;

use App\Mail\ExperimentMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ExperimentMailController extends Controller
{
	public function index(){
 
		Mail::to("testing@malasngoding.com")->send(new ExperimentMail());
 
		return "Email telah dikirim";
 
	}
}
