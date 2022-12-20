<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Land extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
      'landDigramNo',
      'landDescription',  
      'landDirections', 
      'landArea',
      'landNo',
      'price',
      'agency_id',
    ];

    public function agency() {

       return $this->belongsTo(Agency::class);


    }

}
