<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function beckResultEmail(Request $request) {
         $data = [
            'email'=> $request->email,
            'total_score' => $request->total_score,
            'result' => $request->result,
         ];
     
         Mail::send('mail_beck_template', $data, function($message) use ($data){
           $message->to($data['email'])->subject
              ('Beck Test Result Mail');
           $message->from('deptestapp@gmail.com','Deptest App');
        });
        
        return response([
            'status' => 'Success'
        ]);
     }
    public function usdiResultEmail(Request $request) {
        $data = [
         'email'=> $request->email,
         'total_score' => $request->total_score,
         'result' => $request->result,
         ];
     
        $result = Mail::send('mail_usdi_template', $data, function($message) use ($data) {
           $message->to($data['email'])->subject
              ('Usdi Test Result Mail');
           $message->from('deptestapp@gmail.com','Deptest App');
        });
        
        return response([
            'status' => 'Success',
            'result' => $result
        ]);
     }

     
}
