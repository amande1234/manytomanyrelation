<?php

namespace App\Models;
use App\Models\region;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class store extends Model
{
    use HasFactory;
    protected $table='stores';
    protected $fillable =['store_name'];
    public function regions()
    {
        return $this->belongsToMany(region::class, 'regions_stores', 'store_id','region_id');
    }
}
