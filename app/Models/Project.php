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
        'tech',
        'link'
    ];

    protected $casts = [
        'tech' => 'array',
        'img' => 'array',
    ];

    public function techs()
    {
        return $this->belongsToMany(
            Tech::class,
            'project_tech',
            'project_id',
            'tech_id'
        );
    }
}
