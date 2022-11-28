<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Channel_Video extends Model
{
    use HasFactory;
    protected $fillable = ['title','description','thumbnail_file', 'video_file','channel_id','likes'];

    public function channel(){
        return $this->belongsTo(Channel::class, 'channel_id');
    }
}
