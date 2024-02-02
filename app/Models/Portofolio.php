<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    use HasFactory;
    protected $table = 'skills';
    protected $primaryKey = 'id';

    static $rules = [
        'skill' => 'required'
    ];
    protected $perPage = 10;

    protected $fillable = ['skill'];
}
