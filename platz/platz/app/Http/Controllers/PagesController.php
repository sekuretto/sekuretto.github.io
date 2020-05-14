<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use Mail;
use Storage;
use Illuminate\Validation\Validator;

class PagesController extends Controller
{
    public function myynti() {  
        $foo = 1;
        $posts = Post::where('category', 'myynti')->Paginate(6);
        return view('welcome')->with('posts', $posts)->with('foo', $foo);
    }
    public function osto() {
        $foo = 2;
        $posts = Post::where('category', 'osto')->Paginate(6);
        return view('welcome')->with('posts', $posts)->with('foo', $foo);
    }
    public function vaihto() {
        $foo = 3;
        $posts = Post::where('category', 'vaihto')->Paginate(6);
        return view('welcome')->with('posts', $posts)->with('foo', $foo);
    }
    public function haku(Request $request) {
        $foo = 4;
        $haku = $request->input('haku');
        $posts = Post::where('body', 'like', '%' . $haku . '%')->orWhere('title', 'like', '%' . $haku . '%')->Paginate(6);
        return view('welcome')->with('posts', $posts)->with('haku', $haku)->with('foo', $foo);
    }
    
    public function getContact() {
        return view('contact');
    }
    
    public function postContact(Request $request) {
        
        $this->validate($request, [
            'email' => 'required|email',
            'subject' => 'min:3',
            'message' => 'min:5'
        ]);
        
        $email = $request->input('email');
        $subject = $request->input('subject');
        $message = $request->input('message');
        
        Storage::put('palaute'.time().'.txt', 'Otsikko: '.$subject.', Email: '.$email.', Palaute: '.$message);
        return redirect('/')->with('success','Palaute lähetetty onnistuneesti.');
         
    }
    
    public function report(Request $request) {
        
        $reason = $request->input('reason');
        $body = $request->input('body');
        $id = $request->input('id');
        $title = $request->input('title');
        $postBody = $request->input('postBody');
        
        Storage::put('ilmianto'.time().'.txt', 'Ilmiannon syy: '.$reason.', Lisätietoja: '.$body.', ID: '.$id.', Ilmoituksen otsikko: '.$title.', Ilmoituksen teksti: '.$postBody);
        return redirect('/')->with('success','Ilmianto lähetetty onnistuneesti.');
        
    }
    
    public function sendpsw(Request $request) {
        
        $this->validate($request, [
            'resetemail' => 'required|email'
        ]);
        
        $email = $request->input('resetemail');
        
        Storage::put('resetointi'.time().'.txt', 'Sähköposti: '.$email);
        return redirect('/')->with('success','Sähköposti lähetetty onnistuneesti.');
        
        
    }
    public function showpost($id) {
        
        $post = Post::find($id);
        return view('post')->with('post', $post);

    }
    public function deleteuser($id) {
        $user = User::find($id);
        $user->delete();
        return redirect('/')->with('success','Käyttäjätili on poistettu onnistuneesti.');
    }
   
}


/* 

$this->validate($request, [
            'email' => 'required|email',
            'subject' => 'min:3',
            'message' => 'min:5'
        ]);
        
        $data = array(
        'email' => $request->email,
        'subject' => $request->subject,
        'bodyMessage' => $request->message
        );
        
        Mail::send('emails.contact', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('hello@moi.fi');
            $message->subject($data['subject']);
        });
        
        
        

*/
