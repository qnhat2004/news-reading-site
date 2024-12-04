<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    use HasFactory;

    protected $table = "news";
    protected $fillable = ["id","title", "content", "image", "category_id", "created_at", "deleted_at"];
}
