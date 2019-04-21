<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{   
	protected $primaryKey = 'id';
    protected $table = 'products';
    protected $fillable = [ 'name','description','price','category_id'];

    public function category(){
    	return $this->belongsTo('App\Category');
    }
    public function productImages(){
        return $this->hasMany('App\ProductImage');
    }
    public function genres() {
        return $this->belongsToMany('App\Genre');
     }
}
