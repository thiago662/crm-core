<?php

namespace App\Origin;

use App\Account\Account;
use App\Interest\Interest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Origin extends Model
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

    public function interests()
    {
        return $this->hasMany(Interest::class);
    }

    public function account()
    {
        return $this->belongsTo(Account::class);
    }
}
