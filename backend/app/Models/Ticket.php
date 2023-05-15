<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $table = "tickets";

    protected $fillable = [
        'resolved',
        "driver_id",
        "provider_id",
        "workshop_id",
        "reason_id",
    ];
}
