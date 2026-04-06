<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SectionScore extends Model
{
    protected $fillable = ['attempt_id', 'section_id', 'raw_score', 'band_score'];

    protected $casts = [
        'band_score' => 'decimal:1',
    ];

    public function attempt()
    {
        return $this->belongsTo(TestAttempt::class);
    }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}
