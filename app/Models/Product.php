<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;
    protected $table = "products";
    protected $guarded= ['id'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function sales():HasMany{

        return $this->hasMany(Sale::class);
    }
}
