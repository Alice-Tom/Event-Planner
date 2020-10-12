<?php

namespace App\Models;

use App\Models\Client;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Notifications\Notifiable;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Event extends Authenticatable implements HasMedia
{
    use HasFactory, Notifiable, InteractsWithMedia;

    protected $guarded = [];

    public function clients()
    {
        return $this->hasMany(Client::class);
    }

    public function event()
    {
            return $this->belongsTo(User::class);
    }

    public function registerMediaCollections(Media $media = null): void
    {
        $this->addMediaCollection('dp-'.$this->token)->singleFile();

        $this->addMediaConversion('image_preview')
            ->height(426)
            ->width(640)
            ->withResponsiveImages();

        $this->addMediaConversion('thumb')
            ->height(150)
            ->width(200)
            ->withResponsiveImages();
    }

    public function username()
    {
        return 'token';
    }

    public function logout()
    {
        try {

            Auth::guard('event')->logout();

            return redirect()->route('home');


        } catch (\Throwable $th) {
            throw $th;
        }

    }

}
