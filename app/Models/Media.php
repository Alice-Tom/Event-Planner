<?php

namespace App\Models;

use App\Models\Event;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
