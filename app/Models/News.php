<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    use HasFactory;

    public $timestamps = true;

    protected $table = "news";
    protected $fillable = ["id","title", "content", "image", "category_id", "created_at", "deleted_at"];

    public function category()
    {
        return $this->belongsTo(Category::class, "category_id");
    }
}
