<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class ProductCategory extends Model
{
    
    // public function posts()
    // {
    //     return $this->hasMany(Voyager::modelClass('Post'))
    //         ->published()
    //         ->orderBy('created_at', 'DESC');
    // }

    public function productCategoryId()
    {
        return $this->belongsTo(self::class);
    }
}
