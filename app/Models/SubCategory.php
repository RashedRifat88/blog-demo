<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
  //

  protected $table = 'subcategories';

  protected $fillable = [
    'category_id',
    'sub_category_name',
    'sub_category_slug',
  ];


  public function category_lj()
  {
    return $this->belongsTo(Category::class, "category_id");  //category_id
  }




}
