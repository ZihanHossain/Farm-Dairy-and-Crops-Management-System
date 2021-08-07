<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $primaryKey = 'i_id';

    const CREATED_AT = 'create_time';
    const UPDATED_AT = 'update_time';
    public $timestamps = false;
}
