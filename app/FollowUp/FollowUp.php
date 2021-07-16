<?php

namespace App\FollowUp;

use App\User\User;
use App\Contact\Contact;
use App\Interest\Interest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\UnrealizedSaleReason\UnrealizedSaleReason;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FollowUp extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'type',
        'user_id',
        'contact_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }

    public function interests()
    {
        return $this->belongsToMany(Interest::class);
    }

    public function unrealizedSaleReasons()
    {
        return $this->belongsToMany(UnrealizedSaleReason::class);
    }
}
