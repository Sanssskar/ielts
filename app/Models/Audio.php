<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Audio extends Model
{
    protected $fillable = ['section_id', 'file_path', 'duration_seconds'];

    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}
