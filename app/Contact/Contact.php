<?php

namespace App\Contact;

use App\User\User;
use App\Origin\Origin;
use App\Account\Account;
use App\FollowUp\FollowUp;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'cell',
        'email',
        'user_code',
        'account_id',
        'user_id',
        'origin_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function account()
    {
        return $this->belongsTo(Account::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function origin()
    {
        return $this->belongsTo(Origin::class);
    }

    public function followUp()
    {
        return $this->hasMany(FollowUp::class);
    }
}
