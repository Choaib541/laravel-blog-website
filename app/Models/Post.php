<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        "cover",
        "title",
        "description",
        "content",
        "user_id"
    ];

    public static function search($search)
    {
        return self::with("owner", "categories")->whereHas("categories", function (Builder $query) use ($search) {
            $query->where("name", "like", "%$search%");
        })->orWhere("id", "=", $search)->orWhere("title", "LIKE", "%$search%")->paginate(6);
    }

    public function owner(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class, "user_id", "id");
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, "category_posts", "post_id", "category_id");
    }
}
