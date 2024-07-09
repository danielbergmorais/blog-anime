<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'subtitle', 'active', 'slug', 'youtube', 'content', 'category_id', 'file', 'user_id'];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($post) {
            $post->slug = static::generateUniqueSlug($post->title);
        });

        static::updating(function ($post) {
            if ($post->isDirty('title')) {
                $post->slug = static::generateUniqueSlug($post->title, $post->id);
            }
        });
    }

    protected static function generateUniqueSlug($name, $id = 0)
    {
        $slug = Str::slug($name);
        $originalSlug = $slug;
        $count = 1;

        while (static::where('slug', $slug)->where('id', '!=', $id)->exists()) {
            $slug = $originalSlug . '-' . $count++;
        }

        return $slug;
    }

    public function isOwnedByAuthUser()
    {
        $user = Auth::user();

        return $user && ($user->admin || $user->id === $this->user_id);
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
