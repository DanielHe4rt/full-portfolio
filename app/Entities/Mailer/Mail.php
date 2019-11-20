<?php


namespace App\Entities\Mailer;


use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    public $incrementing = false;
    protected $table = "mails";

    protected $fillable = [
        'id',
        'email',
        'name',
        'subject',
        'content',
        'status_id',
        'ip',
        'user_agent'
    ];

    public function status(){
        return $this->belongsTo(Status::class);
    }

}
