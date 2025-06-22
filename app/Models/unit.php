<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controller\UnitController;

class unit extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

}
