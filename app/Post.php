<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = []; // to avoid $fillable error, it's saying laravel, don't guard anything, everything is ok.

    public function user()
  {
    return $this->belongsTo(User::class);
  }
}
