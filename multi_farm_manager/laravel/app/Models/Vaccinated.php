<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccinated extends Model
{
    protected $table = 'vaccinated';
    protected $primaryKey = 'v_id';
    public $timestamps = false;
}
