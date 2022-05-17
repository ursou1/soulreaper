<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Attachment\Models\Attachment;
use Orchid\Screen\AsSource;
use Cviebrock\EloquentSluggable\Sluggable;

class Product extends Model
{
    use AsSource, HasFactory, Attachable, Sluggable;


    protected $fillable = [
        'title',
        'description',
        'image',
        'cost',
        'category_id',
        'slug'
    ];

    protected $allowedSorts = [
        'title',
        'created_at',
        'updated_at'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
