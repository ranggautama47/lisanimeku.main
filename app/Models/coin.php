<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coin extends Model
{
    use HasFactory;

   protected $fillable = [
    'channel',
    'coin_amount',
    'price',
    'qris_channel',
    'popup_type',
];
    
}
