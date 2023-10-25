<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
public function status()
{
    return $this->belongsTo(Status::class);
}
public function comments()
{
    return $this->belongsToMany(Comment::class);
}
public function users()
{
    return $this->belongsToMany(User::class);
}
}
