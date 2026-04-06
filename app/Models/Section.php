<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = ['test_id', 'name', 'order', 'time_limit_minutes'];

    public function test()
    {
        return $this->belongsTo(Test::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class)->orderBy('order');
    }

    public function passage()
    {
        return $this->hasOne(Passage::class);
    }

    public function audio()
    {
        return $this->hasOne(Audio::class);
    }
}
