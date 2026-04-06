<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'section_id', 'question_number', 'question_text', 'type',
        'points', 'order', 'metadata'
    ];

    protected $casts = [
        'metadata' => 'array',
    ];

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function options()
    {
        return $this->hasMany(QuestionOption::class);
    }

    public function userResponses()
    {
        return $this->hasMany(UserResponse::class);
    }
}
