<?php


namespace App\Http\Controllers\Admin;


use App\Entities\Helpers\Access;
use App\Http\Controllers\Controller;
use App\Repositories\View\ViewRepository;
use App\Traits\ApiResponse;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ViewController extends Controller
{
    use ApiResponse;

    private $repository;

    public function __construct()
    {
        $this->repository = new ViewRepository();
    }

    public function viewDashboard()
    {

        $data = $this->repository->getAccessData();
        return view('admin.dashboard', ['statistics' => json_encode($data)]);
    }

    public function viewLogin()
    {
        return view('auth.login');
    }

    public function viewAllMails()
    {
        $mails = \App\Entities\Mailer\Mail::orderBy('created_at', 'DESC')->get();
        return view('admin.mailer.all', ['mails' => $mails]);
    }

    public function viewAllSkills()
    {
        return view('admin.skill.all');
    }
}
