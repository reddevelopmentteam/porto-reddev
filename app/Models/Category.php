<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $table = "categories" ;

    protected $fillable = [
        'id',
        'name',
        'slug'
    ];

    public function skills()
    {
        return $this->belongsToMany(
            Skill::class,
            'category_skill',
            'category_id',
            'skill_id'
        );
    }
}
