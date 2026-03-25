<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['name', 'total'];
    public function items()
{
    return $this->hasMany(EventItem::class);
}
}
