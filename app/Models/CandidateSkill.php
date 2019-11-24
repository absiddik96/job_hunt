<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class CandidateSkill extends Model
{
    protected $primaryKey = 'uid';
    protected $fillable = ['uid','candidate_id','skill','percentage'];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->uid = rand(100,999).time().rand(10,99);
        });
    }

    public function candidate()
    {
        return $this->belongsTo(User::class,'candidate_id','id');
    }
}
