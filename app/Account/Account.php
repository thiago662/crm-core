<?php

namespace App\Account;

use App\Origin\Origin;
use App\Segment\Segment;
use App\Contact\Contact;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\UnrealizedSaleReason\UnrealizedSaleReason;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Account extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'cell',
        'company_code',
        'status',
        'segment_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function segment()
    {
        return $this->belongsTo(Segment::class);
    }

    public function unrealizedSaleReasons()
    {
        return $this->hasMany(UnrealizedSaleReason::class);
    }

    public function origins()
    {
        return $this->hasMany(Origin::class);
    }

    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }
}
