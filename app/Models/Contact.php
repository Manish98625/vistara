<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{

    use CrudTrait;
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'subject',
        'content',
        'type',
        'status',
        'user_id',
    ];
}
