<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestAttempt extends Model
{
    protected $fillable = [
        'user_id', 'test_id', 'started_at', 'completed_at',
        'status', 'total_raw_score', 'overall_band'
    ];

    protected $casts = [
        'started_at' => 'datetime',
        'completed_at' => 'datetime',
        'overall_band' => 'decimal:1',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function test()
    {
        return $this->belongsTo(Test::class);
    }

    public function responses()
    {
        return $this->hasMany(UserResponse::class);
    }

    public function sectionScores()
    {
        return $this->hasMany(SectionScore::class);
    }
}
