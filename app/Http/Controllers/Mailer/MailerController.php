<?php


namespace App\Http\Controllers\Mailer;


use App\Entities\Mailer\Mail;
use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Mail as Mailer;
use Ramsey\Uuid\Uuid;

class MailerController extends Controller
{
    use ApiResponse;

    public function postMail(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'name' => 'required',
            'subject' => 'required',
            'content' => 'required'
        ]);

        $request->merge([
            'id' => Uuid::uuid4()->toString(),
            'ip' => $request->getClientIp(),
            'user_agent' => $request->header('User-Agent')
        ]);

        $data = $request->all();
        Mail::create($data);
        Mailer::to(env('APP_EMAIL'))->send(new ContactMail($data));
        return $this->success();
    }

    public function getMail(Request $request, string $mailId){
        $model =  Mail::findOrFail($mailId)->load('status');

        return response()->json($model);
    }

    public function putMail(Request $request, string $mailId){
        $request->merge([
            'id' => $mailId
        ]);
        $this->validate($request,[
            'id' => 'required|exists:mails',
            'status_id' => 'required'
        ]);

        Mail::find($mailId)->update($request->all());
        return $this->success();
    }

    public function deleteMail(Request $request, string $mailId){
        $request->merge([
            'id' => $mailId
        ]);
        $this->validate($request,[
            'id' => 'required|exists:mails'
        ]);

        Mail::find($mailId)->delete();
        return $this->success();
    }
}
