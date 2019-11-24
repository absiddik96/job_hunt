<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class CandidateInfo extends Model
{
    const AVATAR_UPLOAD_PATH = 'uploads/candidate/avatar';
    const RESUME_UPLOAD_PATH = 'uploads/candidate/resume';

    protected $fillable = ['candidate_id','avatar','resume'];

    protected $appends = ['avatar_path','resume_path'];

    public function candidate()
    {
        return $this->belongsTo(User::class,'candidate_id','id');
    }

    public function getAvatarPathAttribute()
    {
        return asset(self::AVATAR_UPLOAD_PATH.'/'.$this->avatar);
    }

    public function getResumePathAttribute()
    {
        return asset(self::RESUME_UPLOAD_PATH.'/'.$this->resume);
    }
}
