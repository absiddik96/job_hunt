<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Applications extends Model
{
    protected $fillable = ['advertiser_id', 'job_post_id', 'candidate_id',];

    public function advertiser()
    {
        return $this->belongsTo(User::class,'advertiser_id','id');
    }

    public function jobPost()
    {
        return $this->belongsTo(JobPost::class,'job_post_id','id');
    }

    public function candidate()
    {
        return $this->belongsTo(User::class,'candidate_id','id');
    }

}
