<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
    protected $table = 'groups';
    
    public function files()
    {
        return $this->belongsToMany(File::class, 'files_groups_pivot');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'users_groups_pivot');
    }

}
