<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class AdvertiserInfo extends Model
{
    protected $fillable = ['advertiser_id','business_name'];

    public function advertiser()
    {
        return $this->belongsTo(User::class,'advertiser_id','id');
    }
}
