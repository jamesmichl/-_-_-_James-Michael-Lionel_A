<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = ['id'];
    protected $with = ['author', 'category'];

    
    public function scopeFilter($query, array $filters)
    {
        // $query->when($filters['search'] ?? false, function ($query, $search) {
        //     return $query->where(function ($query) use ($search) {
        //         $query->where('title', 'like', '%' . $search . '%')
        //             ->orwhere('body', 'like', '%' . $search . '%');
        //     });
        // // });
        // $query->when($filters['search'] ?? false, function($query, $search) {
        //     return $query->where('title', 'like', '%' . $search . '%')
        //                 ->orWhere('body', 'like', '%' . $search . '%');
        // });

        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where(function ($query) use ($search) {
                $query->where('title', 'like', '%' . $search . '%')
                    ->orwhere('body', 'like', '%' . $search . '%');
            });
        });

        $query->when($filters['author'] ?? false, function ($query, $author) {
            return $query->whereHas('author', function ($query) use ($author) {
                $query->where('name', $author);
            });
        });
        $query->when(
            $filters['category'] ?? false,
            fn ($query, $category) =>
            $query->whereHas(
                'category',
                fn ($query) =>
                $query->where('slug', $category)
            )
        );
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function sluggable(): array
    {
        return[
            'slug' => [
                'source'=>'title'
            ]
        ];
    }
}
