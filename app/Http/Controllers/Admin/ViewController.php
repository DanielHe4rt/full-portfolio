<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Traits\ApiResponse;

class ViewController extends Controller
{
    use ApiResponse;

    public function viewDashboard(){
        return view('admin.dashboard');
    }

    public function viewLogin(){
        return view('auth.login');
    }

    public function viewAllMails(){
        $mails = \App\Entities\Mailer\Mail::orderBy('created_at','DESC')->get();
        return view('admin.mailer.all',['mails' => $mails]);
    }
}
