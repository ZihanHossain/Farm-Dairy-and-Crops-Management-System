<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ordering_item extends Model
{
    use HasFactory;

    protected $primaryKey = 'o_id';

    public $timestamps = false;
}
