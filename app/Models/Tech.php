<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tech extends Model
{
    use SoftDeletes;

    protected $table = 'tech';
    
    protected $fillable = [
        'id',
        'name',
        'slug',
        'icon',
    ];

    public function projects()
    {
        return $this->belongsToMany(Project::class);
    }
}
