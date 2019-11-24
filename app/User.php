<?php

namespace App;

use App\Models\AdvertiserInfo;
use App\Models\CandidateInfo;
use App\Models\CandidateSkill;
use App\Models\JobPost;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    const USER_ROLES = [1 => 'admin', 2 => 'advertiser', 3 => 'candidate'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'uid', 'first_name', 'last_name', 'email', 'password', 'role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $appends = ['user_role'];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->uid = rand(100,999).time().rand(10,99);
        });
    }

    public function getUserRoleAttribute()
    {
        return self::USER_ROLES[$this->role];
    }

    public function getFullNameAttribute()
    {
        return $this->first_name.' '.$this->last_name;
    }

    public function advertiserInfo()
    {
        return $this->hasOne(AdvertiserInfo::class,'advertiser_id','id');
    }

    public function candidateInfo()
    {
        return $this->hasOne(CandidateInfo::class,'candidate_id','id');
    }

    public function candidateSkills()
    {
        return $this->hasMany(CandidateSkill::class,'candidate_id','id');
    }

    public function jobPosts()
    {
        return $this->hasMany(JobPost::class,'advertiser_id','id');
    }
}
