<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'category_id',
        'sub_category_name',
        'title',
        'slug',
        'post_date',
        'description',
        'image',
    ];


    //__ join with category __//
    public function category_lj()
    {
        return $this->belongsTo(Category::class, "category_id");  //category_id
    }

    //__ join with sub_category __//
    public function sub_category_lj()
    {
        return $this->belongsTo(SubCategory::class, "sub_category_id");  //sub_category_id
    }

    //__ join with category __//
    public function user_lj()
    {
        return $this->belongsTo(User::class, "user_id");  //user_id
    }



}
