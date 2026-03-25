<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventItem extends Model
{   
    protected $fillable = [
  'event_id',
  'description',
  'quantity',
  'unit_price',
  'cost'
];
    public function event()
{
    return $this->belongsTo(Event::class);
}
}
