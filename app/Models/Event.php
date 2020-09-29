<?php

namespace App\Models;

use App\Models\Client;
use App\Models\Media;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    public function client()
    {
        return $this->hasMany(Client::class);
    }

    public function media()
    {
        return $this->hasMany(Media::class);
    }
}
