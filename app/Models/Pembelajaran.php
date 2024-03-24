<?php

namespace App\Models;

use Cohensive\OEmbed\Facades\OEmbed;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Pembelajaran extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function getViedoAttribute($value)
    {
        $embed = OEmbed::get($value);
        if ($embed) {
            return $embed->html(['width' => 1150]);
        }
    }
}
