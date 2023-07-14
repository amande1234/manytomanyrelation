<?php

namespace App\Models;
use App\Models\store;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class region extends Model
{
    use HasFactory;
    protected $table='regions';
    protected $fillable=['region_name'];
    public function stores()
    {
        return $this->belongsToMany(store::class, 'regions_stores', 'region_id','store_id');
    }
}
