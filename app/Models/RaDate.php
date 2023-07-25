<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RaDate extends Model
{
    use HasFactory;

    protected $table = 'ra_dates';

    protected $guarded = [];

    public $timestamps = false;
}
