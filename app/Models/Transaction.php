<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Transaction extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'users_id',
        'inscurance',
        'shipping_price',
        'total_price',
        'transaction_status',
        'code',
    ];

    protected $hidden = [

    ];

    public function User()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
}
