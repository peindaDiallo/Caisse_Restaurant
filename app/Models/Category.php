<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $data)
 */
class Category extends Model
{
    use HasFactory;
    protected $table = "categories";

    protected $guarded= ['id'];

    public function products():HasMany{

        return $this->hasMany(Product::class);
    }
}
