<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lemari extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function rel()
    {
        return $this->belongsTo(Rel::class);
    }
}
