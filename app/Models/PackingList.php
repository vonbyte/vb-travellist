<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackingList extends Model
{


    use HasFactory;

    protected $guarded = [];

    protected $dates = ['startDate','endDate'];

}
