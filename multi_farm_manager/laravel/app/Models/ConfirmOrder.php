<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfirmOrder extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'confirm_orders';
    protected $primaryKey = 'pr_id';
}
