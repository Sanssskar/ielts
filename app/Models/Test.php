<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $fillable = [
        'title', 'type', 'is_full_test', 'total_duration_minutes', 'is_active'
    ];

    public function sections()
    {
        return $this->hasMany(Section::class)->orderBy('order');
    }

    public function testAttempts()
    {
        return $this->hasMany(TestAttempt::class);
    }
}
