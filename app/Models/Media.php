<?php

namespace App\Models;

use App\Models\Event;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Media extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $appends = ['urls'];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function getUrlsAttribute()
    {
        return Storage::url($this->url);
    }
}
