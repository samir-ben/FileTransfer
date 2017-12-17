<?php

namespace App\Http\Controllers;
use App\UserInfo;
// use \Input;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

////
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;
use App\Mail\Contact;



class PagesController extends Controller
{
    
	public function index() {
    	$title = "File Transfer";
    	return view('index', ['title' => $title]);
    }


    public function about() {
    	$title = "A propos";
    	return view('pages/about', ['title' => $title]);
    }

    public function file() {
    	$title = "Télécharger vos fichiers";
    	return view('pages/file', ['title' => $title]);
    }

    public function fileDownload(Request $request) {
    	// echo "toto";
    	// echo $request->input('url');

    	echo '<a href="' . $request->input('url') . '" download>Télécharger</a>';
    }


    public function show($id) {
    	$link = UserInfo::findOrFail($id);
    	return new RedirectResponse($link->url,301);
    }


    public function store(){
    	$url = Input::get('url');
    	//var_dump($url);
    	$url = request()->file('url')->store('uploads');
    	
    	$mail_destination = Input::get('mail_destination');
    	$mail = Input::get('mail');   
    	$message = Input::get('message');   
    	// $path_file = Input::get('path_file');
    	$link = UserInfo::firstOrCreate(['url' => $url, 'mail_destination' => $mail_destination, 'mail' => $mail , 'message' => $message  ]);
    	return view('pages/success', compact('link'));
    }

    // public function contact() {
    // 	$url = Input::get('url');
    // 	Mail::send($url, function($message) {
    // 		$message->to('samir-69@hotmail.fr')->subject('contact');
    // 	});
    // }


}

// 







