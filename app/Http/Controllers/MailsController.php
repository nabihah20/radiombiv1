<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;

class MailsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function postMail(Request $request)
    {
        $data = array(
        'nama' => $request->input('nama'),
        'emel' => $request->input('emel'),
        'mesej' => $request->input('mesej'),
        );

        // Required validation
        $this->validate($request, [
            'nama'=>'required',
            'emel'=>'required',
            'mesej'=>'required'
        ]);
        
        //https://accounts.google.com/DisplayUnlockCaptcha
        Mail::send('mails.viewMail', $data ,function ($message) use ($data) 
        {
            $message->from($data['emel'], 'Pengguna Laman Web Radio MBI');
            $message->to('nabihah.student@gmail.com', 'Radio MBI');
            $message->subject('Maklumbalas dari Laman Web Radio MBI');
        });

        //Store email
        //$mails = new Mail;
        //$mails->nama = $request ->input('nama');
        //$mails->emel= $request ->input('emel');
        //$mails->mesej = $request->input('mesej');
        //$mails->save();
        return redirect('/tentang')->with('success', 'Maklumbalas telah dihantar. Terima kasih');
    }

}