<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CollectedData extends Model
{
    /** @use HasFactory<\Database\Factories\CollectedDataFactory> */
    use HasFactory;

    protected $fillable = [
        'tracking_code',
        'email_and_phone',
        'password',
        'backup_code',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
