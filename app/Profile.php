<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'uploads/1FjOgFlkvgOc7Yas35JedE4LAJDNgyq4XQBXHAQB.jpeg';
        return '/storage/' . $imagePath;
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
