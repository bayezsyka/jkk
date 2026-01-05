<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'client',
        'location',
        'year',
        'description',
        'thumbnail',
        'gallery',
        'status',
        'is_featured',
    ];

    protected $casts = [
        'gallery' => 'array',
        'is_featured' => 'boolean',
        'year' => 'integer',
    ];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
    public function scopePublished($query)
    {
        return $query->where('status', 'published');
    }
}
