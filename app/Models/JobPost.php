<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class JobPost extends Model
{
    protected $primaryKey = 'uid';
    protected $fillable = ['uid', 'advertiser_id', 'title', 'description', 'salary', 'location', 'country', 'deadline'];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->uid = rand(100,999).time().rand(10,99);
        });
    }

    public function advertiser()
    {
        return $this->belongsTo(User::class,'advertiser_id','id');
    }

    public function applicants()
    {
        return $this->hasMany(Applications::class,'job_post_id','id');
    }

    public function appliedBy($candidate_id)
    {
        if ($this->applicants()->where('candidate_id', $candidate_id)->first()){
            return true;
        }
        return false;
    }
}
