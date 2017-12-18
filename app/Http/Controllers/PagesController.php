<?php
namespace App\Http\Controllers;
use App\UserInfo;
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
    	$title = "Copier ici le lien reçu par e-mail";
    	return view('pages/file', ['title' => $title]);
    }

    public function fileDownload(Request $request) {
        echo '<h3><a style="color: white; font-weight: bold;" class="outer-div" href="' . $request->input('url') . '" download>Télécharger le fichier</a></h3>';
        return view('pages/link');
    }

    public function show($id) {
    	$link = UserInfo::findOrFail($id);
    	return new RedirectResponse($link->url,301);
    }

    public function store(){
    	$url = Input::get('url');
    	$url = request()->file('url')->store('uploads'); 	
    	$mail_destination = Input::get('mail_destination');
    	$mail = Input::get('mail');   
    	$message = Input::get('message');   
    	$link = UserInfo::firstOrCreate(['url' => $url, 'mail_destination' => $mail_destination, 'mail' => $mail , 'message' => $message  ]);

        $data = array( 'email' => $mail_destination, 'from' => $mail, 'url' => $url, 'text' => $message);
        Mail::send('pages.mail', $data, function($message) use ($data){
            $message->to( $data['email'] )->from( $data['from'])->subject( 'Fichier a télécharger' );
        });
    	return view('pages/success', compact('link'));
    }
}









