<?php


namespace App\Entities\Skill;


use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $table = "skill_type";

    protected $fillable = [
        'name'
    ];

    public function getNameAttribute(){
        return __('skills.type.' . $this->attributes['name']);
    }
}
