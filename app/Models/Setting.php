<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $table = 'setbaru';
    protected $guarded = ['id'];
    public $timestamps = false;
    public $primaryKey = 'id';
}
