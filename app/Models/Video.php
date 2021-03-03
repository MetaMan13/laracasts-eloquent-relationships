<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Series;

class Video extends Model
{
    use HasFactory;

    public function watchable()
    {
        // ALWAYS LEAVE morphTo blank
        return $this->morphTo();
    }
}
