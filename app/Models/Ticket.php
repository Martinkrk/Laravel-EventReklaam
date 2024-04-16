<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $table = 'ticket';
    public $timestamps = true;

    protected $fillable = [
        'group_name',
        'participants',
        'contact_person',
        'email',
        'phone',
        'comment',
        'created_at'
    ];
}
