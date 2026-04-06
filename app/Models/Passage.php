<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Passage extends Model
{
    protected $fillable = ['section_id', 'content'];

    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}
