<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'id',
        'name'
    ];

    public function teamMembers()
    {
        return $this->belongsToMany(
            TeamMember::class,
            'role_team_member',
            'role_id',
            'team_member_id'
        );
    }
}
