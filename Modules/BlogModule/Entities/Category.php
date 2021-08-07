<?php

namespace Modules\BlogModule\Entities;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use Translatable;

    protected $table = 'categories';
    protected $fillable = ['photo'];
    protected $translatedAttributes = ['name', 'description'];


}
