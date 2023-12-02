<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'overview', 'image', 'description', 'is_active', 'is_featured', 'goal', 'raised'];

    public function category(){
        return $this->belongsTo(ProjectCategory::class, 'project_category_id');
    }

    public function comments(){
        return $this->hasMany(ProjectComment::class);
    }
}
