<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TeamMember extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'id',
        'name',
        'role',
        'img',
        'link',
        'desc',
    ];

    protected $casts = [
        'role' => 'array',
        'skill' => 'array'
    ];

    public function roles()
    {   
        return $this->belongsToMany(
            Role::class,
            'role_team_member',
            'team_member_id',
            'role_id'
        )
        ->orderByRaw("
            CASE
                WHEN LOWER(name) = 'leader' THEN 0
                ELSE 1
            END
        ")
        ->orderBy('name');
    }

}
