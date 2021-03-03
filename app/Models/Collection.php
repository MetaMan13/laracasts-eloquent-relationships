<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Video;

class Collection extends Model
{
    use HasFactory;

    public function videos()
    {
        return $this->morphMany(Video::class, 'watchable');
    }
}
