<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Skill extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'id',
        'name',
        'icon',

    ];

    public function categories()
    {
        return $this->BelongsToMany(
            Category::class,
            'category_skill',
            'skill_id',
            'category_id'
        );
    }

    public function projects()
    {
        return $this->belongsToMany(
            Project::class,
            'skill_team_member_id',
            'team_member_id',
            'skill_id'
        );
    }
}
