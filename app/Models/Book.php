<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'start_date',
        'end_date',
        'status',
        'status_detail',
        'user_id',
        'villa_id',
        'nights',
    ];

    /**
     * Get the post that owns the comment.
     */
    public function user() {
        return $this->belongsTo(User::class);
    }
    public function villa() {
        return $this->belongsTo(Villa::class);
    }

    
}
