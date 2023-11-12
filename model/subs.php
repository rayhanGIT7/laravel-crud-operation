<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo; // Import BelongsTo

class subs extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'subcategory_name',
        'subcategory_slug',
    ];

    // Define the relationship to the "Category" model
    public function category(): BelongsTo {
        return $this->belongsTo(Category::class, 'category_id');
    }

  
}
