<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Booking;

class Home extends Model
{
    use HasFactory;


        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'description',
        'beds',
        'location',
        'image',
    ];

    public function booking(){
        return $this->hasMany(Booking::class);
    }

}
