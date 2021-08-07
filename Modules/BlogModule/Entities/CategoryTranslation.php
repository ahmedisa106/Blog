<?php

namespace Modules\BlogModule\Entities;

use Illuminate\Database\Eloquent\Model;

class CategoryTranslation extends Model
{
    protected $table = 'category_translation';
    public $timestamps = false;

    protected $fillable = ['name', 'description'];
}
