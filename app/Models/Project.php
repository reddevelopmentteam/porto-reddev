<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'id',
        'name',
        'img',
        'desc',
        'skill',
        'link'
    ];

    protected $casts = [
        'skill' => 'array',
        'img' => 'array',
    ];

    public function skills()
    {
        return $this->belongsToMany(
            Skill::class,
            'project_skill',
            'project_id',
            'skill_id'
        );
    }
}
