<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Posts extends Model
{          

    use HasFactory;

	     protected $fillable = [
        'category_id',
        'subcategory_id',
        'user_id',
        'title',
        'slug',
        'post_date',
        'image',
        'discrption',
        'tags',
        'views',
        'status',

    ];



    //join with category
 

     public function category(): BelongsTo {
        return $this->belongsTo(Category::class, 'category_id');
    }

    //join with subcategory

    public function subcategory() :BelongsTo{
    	return $this->belongsTo(subs::class,'subcategory_id');
    }


    //join with user

    public function user():BelongsTo{
    	return $this->belongsTo(User::class,'user_id') ;
    }
}
