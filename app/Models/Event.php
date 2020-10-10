<?php

namespace App\Models;

use App\Models\Client;
use App\Models\Media;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Event extends Authenticatable
{
    use HasFactory, Notifiable;
    
    protected $guarded = [];

    protected $appends = ['urls'];

    public function clients()
    {
        return $this->hasMany(Client::class);
    }

    public function media()
    {
        return $this->hasMany(Media::class);
    }

    public function event()
        {
             return $this->belongsTo(User::class);
        }

    public function getUrlsAttribute()
    {
        return Storage::url($this->display_photo);
    }

    public function username()
    {
        return 'token';
    }


   

}
