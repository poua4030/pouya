<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = [ 'created_at' , 'updated_at'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
