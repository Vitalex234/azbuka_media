<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory, HasSlug, \Encore\Admin\Traits\Resizable;

    public function projectImage()
    {
        return $this->hasMany(ProjectImage::class);
    }

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('alias');
    }

    public function getRouteKeyName()
    {
        return 'alias';
    }
}
