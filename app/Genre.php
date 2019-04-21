<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'genres';
    protected $fillable = [ 'name'];
    public function products() {
        return $this->belongsToMany('App\Products');
     }
 

}
