<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;

    protected $table = 'subcategories';
    protected $guarded = false;

    public function videos()
    {
        return $this->hasMany(Video::class, 'subcategory_id', 'id');
    }
}
