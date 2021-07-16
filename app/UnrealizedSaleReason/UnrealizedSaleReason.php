<?php

namespace App\UnrealizedSaleReason;

use App\Account\Account;
use App\FollowUp\FollowUp;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UnrealizedSaleReason extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'status',
        'account_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function account()
    {
        return $this->belongsTo(Account::class);
    }

    public function followUps()
    {
        return $this->belongsToMany(FollowUp::class);
    }
}
