<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $fillable = [ 'file', 'product_id', 'thumbnail', 'featured','order_column'];
    protected $primaryKey = 'id';
    public function product(){
        return $this->belongsTo('App\Product');
    }
}
