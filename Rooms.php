<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    protected $fillable = [
 'hotelid',
 'type',
 'description',
 'price'
 'image'
 ];
 public function rooms() {
 return $this->belongsTo('App\Models\Hotel');
 }

}
