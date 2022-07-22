<?php

namespace App\Models;

use Encore\Admin\Traits\Resizable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory, Resizable;

    public function setPicturesAttribute($pictures)
    {
        if (is_array($pictures)) {
            $this->attributes['pictures'] = json_encode($pictures);
        }
    }

    public function getPicturesAttribute($pictures)
    {
        return json_decode($pictures, true);
    }
}
