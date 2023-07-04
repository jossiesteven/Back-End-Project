<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projectfs extends Model
{
    use HasFactory;

    protected $table = "projectfs";
    protected $primaryKey = "id";
    protected $fillable = ["names","lastnames","typeid","numberid","telephone","email","occupation","role"];
}
